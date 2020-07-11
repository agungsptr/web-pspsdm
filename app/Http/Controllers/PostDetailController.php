<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Content;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function byCategory($category_id)
    {
        $category = Category::findOrFail($category_id);
        $post = Content::where('category_id', $category->id)->get();
        return $post;
    }

    public function byId($id){
        $post = Content::findOrFail($id);
        return $post;
    }
}
