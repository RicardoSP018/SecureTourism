<?php

namespace App\Http\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IProductoSearchable;


class ProductoSearchableService implements IProductoSearchable extends Controller{


	function Search ($producto, $sorting){
		return response()->json();

	}

	function Search ($name){
		return response()->json();

	}
}