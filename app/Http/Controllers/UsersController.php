<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    //
    function index(){
        return view('welcome');
    }
    function login(){

        return view('users.login');
    }

    function register(){
        return view('users.register');
    }

    /**
     * @param Requests\CreateUsersRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    function registerUser(Requests\CreateUsersRequest $request){

     //   dd($request->all());
        //$user = Users::class;
//        $userName = $request->input('name');
//        $userEmail = $request->input('email');
//        $userPassword = $request->input('password');
//       // $userRePassword = $request->input('repassword');
//        $userArray['name'] = $userName;
//        $userArray['email'] = $userEmail;
//        $userArray['password'] =$userPassword;
//        $userArray['password_confirmation'] =$userPassword;
        $user = $request->all();
        Users\Users::create($user);
     //   return redirect()->route('homepage',['userName'=>$userName]);
       //dd($userArray);



    }
}
