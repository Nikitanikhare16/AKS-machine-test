<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
{
    public function changePassword(Request $request )
    {
     $user=Auth::user();
     $userNew =User::find($user->id);
     $userNew->password=bcrypt($request->password);
     $userNew->save();
     return redirect()->route('login');
    }
}
