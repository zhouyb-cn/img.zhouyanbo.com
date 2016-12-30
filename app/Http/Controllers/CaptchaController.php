<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Captcha;

class CaptchaController extends Controller
{
    public function create()
    {
        return Captcha::create();
    }
}
