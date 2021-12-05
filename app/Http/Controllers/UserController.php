<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        //ambil data dari tabel users

        // Eloquent (menggunakan model)
        $users = User::all();
        // dd($users);

        // Query builder
        // SELECT * FROM USER
        // $users = DB::table('users')->get();

        return view('backend.user.index',[
            'users' => $users,
        ]);
    }
}
