<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function create2(){
        $product= Product::all();
        $category =Category::all();
        // $data= Subcategory::all();
        $subcategory=Subcategory::all();
        // dd($subcategory);
        return view('products.create',compact('product','category','subcategory'));
    }



 public function store2(Request $request)
 {
    $validated = $request->validate([
        'category_id' => 'required',
        'sub_category' => 'required',
        'product_name' => 'required',
        'image' => 'required',
        'title' => 'required',
        'heading' => 'required',
        'description_' => 'required',
        'features' => 'required',

        'pdf_heading' => 'required',

        'pdf_file' => 'required',


     ]);
     $product = new Product();
    //  dd($request);
     $product->category_id = $request->category_id;
     $product->sub_category = $request->sub_category;
     $product->product_name = $request->product_name;
     if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $product->image = $filename;
            }     $product->short_description = $request->short_description;
     $product->title = $request->title;
     $product->heading = $request->heading;
     $product->description_ = $request->description_;
     $product->features = $request->features;
     $product->pdf_heading = $request->pdf_heading;
     $product->pdf_file = $request->pdf_file;
     $product->active = $request->has('active');
    //  dd($product);
$product->save();
     return redirect()->route('products.create');
 }
 public function edit2($id){
    $product=Product::find($id);
    // dd('$category');
    $category=Category::all();
    $data=Product::all();
    $subcategory=Subcategory::all();
    return view('products.edit',compact('subcategory','category','product','data'));
}
 public function update2(Request $request,$id)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'sub_category' => 'required',
            'product_name' => 'required',
            'image' => 'required',
            'title' => 'required',
            'heading' => 'required',
            'description_' => 'required',
            'features' => 'required',

            'pdf_heading' => 'required',

            'pdf_file' => 'required',

         ]);
        // dd($request);
        $product =Product::find($id);
        //  dd($request);
         $product->category_id = $request->category_id;
         $product->sub_category = $request->sub_category;
         $product->product_name = $request->product_name;
         if($request->hasFile('image')){
                    $file = $request->file('image');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extension;
                    $file->move('uploads/',$filename);
                    $product->image = $filename;
                }     $product->short_description = $request->short_description;
         $product->title = $request->title;
         $product->heading = $request->heading;
         $product->description_ = $request->description_;
         $product->features = $request->features;
         $product->pdf_heading = $request->pdf_heading;
         $product->pdf_file = $request->pdf_file;
         $product->active = $request->has('active');
        //  dd($product);
    $product->save();
         return redirect()->route('products.create');

   }
 public function delete2($id){
        $product= Product::find($id);
            $product->delete();
        return redirect()->route('products.create');
    }

}




