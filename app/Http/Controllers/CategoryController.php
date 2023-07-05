<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
         ]);
     $category = new Category();
     $category->name=$request->name;
     $category->active = $request->has('active');
     $category->save();
     return redirect()->route('category.create');
    }
public function create(){
    $category= Category::all();
    return view('category.create',compact('category'));
}

public function edit($id){

    $category=Category::find($id);
    // dd('$category');
    $data=Category::all();
    return view('category.edit',compact('category','data'));
}

public function update(Request $request,$id)
{
    $validated = $request->validate([
        'category_id' => 'required',
     ]);
 $category =Category::find($id);
 $category->name=$request->name;
 $category->active = $request->has('active');
 $category->save();
 return redirect()->route('category.create');
}
public function delete($id){
    $category= Category::find($id);
        $category->delete();
    return redirect()->route('category.create');
}
}
