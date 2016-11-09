<?php namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent;

class Product extends Model {

	protected $fillable = ['name','category_id'];


	public function category()
	{
		//dd($this);
		//dd($this->belongsTo('App\Category'));
		//dd($this->categories_id);
		//return Category::find($this->category_id);
		return $this->belongsTo('App\Category');
	}

}
