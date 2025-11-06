<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(){
        $addresses = Address::all();
        return view('addresses.index', compact('addresses'));
    }

    public function store(Request $request){
        $request->validate([
            'address' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        $address = Address::create([
            'address' => $request['address'],
            'user_id' => $request['user_id']
        ]);

        return redirect()->route('addresses.index')->with('success', 'address created');
    }
}
