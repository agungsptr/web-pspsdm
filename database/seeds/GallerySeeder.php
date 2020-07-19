<?php

use App\Model\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            $gallery = new Gallery;
            $gallery->title = "title-$i";
            $gallery->photo = "photo-$i";
            $gallery->description = "description-$i";
            $gallery->save();
        }
    }
}
