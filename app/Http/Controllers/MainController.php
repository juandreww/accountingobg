<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;

class MainController extends Controller
{
    public function users(Request $request) {
        $users = User::get();
        return view('users', compact('users'));
    }
}
