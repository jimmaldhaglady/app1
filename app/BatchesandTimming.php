<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BatchesandTimming extends Model
{
	 public function timming()
    {
        return $this->BelongsTo('App\Timming');
    }
     public function course()
    {
        return $this->BelongsTo('App\Course');
    }
}
}

