<?php

namespace App\Http\Livewire;

use App\Jobs\SendContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $agreement;


    protected $rules = [
        'name' => 'required|string|min:5|max:255',
        'email' => 'required|email|max:255',
        'phone' => ['required', 'regex:/^((\+?234)|(0))[7-9]{1}[0-1]{1}[0-9]{8}$/','min:11', 'max:25'],
        'subject' => 'string|min:5|max:255',
        'message' => 'required|string',
        'agreement' => 'required'
    ];

    protected $messages = [
//        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'agreement.required' => 'Please check the Terms and Conditions box to continue'
    ];

    protected $validationAttributes = [
        'email' => 'email address',
        'phone' => 'phone number'
    ];



    public function updated($name) {
        $this->validateOnly($name);
    }

    public function send() {
        $this->validate();

        SendContactMail::dispatch([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message
        ]);


        $this->reset(['name', 'email', 'phone', 'subject', 'message', 'agreement']);
        session()->flash('success', 'Thanks for contacting us, We will get back to you soon!');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
