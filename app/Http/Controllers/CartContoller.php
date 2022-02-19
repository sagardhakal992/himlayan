<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CartContoller extends Controller
{
    public function index(){
        return Inertia::render('Checkout');
    }

    public function store(Request $request)
    {
        auth()->user()->products()->attach([$request->product]);
        return back();
    }
    public function delete(Request $request){
        auth()->user()->products()->detach([$request->id]);
       
        return back();
    }
}
