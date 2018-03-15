<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociativoController extends Controller
{
    public function index() {
    	return view('associativo');
    }
}
