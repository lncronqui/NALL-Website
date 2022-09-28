<?php

namespace App\Http\Controllers;

use App\Models\PubType;
use App\Http\Requests\StorePubTypeRequest;
use App\Http\Requests\UpdatePubTypeRequest;

class PubTypeController extends Controller
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
     * @param  \App\Http\Requests\StorePubTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePubTypeRequest $request)
    {
        PubType::create([
            'type' => $request->input('type')
        ]);

        return redirect()->route('pubTypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PubType  $pubType
     * @return \Illuminate\Http\Response
     */
    public function show(PubType $pubType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PubType  $pubType
     * @return \Illuminate\Http\Response
     */
    public function edit(PubType $pubType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePubTypeRequest  $request
     * @param  \App\Models\PubType  $pubType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePubTypeRequest $request, PubType $pubType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PubType  $pubType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PubType $pubType)
    {
        //
    }
}
