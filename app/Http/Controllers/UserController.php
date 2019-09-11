<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.update', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        //thuc hien thao tac update
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->save();
        return redirect()->route('users.index');
    }
}
