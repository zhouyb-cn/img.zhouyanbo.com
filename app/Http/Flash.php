<?php 

namespace APP\Http;

class Flash
{

    public function message($message)
    {
        session()->flash('flash_message', $message);
    }
}
