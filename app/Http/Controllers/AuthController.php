<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;

class AuthController extends Controller
{
    public function Login_view()
    {
        return view('Login');
    }
    public function Post_login(Request $request)
    {   
        $cred=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        
        $user=User::where(['email'=>$request->email,'password'=>$request->password])->first();
        // $user=DB::table('users')->where(['email'=>$request->email,'password'=>$request->password])->first();
        $email=$request->email;
        $password=$request->password;
        
        
        }
        
        
            
           
            // echo "success";
            // return redirect('dashboard');
        
    
        // $name=Auth::user();
        dd(Auth::user());
        // echo $name->name;
        
        
    }
}
