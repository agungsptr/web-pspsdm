<?php

namespace App\Http\Controllers;

use App\Model\Content;
use Illuminate\Http\Request;
use App\Model\Category;

class ProgramKerjaController extends Controller
{
    // 101
    public function Pertanian()
    {
        $category_id = 101;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.pertanian', ['posts' => $posts]);
    }

    // 102
    public function Kesehatan()
    {
        $category_id = 102;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.kesehatan', ['posts' => $posts]);
    }

    // 103
    public function AirBersih()
    {
        $category_id = 103;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.airbersih', ['posts' => $posts]);
    }

    // 104
    public function Pendidikan()
    {
        $category_id = 104;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.pendidikan', ['posts' => $posts]);
    }

    // 105
    public function PemberdayaanPerempuan()
    {
        $category_id = 105;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(3);
        return view('home.program-kerja.pemperempuan', ['posts' => $posts]);
    }

    // 106
    public function UsahaEkonomiProduktif()
    {
        $category_id = 106;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.peternakan', ['posts' => $posts]);
    }

    // 107
    public function HutanKemasyarakatan()
    {
        $category_id = 107;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.hutankemasyarakatan', ['posts' => $posts]);
    }

    // 108
    public function PadatKarya()
    {
        $category_id = 108;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.padatkarya', ['posts' => $posts]);
    }

    // 110
    public function PenelitianDanPelatihan()
    {
        $category_id = 110;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.pelatihanpenelitian', ['posts' => $posts]);
    }

    // 109
    public function PemberdayaanAdat()
    {
        $category_id = 109;
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->paginate(5);
        return view('home.program-kerja.pemberdayaanadat', ['posts' => $posts]);
    }
}
