<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class goodsController extends Controller
{
	public function showGoods($category)
	{
		$goods = App\Goods::getGoodsCategory($category);
		return view('showGoods', [
			'goods' => $goods
		]);
	}
}
