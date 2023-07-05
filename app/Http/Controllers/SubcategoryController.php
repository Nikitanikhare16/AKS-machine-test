<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
class SubcategoryController extends Controller
{
    public function create1(){
        $subcategory= Subcategory::all();
        $category=Category::all();
        return view('sub_categories.create',compact('subcategory','category'));
    }
    public function store1(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'category_id' => 'required',
        'sub_category' => 'required', ]);
     $subcategory = new Subcategory();
     $subcategory->category_id=$request->category_id;
     $subcategory->sub_category=$request->sub_category;
     $subcategory->active = $request->has('active');
     $subcategory->save();
     return redirect()->route('sub_categories.create');
    }

    public function edit1($id){


        $subcategory=Subcategory::find($id);
        // dd('$category');
        $category=Category::all();
         $data = Subcategory::all();

        return view('sub_categories.edit',compact('subcategory','category','data'));
    }

    public function update1(Request $request,$id)
    {
        // dd($request);
        $validated = $request->validate([
            'category_id' => 'required',
        'sub_category' => 'required', ]);
        $subcategory =Subcategory::find($id);
        $subcategory->category_id=$request->category_id;
     $subcategory->sub_category=$request->sub_category;
     $subcategory->active = $request->has('active');
     $subcategory->save();
     return redirect()->route('sub_categories.create')->with('message','Data Updated Successfully ...!');

    }
    public function delete1($id){
        $subcategory= Subcategory::find($id);
            $subcategory->delete();
        return redirect()->route('sub_categories.create');
    }

}
