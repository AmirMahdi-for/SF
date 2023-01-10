<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        return view('shop.index');
    }


    public function create()
    {
        return view('shop.create');
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|unique:shops,title|between:3,100',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|string|size:11',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|unique:users,name',
            'address' => 'nullable',

        ]);
    }


    public function show(Shop $shop)
    {
        //
    }


    public function edit(Shop $shop)
    {
        //
    }


    public function update(Request $request, Shop $shop)
    {
        //
    }


    public function destroy(Shop $shop)
    {
        //
    }
}
