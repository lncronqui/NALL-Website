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

    public function show($id)
    {
        $mediaResource = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
            ->find($id);
        return view('user.search.show', compact('mediaResource'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = MediaResource::query()->with('institution', 'subjects', 'access_type', 'resource_type', 'authors');

        if ((!$request->boolean('title') && !$request->boolean('author') && !$request->boolean('institution')) ||
            ($request->boolean('title') && $request->boolean('author') && $request->boolean('institution'))
        ) {

            $mediaResources = $query->get();
            return view('user.search.index', compact('mediaResources'));
        }

        $mediaResources = $query->get();
        return view('user.search.index', compact('mediaResources'));
    }
}
