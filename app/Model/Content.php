<?php

namespace App\Model;

use App\User;
use App\Model\Photo;
use App\Model\Category;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public function photos()
    {
        $photos = Photo::where('content_id', $this->id)->get();
        return $photos;
    }

    public function user()
    {
        $user = User::find($this->user_id);
        return $user->name;
    }

    public function date()
    {
        $date = $this->date;
        $month = intval(substr($date, 5, 2));
        $month_name = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "Septemper", "Oktober", "November", "Desember"
        ];
        $year = substr($date, 0, 4);
        $month_text = $month_name[$month-1];
        $day = substr($date, 8, 2);

        return "$day $month_text, $year";
    }

    public function category()
    {
        $category = Category::find($this->category_id);
        return $category->category;
    }
}
