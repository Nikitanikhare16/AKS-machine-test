<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Subcategory;
class SubcategoryController extends Controller
{
    public function store1(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category' => 'required',
            'active'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
        }
        if(!($request->name) && !($request->active)){
            return response()->json(["subcategory"=>null,'message'=>"Invalid data","status"=>400]);

        }
        $subcategory = new Subcategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->sub_category = $request->sub_category;
        $subcategory->active = $request->has('active');
        $subcategory->save();

        return response()->json(["subcategory"=>$subcategory,'message'=>"Data is created !","status"=>201]);
    }
    public function update1(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'sub_category' => 'required',
            'active'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
        }
        $subcategory =Subcategory::find($id);
        $subcategory->category_id=$request->category_id;
     $subcategory->sub_category=$request->sub_category;
     $subcategory->active = $request->has('active');
     $subcategory->save();
    return response()->json(["subcategory"=>  $subcategory,'message'=>"Data is updated","status"=>202]);
    }
    public function delete1($id)
    {
        $subcategory=Subcategory::find($id);
        $subcategory->delete();
        return response()->json(["subcategory"=>null,'message'=>"Data is deleted","status"=>200]);
    }
}
