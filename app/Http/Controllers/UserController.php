<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //jobsheet 3
        //coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        // tambah data user dengan Eloquent Model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 2
        // ];

        // UserModel::insert($data); // tambahkan data ke tabel m_user
        // //coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];

        // UserModel::where('username', 'customer-1')->update($data); // update data ke tabel m_user

        // //coba akses model UserModel
        // $user = UserModel::all(); // ambil semua data dari tabel m_user
        // return view('user', ['data' => $user]);

        //Jobsheet 4
        //PRAKTIKUM 1
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data); 

        // $user = UserModel::all(); 
        // return view('user', ['data' => $user]);

        // //PRAKTIKUM 2
        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);
    
        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(20, ['username', 'nama'],function() {
        // abort(404);
        // });
        
        // return view('user', ['data' => $user]);

        //Praktikum 2.2 – Not Found Exceptions 
        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();  
        // return view('user', ['data' => $user]);

        //Praktikum 2.3 – Retrieving Aggregates
        // $user = UserModel::where('level_id', 2 )->count();
        // dd($user);
        // return view('user', ['data' => $user]);

        //Praktikum 2.4 – Retrieving or Creating Models
        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager33',
        //         'nama' => 'Manager Tiga Tiga',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ],
        // );
        // $user->save();

        // return view('user', ['data' => $user]);

        //Practicum 2.5
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->isDirty(); //true
        $user->isDirty('username'); //true
        $user->isDirty('nama'); //false
        $user->isDirty(['nama', 'username']); //true

        $user->isClean(); //false
        $user->isClean('username'); //false
        $user->isClean('nama'); //true
        $user->isClean(['nama', 'username']); //false

        $user->save();
        
        // $user->isDirty(); //false
        // $user->isClean(); //true
        // dd($user->isDirty());

        $user->wasChanged(); //true
        $user->wasChanged('username');//true
        $user->wasChanged(['username', 'level_id']);//true
        $user->wasChanged('nama'); //false
        dd($user->wasChanged(['nama', 'username']));//true
    }
    }

