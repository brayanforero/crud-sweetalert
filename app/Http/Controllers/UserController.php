<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users =  User::all();
        return view('index', compact('users'));
    }


    public function destroy(User $user)
    {

        User::destroy($user->id);
        return back();
    }
}
