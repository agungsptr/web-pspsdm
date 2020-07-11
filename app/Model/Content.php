<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function photos()
    {
        $photos = Photo::where('content_id', $this->id)->get();
        return $photos;
    }
}
