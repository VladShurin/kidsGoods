<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
	public static function getGoodsCategory($category)
	{
		return static::where('category', $category)->get();
	}

	public static function getNewGoods()
	{
		return static::orderBy('date', 'DESC')->limit(10)->get();
	}

	public static function getSelectedGoods($idGoods)
	{
		return static::where('id', $idGoods)->get();
	}
}
