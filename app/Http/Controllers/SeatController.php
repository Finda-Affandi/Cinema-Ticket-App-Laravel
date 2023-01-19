<?php

namespace App\Http\Controllers;

use App\Models\seat;
use App\Http\Requests\StoreseatRequest;
use App\Http\Requests\UpdateseatRequest;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreseatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreseatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function show($seat)
    {
        // $availSeat = seat::find($seat);
        // $availSeat = DB::table('seat')
        //             ->where('movName', '=', $seat)
        //             ->get();
        $movName = $seat;
        session_start();
        $_SESSION['movName'] = $seat;
        $availSeat = seat::select()->where('movName', $seat)->get();

        return view('purchase.index', compact('availSeat', 'movName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function edit(seat $seat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateseatRequest  $request
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateseatRequest $request, seat $seat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seat  $seat
     * @return \Illuminate\Http\Response
     */
    public function destroy(seat $seat)
    {
        //
    }
}
