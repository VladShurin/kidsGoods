<?php

namespace App\Http\Controllers;

use App;
class categoriesController extends Controller
{
	public function index()
	{
		$newGoods = App\Goods::getNewGoods();
		$categories = App\Categories::all();
		return view('home', [
			'categories' => $categories,
			'goods' => $newGoods
		]);
	}
}
