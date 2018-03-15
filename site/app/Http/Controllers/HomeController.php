<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use View;

class HomeController extends Controller
{
	public function index () {
		$array = $this->get_data();
 	// var_dump($array['home']);
		return View::make('home')->with(array( 'page' => $array['home'] ));
	}
	private function get_data(){

		$json = json_decode(file_get_contents('http://adm-femicro/json/home'),true); 

		return $json;

	}
}
