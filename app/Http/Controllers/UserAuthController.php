<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
       return view('auth.login');
    }
    function register(){
        return view('auth.register');
     }

     function create(Request $request)
     {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|max:8'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $query = $user->save();

        if($query){
            return back()->with('success','You have been successfully registered');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        }
     }

     function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|max:8'
        ]);

        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){

                $request->session()->put('LoggedUser', $user->id);
                return redirect('profile');

            }
            else{
                return back()->with('fail', 'Ivalid password');
            }
        }
        else{
            return back()->with('fail', 'Account not found!');
        }

     }
     function profile(){

        if(session()->has('LoggedUser')){
            $user = User::where('id','=',session('LoggedUser'))->first();
            $data= [
                'LoggedUserInfo'=>$user
            ];
        }
        return view('admin.profile',$data);
    }
}
