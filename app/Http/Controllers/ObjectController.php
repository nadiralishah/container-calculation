<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObjectController extends Controller
{
    public $width = null;
    public $length = null;
    public $radius = null;

    public function __construct($width, $length, $radius)
    {
        $this->width = $width;
        $this->length = $length;
        $this->radius = $radius;
    }
}
