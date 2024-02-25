<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function users(Request $request){
        if($request->has('active')){
            //si la request tiene un parametro active con valor 1
            return User::where('active',true)->get();
        }else{
            //Si la ruta no tiene el parametro active
            $users =User::all();
        }

        return response()->json($users);
    }

    public function login(Request $request){

    }
}
