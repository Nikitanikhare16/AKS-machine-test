<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
class CategoryController extends Controller
{
    public function store(Request $request){
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'active'=>'required',
    ]);
    if($validator->fails()){
        return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
    }
    if(!($request->name) && !($request->active)){
        return response()->json(["data"=>null,'message'=>"Invalid data","status"=>400]);

    }

    $data=new Category();
    $data->name=$request->name;
    $data->active=$request->active;
    $data->save();
    return response()->json(["data"=>$data,'message'=>"Data is created !","status"=>201]);
    }
    public function update(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'active'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
        }
        $data=Category::find($id);
        $data->name=$request->name;
        $data->active=$request->active;
    $data->save();
    return response()->json(["data"=>$data,'message'=>"Data is updated","status"=>202]);
    }
    public function delete($id)
{
    $data=Category::find($id);
    $data->delete();
    return response()->json(["data"=>null,'message'=>"Data is deleted","status"=>200]);
}
}
