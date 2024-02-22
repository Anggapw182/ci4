<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($nama="", $umur=0)
    {
        echo "ini controller coba method index $nama dan umur $umur";
    }
}
