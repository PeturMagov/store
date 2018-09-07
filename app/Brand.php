<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Validator;

class Brand extends Model
{
	public function products() {
		return $this->hasMany('App\Product');
	} 
    public $rules = array(
    	'name' => 'required'
    );
    protected $fillable = [
    	'name'
    ];
}
