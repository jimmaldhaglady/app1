<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timming extends Model
{
	 public function batchesandtimming()
    {
        return $this->hasMany('App\BatchesandTimming');
    }
}

