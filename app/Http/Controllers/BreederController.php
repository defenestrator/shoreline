<?php

namespace Seeds\Http\Controllers;

use Illuminate\Http\Request;

class BreederController extends Controller
{
    public function index() {
        return view('breeders' );
    }
}
