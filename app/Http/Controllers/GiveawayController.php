<?php

namespace Elbow\Http\Controllers;

use Carbon\Carbon;
use Elbow\Giveaway;
use Illuminate\Http\Request;
class GiveawayController extends Controller
{
    /**
     * @return $this
     */
    public function index()
    {
        $giveaway = Giveaway::oldest()->get();
        $giveaway->map(function ($giveaway) {
            $thing = new Carbon($giveaway->ends_at);
            $giveaway->expires = $thing->timezone('America/Denver')->timestamp;
            return $giveaway;
        });
        return view('giveaways')->with('giveaway', $giveaway);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Elbow\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function show(Giveaway $giveaway)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Elbow\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function edit(Giveaway $giveaway)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Elbow\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Giveaway $giveaway)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Elbow\Giveaway  $giveaway
     * @return \Illuminate\Http\Response
     */
    public function destroy(Giveaway $giveaway)
    {
        //
    }
}
