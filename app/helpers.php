<?php 

function flash($message)
{
    $flash = app('App\Http\Flash');
    $flash->message($message);
}
