<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MyEmail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Test Email',
            'body' => 'This is a test email sent by Laravel 8.',
        ];
    }
}
