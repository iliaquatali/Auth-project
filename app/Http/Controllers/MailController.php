<?php
  
namespace App\Http\Controllers;
  
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
  
class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Liaquat',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('liaquat0323@gmail.com
        ')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}