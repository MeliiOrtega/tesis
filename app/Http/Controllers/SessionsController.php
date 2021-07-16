<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create(){
        return view('auth.login');
    }

   public function store(){
       if(auth()->attempt(request(['email', 'password'])) == false){
           return back()->withErrors(['message'=> 'Esto es un error']);
       }
       return redirect()->to('/');
   }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}

