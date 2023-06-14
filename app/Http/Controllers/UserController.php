<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('user.create');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return to_route('principal');
        }
    }
    public function logout($id)
    {
        Auth::logout($id);
        return to_route('principal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        User::create([
            'is_admin' => 0,
            'name' => $request->nome,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return to_route('login')->with('msg', 'Seu usuário foi logado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
