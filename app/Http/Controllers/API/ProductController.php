<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
class ProductController extends Controller
{
    public function store2(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category' => 'required',
            'product_name' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'title'=>'required',
            'heading' => 'required',
            'description_' => 'required',
            'features' => 'required',
            'pdf_heading' => 'required',
            'pdf_file' => 'required',
            'active'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
        }
        if(!($request->name) && !($request->active)){
            return response()->json(["product"=>null,'message'=>"Invalid data","status"=>400]);

        }
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
        return response()->json(["product"=>$product,'message'=>"Data is created !","status"=>201]);
    }

    public function update2(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category' => 'required',
            'product_name' => 'required',
            'image' => 'required',
            'short_description' => 'required',
            'title'=>'required',
            'heading' => 'required',
            'description_' => 'required',
            'features' => 'required',
            'pdf_heading' => 'required',
            'pdf_file' => 'required',
            'active'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
        }
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
    return response()->json(["product"=>  $product,'message'=>"Data is updated","status"=>202]);
    }
    public function delete2($id)
    {
        $product=Product::find($id);
        $product->delete();
        return response()->json(["product"=>null,'message'=>"Data is deleted","status"=>200]);
    }

}
