<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;

class PlayerControllerA extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $players = Players::all('name')->get();
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('player.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $player = new Players();
        $player->name = $request->name() ??  "";
        $player->age = $request->age() ?? "";
        $player->save();
        return redirect()->route('/')->with('info','Player Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Players $player)
    {
        return redirect()->route('player.edit', $player);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
