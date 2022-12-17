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
        $medias = MediaResource::with('institution', 'subject', 'access_type', 'resource_type')
            ->sortable(['date' => 'desc'])
            ->paginate();
        return view('user.auth-user-search', compact('medias'));
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
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function show(MediaResource $mediaResource)
    {
        //
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
