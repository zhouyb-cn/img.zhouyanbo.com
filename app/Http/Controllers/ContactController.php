<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSend;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
    	flash()->success('Send success', 'I have received your message, Thanks');
    	return back();
    }
}
