<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Member;
use App\Models\User;

class LoginAdminController extends Controller
{

    /**
     * login form
     */
    public function login(){

        return view('backend.login');

    }

    /**
     * login validation
     */
    public function loginValidate(Request $request){

        $req = $request->all();

        $user = User::where('email', $req['email'])->first();

        if($user){

            if(Hash::check($req['password'], $user->password)){
                session()->put('admin_id', $user->id);
                return redirect('/backend');
            } else {
                return redirect('/backend/login')->with(['message' => '密碼輸入錯誤']);
            }

        } else {
            return redirect('/backend/login')->with(['message' => 'E-mail 或者密碼輸入錯誤']);
        }

    }

     /**
      * logout
      */
      public function logout(){

      }
}
