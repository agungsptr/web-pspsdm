<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\User;

class DataTableController extends Controller
{
    public function getUser()
    {
        return datatables()->of(User::all())
            ->addColumn('aksi', function ($user) {
                return '<a href="' . route('user.edit', ['user' => $user->id]) . '" class="btn btn-warning btn-sm mr-2">Edit</a>'
                    . '<button type="button" class="btn btn-danger btn-sm btn-delete" data-remote="' . route('user.destroy', ['user' => $user->id]) . '">Delete</button>';
            })
            ->rawColumns(['aksi'])
            ->toJson();
    }

    public function getCategory()
    {
        return datatables()->of(Category::all())
            ->addColumn('aksi', function ($category) {
                return '<a href="' . route('category.edit', ['category' => $category->id]) . '" class="btn btn-warning btn-sm mr-2">Edit</a>'
                    . '<button type="button" class="btn btn-danger btn-sm btn-delete" data-remote="' . route('category.destroy', ['category' => $category->id]) . '">Delete</button>';
            })
            ->rawColumns(['aksi'])
            ->toJson();
    }
}
