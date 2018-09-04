<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Validator;

class Product extends Model
{
    public $rules = array(
    	'name' => 'required',
    	'price' => 'required'
    );
    protected $fillable = [
    	'name', 'price'
    ];
}
