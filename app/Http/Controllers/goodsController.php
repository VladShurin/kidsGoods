<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class goodsController extends Controller
{
	public $categories;

	public function __construct()
	{
		$this->categories = App\Categories::all();
	}

	public function showGoodsCategory($category)
	{
		$goods = App\Goods::getGoodsCategory($category);
		return view('home', [
			'goods' => $goods,
			'categories' => $this->categories
		]);
	}

	public function showSelectedGoods($idGoods)
	{
		$goods = App\Goods::getSelectedGoods($idGoods);
		return view('showGoods', [
			'goods' => $goods,
			'categories' => $this->categories
		]);
	}
}
