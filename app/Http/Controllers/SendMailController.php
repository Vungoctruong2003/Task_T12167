<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class SendMailController extends Controller
{
    public function index()
    {
        $user = Session::get('user');
        $email_user = $user['email'];
        Mail::to($email_user)->send(new SendEmail());
    }
}
