<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    
   public function galleryCategories()
    {
        return $this->BelongsTo('App\GalleryCategories');
    }
}
