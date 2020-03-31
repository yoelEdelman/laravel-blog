<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    //
    public function index()
    {

        $cat = category::all();


        return view('categories.index', ['categories' => $cat]);

    }

    public function show($id, category $category){

        $cat = $category->findOrfail($id);


        return view('categories.show', ['category' => $cat]);

    }
}
