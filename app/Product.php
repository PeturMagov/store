<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Validator;

class Product extends Model
{
	public function brand() {
		return $this->belongsTo('App\Brand');
	}
    public function units() {
        return $this->hasMany('App\Unit');
    }
    public $rules = array(
    	'name' => 'required',
    	'price' => 'required'
    );
    protected $fillable = [
    	'name','price','brand_id'
    ];
}
