<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
                'category' => "required|max:191",
            ],
            [
                'category.required' => 'Kategori harus diisi',
                'category.max' => 'Kategori tidak boleh melebihi 191 karakter',
            ]
        );

        $category = new Category;
        $category->category = $request->get('category');
        $category->save();

        return redirect()->route('category.create')->with('status', "Kategori \"$category->category\" berhasil ditambahkan");
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
        $category = Category::findOrFail($id);
        return view('category.edit', ['category' => $category]);
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
                'category' => "required|max:191",
            ],
            [
                'category.required' => 'Kategori harus diisi',
                'category.max' => 'Kategori tidak boleh melebihi 191 karakter',
            ]
        );

        $category = Category::findOrFail($id);
        $category->category = $request->get('category');
        $category->save();

        return redirect()->route('category.edit', ['category' => $category->id])->with('status', "Kategori \"$category->category\" berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $val = $category->category;
        $category->delete();

        return redirect()->route('category.index')->with('status', "Kategori $val berhasil dihapus");
    }
}
