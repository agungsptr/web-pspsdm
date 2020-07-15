<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Content;
use App\Model\Photo;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function byCategory($category_id)
    {
        $category = Category::findOrFail($category_id);
        $posts = Content::where('category_id', $category->id)->get();
        return view('home.post.list', [
            'posts' => $posts,
            'category' => $category
        ]);
    }

    public function byCategoryName($category)
    {
        $category = Category::where('category', $category)->get()->first();
        if (isset($category)) {
            $posts = Content::where('category_id', $category->id)->get();
            return view('home.post.list', [
                'posts' => $posts,
                'category' => $category
            ]);
        } else {
            abort(404);
        }
    }

    public function byId($id)
    {
        $post = Content::findOrFail($id);
        return $post;
    }

    public function gallery()
    {
        $photos = Photo::all();
        return view('home.gallery', ['photos' => $photos]);
    }
}
