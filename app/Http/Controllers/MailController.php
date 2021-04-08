<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class MailController extends Controller{
    public function store(){
        $data = request()->validate([
            "username" => "required",
           "phoneno" => "required",
            "email" => "required|email",
            "coursetype"=>"required"
            ]);
        // dd(request()->all());
        
        Mail::to('ikhan0877@gmail.com')->send(new ContactFormMail($data));
        return redirect()->to('/confirm');
    }
}