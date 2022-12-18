<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $user = User::paginate(6);
  
        return Inertia::render('User', [
            'user' => $user
        ]);
    }
}
