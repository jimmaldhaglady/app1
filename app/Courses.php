<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
	public function batch()
    {
        return $this->hasMany('App\Batch');
    }
}


