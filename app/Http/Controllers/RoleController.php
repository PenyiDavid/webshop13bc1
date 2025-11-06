<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function store(Request $request){
        $request->validate([
            'role_name' => 'required|string|max:255'
        ]);

        $role = Role::create([
            'role_name' => $request['role_name']
        ]);

        return redirect()->route('roles.index')->with('success', 'role created');
    }
}
