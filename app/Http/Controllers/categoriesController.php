<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class categoriesController extends Controller
{
	public function index()
	{
		$categories = App\Categories::all();
		return view('index', [
			'categories' => $categories
		]);
	}
}
