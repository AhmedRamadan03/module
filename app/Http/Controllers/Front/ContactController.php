<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
           // Get Meta & Banner From DB
           $metaBanner =getMeta('contact');
           // Set Meta Home
           metaGenerate($metaBanner);
        return view('front.contact.index',[
            'metaBanner' => $metaBanner
        ]);
    }

    public function sendContact(Request $request)
    {
        $data = $request->except('_token');
        $mail = getSettingValue('email_1');
        Mail::to($mail)->send(new ContactMail($data));
        session()->flash('success','data send success');
        return back();
    }
}
