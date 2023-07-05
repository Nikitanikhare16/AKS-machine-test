<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class UserController extends Controller
{
    public function login(Request $request)
{
    // $validator = Validator::make($request->all(), [
    //     'email'=>'required|unique:users',
    //     'password' => 'required|min:6'

    // ]);
    // if($validator->fails()){
    //     return response()->json(["error"=>$validator->errors()->messages(),"status"=>400]);
    // }

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        $user = Auth::User();
        $token = $user->createToken('authToken')->plainTextToken;
        $success = array('token'=>$token,'name'=>$user->name,'email'=>$user->email);
        return $success;
        }
        else{
            return response()->json(["message"=>"Invalid data","status"=>401]);
        }
}
public function logout(Request $request)
{
    $user=Auth::user();
    if($user){
        $user->tokens()->delete();
    }
    return response()->json(['message'=>'Logged out Successfully...']);

}
}
