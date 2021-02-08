<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(){
        return view('contact');
    }

    public function send(ContactRequest $request){
        $params = [
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'msg' => $request->get('message'),
            'subject' => 'Nouveau message'
        ];
        
        DB::table('contacts')->insert([
            'first_name' => $params['first_name'],
            'last_name' => $params['last_name'],
            'email' => $params['email'],
            'message' => $params['msg'],
        ]);

        Mail::to('julie@webstart.com', 'Julie de webstart')->send(new Contact($params));
        return redirect('contact')->with('status', 'Your message have been sent');
    }
}
