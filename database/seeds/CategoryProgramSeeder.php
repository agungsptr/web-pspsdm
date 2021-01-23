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
            'Berita',                             //101
            'Pertanian',                          //102
            'Kesehatan',                          //103
            'Air Bersih',                         //104
            'Pendidikan',                         //105
            'Pemberdayaan Perempuan',             //106
            'Peternakan',                         //107
            'Hutan Kemasyarakatan',               //108
            'Padat Karya',                        //109      
            'Pemberdayaan Masyarakat Adat',       //110
            'Penelitian & Pelatihan',             //111
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
