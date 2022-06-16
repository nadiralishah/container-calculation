<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calculation extends Controller
{
    public function square($width, $length)
    {
        return $width * $length;
    }

    public function circle($radius)
    {
        return $radius * 2;
    }
}
