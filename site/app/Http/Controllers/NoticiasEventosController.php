<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiasEventosController extends Controller
{
    public function noticias () {
    	return view('noticias');	
    }
    public function single() {
    	return view('single');
    }
    public function eventos() {
    	return view('eventos');
    }
        public function evento() {
    	return view('evento');
    }
}
