<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'name' => 'required | name',
        ]);

        return redirect()->back()
            ->with('sucess', 'Enviado com sucesso!');
    }
    public function secondPage()
    {
        return view('second');
    }
}
