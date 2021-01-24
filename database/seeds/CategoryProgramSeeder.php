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
            'Berita',                             //100
            'Pertanian',                          //101
            'Kesehatan',                          //102
            'Air Bersih',                         //103
            'Pendidikan',                         //104
            'Pemberdayaan Perempuan',             //105
            'Peternakan',                         //106
            'Hutan Kemasyarakatan',               //107
            'Padat Karya',                        //108 
            'Pemberdayaan Masyarakat Adat',       //109
            'Penelitian & Pelatihan',             //110
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
