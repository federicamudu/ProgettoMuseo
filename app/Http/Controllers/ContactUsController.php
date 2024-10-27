<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view("mail.index");
    }
    public function contactUsSubmit(Request $request){
        $mail=$request->email;
        Mail::to($mail)->send(new ContactUs());
        return redirect()->route("contactUs.index")->with("success","Ci hai contattato con successo!");
    }
}
