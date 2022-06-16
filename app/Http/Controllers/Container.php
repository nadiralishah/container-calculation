<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Container extends Controller
{
    public $width = null;
    public $length = null;
    public $size = null;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
        $this->size = $width * $length;
    }
}