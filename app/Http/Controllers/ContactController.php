<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactSendRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function send(ContactSendRequest $request)
    {
        $title   = $request->input('title');
        $name    = $request->input('name');
        $email   = $request->input('email');
        $content = $request->input('content');

        $check = $this->garbageCheck($email);
        if ($check) {
            return back();
        }
        $contact = new Contact();
        $contact->title = $title;
        $contact->name = $name;
        $contact->email = $email;
        $contact->content = $content;
        $contact->save();
        flash()->success('Send success', 'I have received your message, Thanks');
        return back();
    }

    public function garbageCheck($email)
    {
        $contact = Contact::where('email', $email)->first();
        if ($contact != null && (strtotime($contact['created_at']) + 10*60 > time())) {
            flash()->info('操作频繁', '请稍候再试');
            return true;
        } else {
            return false;
        }
    }
}
