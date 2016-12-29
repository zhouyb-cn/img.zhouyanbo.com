<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(ContactSend $request)
    {
    	flash()->success('Send success', 'I have received your message, Thanks');
    	$title = $request->input('title');
    	$name = $request->input('name');
    	$email = $request->input('email');
    	$content = $request->input('content');

    	$rules = ['captcha' => 'required|captcha'];
    	// dd($request->all());
        $validator = Validator::make($request->all(), $rules);
        // if ($validator->fails())
        // {
        //     echo 'fail';
        // }
        // else
        // {
        //     echo 'success';
        // }
    	return back();
    }
}
