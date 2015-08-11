<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sliders extends Model
{
	protected $table = 'sliders';
	protected $fillable = ['title','image','description','created_at', 'updated_at'];
}
