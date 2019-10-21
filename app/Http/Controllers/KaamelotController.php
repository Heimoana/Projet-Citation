<?php

namespace App\Http\Controllers;

use App\Kaamelot;
use Illuminate\Http\Request;

class KaamelotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kaamelot_c = Citation::all();

        return view('welcome',compact('kaamelot_c'));
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
     * @param  \App\Kaamelot  $kaamelot
     * @return \Illuminate\Http\Response
     */
    public function show(Kaamelot $kaamelot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kaamelot  $kaamelot
     * @return \Illuminate\Http\Response
     */
    public function edit(Kaamelot $kaamelot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kaamelot  $kaamelot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kaamelot $kaamelot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kaamelot  $kaamelot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kaamelot $kaamelot)
    {
        //
    }
}
