<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	public function batch()
    {
        return $this->hasMany('App\Batch');
    }
}

