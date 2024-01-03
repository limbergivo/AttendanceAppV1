<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;


use Illuminate\Validation\ValidationException;



class PlayerController extends Controller
{

    public function create(): \Illuminate\Contracts\View\View
    {
     return view('playerCreate');
    }

    public function store(Request $request): RedirectResponse
    {
        $validataPlayerData = $request->validate(
            [
                'name'=> 'required',
                'age' => 'required'
            ],
            [
             'name.required' => 'Name is required',
             'Age' => 'Age is required'
            ]);

        $player = Players::create($validataPlayerData);

        return back()->with('Succes', $player.'has been created'
        );
    }



}
