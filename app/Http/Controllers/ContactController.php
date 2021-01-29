<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Jobs\SendContactMail;
use App\Jobs\SendQuoteMail;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
                        'agreement' => 'required',
                        'name' => 'required|string|max:255',
                        'email' => 'required|email|max:255',
                        'phone' => 'required|string|max:25',
                        'subject' => 'string|max:255',
                        'message' => 'required|string'
                ]);

        // return new \App\Mail\Contact($request->all());
        SendContactMail::dispatch($request->all())->afterResponse();


        return back()->with('success', 'Thanks for contacting us, We will get back to you soon!');

    }

    public function getQuote(Request $request){
        $this->validate($request, [
                        'agreement' => 'required',
                        'name' => 'required|string|max:255',
                        'email' => 'required|email|max:255',
                        'phone' => 'required|string|max:25',
                        'subject' => 'string|max:255',
                        'message' => 'required|string'
                ]);

        // return new \App\Mail\Contact($request->all());
        SendQuoteMail::dispatch($request->all())->afterResponse();


        return back()->with('success', 'Thanks for contacting us, We will get back to you soon!');

    }


    public function preview() {
        $contact = [
            'name' => 'Ajibodu Joseph Oluwayomi',
            'email' => 'josephajibodu@gmail.com',
            'phone' => '08163837724',
            'subject' => 'Testing Email',
            'message' => "When designing a mailable's template, it is convenient to quickly preview the rendered mailable in your browser like a typical Blade template. For this reason, Laravel allows you to return any mailable directly from a route closure or controller. When a mailable is returned, it will be rendered and displayed in the browser, allowing you to quickly preview its design without needing to send it to an actual email address:"
        ];

        return new \App\Mail\Contact($contact);
    }
}
