<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Validator;

class Unit extends Model
{
    public function product() {
		return $this->belongsTo('App\Product');
	}

	public $rules = array(
    	'number' => 'required',
    );
    protected $fillable = [
    	'number','product_id'
    ];
}
