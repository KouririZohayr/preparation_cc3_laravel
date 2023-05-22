<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendEmail() {
        
        // Ship the order...
        Mail::to('kouririzouhair88@gmail.com')->send(new OrderShipped());
        echo "Bravo! email envoyé!";
        //return redirect('/orders');
        }
        
}
