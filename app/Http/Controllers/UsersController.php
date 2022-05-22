<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function show()
    {
        return view('users.show');
    }

    public function store(Request $request)
    {
        $user = User::create([
            "nombre" => $request->nombre,
            "apellido" => $request->apellido,
            "correo" => $request->correo,
            "edad" => $request->edad,
        ]);
        return redirect()->route('users.index');
    }
}
