<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Content;
use App\Model\Photo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Content;
        $post->title = $request->get('title');
        $post->subtitle = $request->get('subtitle');
        $post->date = $request->get('date');
        $post->content = $request->get('content');
        $post->category_id = $request->get('category_id');
        $post->user_id = $request->get('user_id');
        $post->save();

        // for ($i = 1; $i <= 3; $i++) {
        if ($request->file("photo_1")) {
            $photo = new Photo;
            $dir = "Foto/";
            $file = $request->file("photo_1")->store($dir, 'public');
            $photo->photo = $file;
            $photo->content_id = $post->id;
            $photo->save();
        }
        // }

        return redirect()->route('post.create')->with('status', "Post $post->title berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
