<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    // Read
    public function index() {
        $getCategory = Categories::all();
        return view('category.category', compact('getCategory'));
    }

    // Delete
    public function destroy($id) {
        $dropCategory = Categories::find($id);
        $dropCategory -> delete();
        return redirect() -> back();
    } 
}
