<?php

namespace Naftalivo\EmailContact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Naftalivo\EmailContact\Mail\EmailContactMailable;
use Naftalivo\EmailContact\Models\EmailContact;

class EmailContactController extends Controller
{
    //
    public function index(){
        return view('emailcontact::emailcontact');
    }

    public function send(Request $request){

        // Sending Email
        Mail::to(config('emailcontact.send_email_to'))->send(new EmailContactMailable($request->message, $request->name));

        // return $request->all();
        EmailContact::create($request->all());
        return redirect(route('emailcontact'));
    }
}
