<?php

namespace App\Http\Controllers;

use App\Models\Bidangkod;
use Illuminate\Http\Request;

class BidangkodController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //return view('bidangkod.index');
    }

    public function store(Request $request)
    {
//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bidangkod  $bidangkod
     * @return \Illuminate\Http\Response
     */
    public function show(Bidangkod $bidangkod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bidangkod  $bidangkod
     * @return \Illuminate\Http\Response
     */
    public function edit(Bidangkod $bidangkod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bidangkod  $bidangkod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bidangkod $bidangkod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bidangkod  $bidangkod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bidangkod $bidangkod)
    {
        //
    }
}
