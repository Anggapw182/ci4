<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message'); //----view\welcome_message

        // Basic rule "http://localhost:8080/controller/method .
        // Example http://localhost:8080/home/index
    }

    public function coba(){
        echo "Hello";
    }
}
