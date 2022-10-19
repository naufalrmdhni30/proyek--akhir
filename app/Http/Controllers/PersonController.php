<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    // membuat attribute name
    private $name ="Naufal";

    // membuat method index
    Public function index(){
        // mengembalikan nilai atribute name
        return $this->name;
    }
    Public function show($param){
        // merubah Attribute name
        $this->name= $param;
        return $this->name;
    }
	/**
	 * @return mixed
	 */
	function getName() {
		return $this->name;
	}
}

