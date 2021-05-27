<?php

namespace App\Http\Livewire\Bootcamp;

use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\User;
use App\Models\Order;

class Registration extends Component
{
    public $firstname, $lastname, $phonenumber, $email, $slots, $message;
    public $registering = true;
    public $payment = false;
    public $plan;
    public $amount;
    public $original_amount;
    public $order;
    public $user;
    public $paymentLink;
    public $alreadyRegistered = false;

    protected $rules = [
        'firstname' => 'required|string|min:2|max:255',
        'lastname' => 'required|string|min:2|max:255',
        'email' => 'required|email|max:255',
        'phonenumber' => ['required', 'regex:/^((\+?234)|(0))[7-9]{1}[0-1]{1}[0-9]{8}$/','min:11', 'max:25'],
        'slots' => 'nullable',
        'message' => 'nullable|string',
    ];

    protected $messages = [
        'email.email' => 'The Email Address format is not valid.',
    ];

    protected $validationAttributes = [
        'email' => 'email address',
        'phone' => 'phone number'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        if (isset($this->plan['original_amount'])) {
            $this->original_amount = number_format($this->plan['original_amount']);
        }
    }

    public function render()
    {
        return view('livewire.bootcamp.registration');
    }

    public function registerNow()
    {
        $this->validate();

        $this->user = User::where('email', $this->email)->first();
        
        if (is_null($this->user)) {
            // Set order value
            $amt = intval($this->plan['amount']);
            $this->amount = number_format($amt);

            try {
                DB::beginTransaction();
                // Register Users
                $this->user = User::create([
                    'firstname' => $this->firstname,
                    'lastname' => $this->lastname,
                    'email' => $this->email,
                    'phonenumber' => $this->phonenumber,
                    'password' => trim($this->lastname),
                ]);
                
                // Create Order
                $this->order = Order::create([
                    'user_id' => $this->user->id,
                    'reference' => $this->reference($this->user->id),
                    'amount' => $amt * 100,
                    'unit' => 1
                ]);
                
                // No problem : commit changes
                DB::commit();
        
            } catch (\Throwable $th) {
                DB::rollBack();
                // Flash errors
                $this->addError('registration', 'Could not continue with the registration. Try again.');
                throw $th;
            }
        } else {
            // Get the order created
            $order = Order::where('user_id', $this->user->id)->first();

            if ($order->status == 'successful') {
                session()->flash('message', 'You have completed your registration. Contact the your guide on 08167297386');
                return;
            }
            
            $this->order = $order;
            $this->alreadyRegistered = true;
        }

        // Switch to payment mode
        $this->registering = false;
    }

    public function initiatePayment()
    {
        try {
            // Initialize Payment
            $data = [
                'amount' => $this->order->amount/100,
                'email' => $this->user->email,
                'tx_ref' => $this->order->reference,
                'currency' => "NGN",
                'redirect_url' => route('bootcamp.payment.callback'),
                'customer' => [
                    'email' => $this->user->email,
                    "phone_number" => $this->user->phonenumber,
                    "name" => $this->user->firstname. ' ' . $this->user->lastname,
                ],

                "customizations" => [
                    "title" => "CREMIR WEB-DEV BOOTCAMP",
                    "description" => "Payment for ".$this->slots." ".strtoupper($this->plan['title'])." slot(s) at the 4-week web development bootcamp",
                    "logo" => "https://cremir.org/images/logo.png",
                ]
            ];

            $payment = Flutterwave::initializePayment($data);
 
            if ($payment['status'] !== 'success') {
                // notify something went wrong
                $this->addError('payment_error', 'Could not continue with the Payment. Try again.');
                return back()->with('error', 'An error occured while processing payment!');
            }

            $this->paymentLink = $payment['data']['link'];

            return redirect()->away($payment['data']['link']);

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $this->paymentLink = "Curl Error";
            session()->flash('payment_error', 'Could not continue with the Payment. Try again.');
            // throw $e;
        }  catch (\Throwable $e) {
            $this->paymentLink = "Error";
            session()->flash('payment_error', 'Could not continue with the Payment. Try again.');
            throw $e;
        }
        

        // Return a response to the user
    }

    protected function reference($id)
    {
        return 'BTCP-' . $id . '-' . Str::random(10);
    }

}
