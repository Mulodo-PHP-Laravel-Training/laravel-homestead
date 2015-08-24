<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	// The table associated with the model.
    protected $table = 'clients';
    
    // Indicates if the model should be timestamped.
    //public $timestamps = false;
    
    // The storage format of the model's date columns.
    protected $dateFormat = 'U';
}
