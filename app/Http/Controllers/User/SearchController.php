<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'media_resource_id' => 'exists:media_resources,id'
        ]);

        $user = User::find(Auth::id());
        $mediaResource = MediaResource::find($validated['media_resource_id']);

        $user->requests()->attach($mediaResource);

        return redirect()->back()->with('success', 'Media resource requested.');
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
