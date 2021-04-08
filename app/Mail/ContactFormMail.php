<?php 

namespace App\Mail;
// namespace App\
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactFormMail extends Mailable{
    use Queueable,SerializesModels;
    public $data;
    public function __construct($data){
        $this->data = $data;
    }
    public function build(){
        // redirect('/');
        return $this->markdown('email.contact');
    }
}