<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = ['name'];

		public function products()
	{
		//dd($this);
		//dd($this->belongsTo('App\Category'));
		//dd($this->categories_id);
		//return Category::find($this->category_id);
		return $this->belongsToMany('App\Product');
	}


}
