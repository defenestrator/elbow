<?php

namespace Elbow\Http\Controllers;

use Elbow\Game as PotLuck;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PotLuckGameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Inertia::render('potluck/Potluck', []);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PotLuck $potLuck)
    {
        dd($request->users);
        $this->potLuck->create([
            'game_title' => 'potluck',
        ])->sync($request->users);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Elbow\PotLuck  $potLuck
     * @return \Illuminate\Http\Response
     */
    public function show(PotLuck $potLuck)
    {
        return view('potluck.show', compact($potLuck));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Elbow\PotLuck  $potLuck
     * @return \Illuminate\Http\Response
     */
    public function edit(PotLuck $potLuck)
    {
        //exit
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Elbow\PotLuck  $potLuck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PotLuck $potLuck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Elbow\PotLuck  $potLuck
     * @return \Illuminate\Http\Response
     */
    public function destroy(PotLuck $potLuck)
    {
        //
    }
}
