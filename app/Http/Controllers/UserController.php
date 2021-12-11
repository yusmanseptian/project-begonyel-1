<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    // show add form
    public function create() {

        return view('backend.user.add');
    }

    // insert data to table
    public function store(Request $request) {
        // data yg akan diterima function store
        $name = $request->name;
        $email = $request->email;
        $jk = $request->jk;
        $level = $request->level;
        $no_telp = $request->no_telp;
        $password = Hash::make($request->password);

        // buat object untuk simpan data ke table
        $user = new User;

        //kirim nilai2 yg didapat dari form ke table
        $user->name = $name;
        $user->email = $email;
        $user->jk = $jk;
        $user->level = $level;
        $user->no_telp = $no_telp;
        $user->password = $password;

        // simpan data yg telah diterima ke dalam table
        $user->save();

        // redirect ke halaman users
        return redirect('users');
    }

}
