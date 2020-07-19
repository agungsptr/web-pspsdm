<?php

namespace App\Http\Controllers;

use App\Model\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
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
                'description' => "required",
                'photo' => "required",
            ],
            [
                'title.required' => 'Judul harus diisi',
                'description.required' => 'Deskripsi harus diisi',
                'photo.required' => 'Foto harus diisi',
            ]
        );

        $gallery = new Gallery;
        $gallery->title = $request->get('title');
        $gallery->description = $request->get('description');

        if ($request->file('photo')) {
            $dir = "Gallery";
            $file = $request->file("photo")->store($dir, 'public');
            $gallery->photo = $file;
        }

        $gallery->save();

        return redirect()->route('gallery.create')->with('status', "Foto $gallery->title berhasil ditambahkan");
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
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', ['gallery' => $gallery,]);
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
                'description' => "required",
                'photo' => "required",
            ],
            [
                'title.required' => 'Judul harus diisi',
                'description.required' => 'Deskripsi harus diisi',
                'photo.required' => 'Foto harus diisi',
            ]
        );

        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->get('title');
        $gallery->description = $request->get('description');

        if ($request->file('photo')) {
            $dir = "Gallery";
            $file = $request->file("photo")->store($dir, 'public');
            $gallery->photo = $file;
        }

        $gallery->save();

        return redirect()->route('gallery.edit', ['gallery' => $id])->with('status', "Foto $gallery->title berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $title = $gallery->title;

        if ($gallery->photo) {
            Storage::delete('public/' . $gallery->photo);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('status', "Foto $title berhasil didelete");
    }
}
