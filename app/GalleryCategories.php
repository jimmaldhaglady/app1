<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategories extends Model
{
   public function gallery()
    {
        return $this->hasMany('App\Gallery');
    }
}
