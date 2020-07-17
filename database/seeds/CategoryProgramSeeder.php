<?php

use App\Model\Category;
use Illuminate\Database\Seeder;

class CategoryProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Agro Forestry',            //100
            'Kesehatan',                //101
            'Air Bersih',               //102
            'Pertanian',                //103
            'Pendidikan',               //104
            'Proyek Padat Karya',       //105      
            'Penelitian & Pelatihan',   //106
            'Berita'                    //107
        ];
        $id = 100;
        foreach ($categories as $category) {
            $categ = new Category;
            $categ->id = $id;
            $categ->category = $category;
            $categ->save();
            $id++;
        }
    }
}
