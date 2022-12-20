<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediaResources = MediaResource::with('institution', 'access_type', 'resource_type', 'authors', 'subjects')
            ->sortable(['date' => 'desc'])
            ->get();
        return view('user.search.index', compact('mediaResources'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mediaResource = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
            ->find($id);
        return view('user.search.show', compact('mediaResource'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function edit(MediaResource $mediaResource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MediaResource $mediaResource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function destroy(MediaResource $mediaResource)
    {
        //
    }
}
