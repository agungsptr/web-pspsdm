<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Content;
use App\Model\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $request->validate(
            [
                'title' => "required",
                'date' => "required",
                'content' => "required",
                'category_id' => "required",
                'user_id' => "required",
            ],
            [
                'title.required' => 'Judul harus diisi',
                'date.required' => 'Tanggal harus diisi',
                'content.required' => 'Konten harus diisi',
                'category.required' => 'Kategori harus diisi',
                'user_id.required' => 'User harus diisi login',
            ]
        );

        $post = new Content;
        $post->title = $request->get('title');
        $post->subtitle = $request->get('subtitle');
        $post->date = $request->get('date');
        $post->content = nl2br($request->get('content'));
        $post->category_id = $request->get('category_id');
        $post->user_id = $request->get('user_id');

        if ($request->file('document')) {
            $dir = "Dokumen";
            $file = $request->file("document")->store($dir, 'public');
            $post->document = $file;
        }

        $post->save();

        for ($i = 1; $i <= 3; $i++) {
            if ($request->file("photo_" . $i)) {
                $photo = new Photo;
                $dir = "Foto";
                $file = $request->file("photo_" . $i)->store($dir, 'public');
                $photo->photo = $file;
                $photo->content_id = $post->id;
                $photo->save();
            }
        }

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
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Content::findOrFail($id);
        $categories = Category::all();

        $breaks = array("<br />", "<br>", "<br/>");
        $content = str_ireplace($breaks, "", $post->content);

        return view('post.edit', [
            'post' => $post,
            'categories' => $categories,
            'content' => $content
        ]);
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
        $request->validate(
            [
                'title' => "required",
                'date' => "required",
                'content' => "required",
                'category_id' => "required",
                'user_id' => "required",
            ],
            [
                'title.required' => 'Judul harus diisi',
                'date.required' => 'Tanggal harus diisi',
                'content.required' => 'Konten harus diisi',
                'category.required' => 'Kategori harus diisi',
                'user_id.required' => 'User harus diisi login',
            ]
        );

        $post = Content::findOrFail($id);
        $post->title = $request->get('title');
        $post->subtitle = $request->get('subtitle');
        $post->date =  str_replace("T", " ", $request->get('date'));
        $post->content = nl2br($request->get('content'));
        $post->category_id = $request->get('category_id');
        $post->user_id = $request->get('user_id');

        if ($request->file('document')) {
            $dir = "Dokumen";
            $file = $request->file("document")->store($dir, 'public');
            $post->document = $file;
        }

        $post->save();

        for ($i = 1; $i <= 3; $i++) {
            if ($request->file("photo_" . $i)) {
                $photo_id = $request->get('photo_id_' . $i);
                if ($photo_id) {
                    $photo = Photo::find($photo_id);
                    Storage::delete('public/' . $photo->photo);
                } else {
                    $photo = new Photo;
                    $photo->content_id = $id;
                }

                $dir = "Foto";
                $file = $request->file("photo_" . $i)->store($dir, 'public');
                $photo->photo = $file;
                $photo->save();
            }
        }

        return redirect()->route('post.edit', ['post' => $id])->with('status', "Post $post->title berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Content::findOrFail($id);
        $title = $post->title;

        $photos = Photo::where('content_id', $post->id)->get();
        foreach ($photos as $photo) {
            Storage::delete('public/' . $photo->photo);
            $photo->delete();
        }

        if ($post->document) {
            Storage::delete('public/' . $post->document);
        }

        $post->delete();

        return redirect()->route('post.index')->with('status', "Post $title berhasil didelete");
    }
}
