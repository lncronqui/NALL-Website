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
    public function index(Request $request)
    {
        // $query->where([
        //     ['title', 'LIKE', '%' . $request->search . '%']
        // ])
        // ->orWhereHas('subjects', function ($q) use ($request){
        //     $q->where('name', 'LIKE', '%' . $request->search . '%');
        // });

        $search = $request->search;

        $title = $request->title;
        $author = $request->author;
        $institution = $request->institution;

        $printed = request('printed');
        $elec = request('elec');
        $video = request('video');
        $audio = request('audio');



        $beforeYear = $request->beforeYear;
        $afterYear = $request->afterYear;
        $query = MediaResource::query()->with('institution', 'access_type', 'resource_type', 'authors', 'subjects');

        if ($printed) {
            $query->where('resource_type_id', 1);
        }

        if ($elec) {
            $query->where('resource_type_id', 2);
        }

        if ($video) {
            $query->where('resource_type_id', 3);
        }

        if ($audio) {
            $query->where('resource_type_id', 4);
        }

        //all or none
        if (($search && $title && $author && $institution) ||
            ($search && !$title && !$author && !$institution)
        ) {
            $query->where([
                ['title', 'LIKE', '%' . $request->search . '%']
            ])
                ->orWhereHas('subjects', function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%' . $request->search . '%');
                })
                ->orWhereHas('authors', function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%' . $request->search . '%');
                })
                ->orWhereHas('institution', function ($q) use ($request) {
                    $q->where('name', 'LIKE', '%' . $request->search . '%');
                });
            $mediaResources = $query
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
            return view('user.search.index', compact('mediaResources', 'search', 'title', 'author', 'institution', 'printed', 'elec', 'video', 'audio'));
        }

        if ($title) {
            $query->orWhere([
                ['title', 'LIKE', '%' . $request->search . '%']
            ])->whereHas('subjects', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($author) {
            $query->whereHas('authors', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($institution) {
            $query->whereHas('institution', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        if ($beforeYear && $afterYear) {
            $query->whereBetween('date', [date($beforeYear . '-1-1'), date($afterYear . '-12-31')]);
        } else if ($beforeYear) {
            $query->whereYear('date', '>=', $beforeYear);
        } else if ($afterYear) {
            $query->whereYear('date', '<', $afterYear);
        }

        $mediaResources = $query
            ->orderBy('date', 'desc')
            ->get();
        return view('user.search.index', compact('mediaResources', 'search', 'title', 'author', 'institution', 'printed', 'elec', 'video', 'audio'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'media_resource_id' => 'exists:media_resources,id'
        ]);

        $user = User::with('requests')->find(Auth::id());
        $mediaResource = MediaResource::find($validated['media_resource_id']);

        if ($user->requests->contains($mediaResource)) {
            return redirect()->back()->withErrors('Media resources has already been requested.');
        }
        $user->requests()->attach($mediaResource);

        return redirect()->back()->with('success', 'Media resource requested.');
    }

    public function show($id)
    {
        $mediaResource = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
            ->find($id);
        return view('user.search.show', compact('mediaResource'));
    }

    public function bookmark(Request $request)
    {
        $user = User::with('bookmarks')->find(Auth::id());
        $mediaResource = MediaResource::find($request->bookmark);

        if ($user->bookmarks->contains($mediaResource)) {
            return redirect()->back()->withErrors('ERROR: Media resources is already in bookmarks.');
        }
        $user->bookmarks()->attach($mediaResource);

        return redirect()->back()->with('success', 'Media resource added to bookmarks.');
    }

    public function remove_bookmark(Request $request)
    {
        $user = User::with('bookmarks')->find(Auth::id());
        $mediaResource = MediaResource::find($request->bookmark);

        if (!$user->bookmarks->contains($mediaResource)) {
            return redirect()->back()->withErrors('ERROR: Resource not in bookmarks.');
        }
        $user->bookmarks()->detach($mediaResource);

        return redirect()->back()->with('success', 'Media resource removed from bookmarks.');
    }
}
