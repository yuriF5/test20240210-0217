<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthorRequest;

class CategoryController extends Controller
{
    public function confirm(Request $request){
        $category = ['content' => $request->category];
        return view('confirm', compact('category'));
    }

    public function store(Request $request)
    {
        $category = $request->only(['content']);
        Category::create($category);
        return view('thanks');
    }
}
