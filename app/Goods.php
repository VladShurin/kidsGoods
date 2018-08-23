<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
	public static function getGoodsCategory($category)
	{
		return static::where('category', $category)->get();
	}
}
