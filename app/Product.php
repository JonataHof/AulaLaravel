<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Product extends Model {

	protected $fillable = ['name'];



	public function categories()
	{
		//dd($this);
		//dd($this->belongsTo('App\Category'));
		//dd($this->categories_id);
		//return Category::find($this->category_id);
		return $this->belongsToMany('App\Category');
	}

	function categoriesNames()

	{
		$categories =  $this->categories->lists('name');
				
		return $categories;
	}

	function getCategoryListAttribute()
	{
		$categories =  $this->categories->lists('id');
				
		return $categories;
	}
}
