<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessType;
use App\Models\Author;
use App\Models\Institution;
use App\Models\MediaResource;
use App\Models\ResourceType;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MediaResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.repository.index');
    }

    public function view_printed(Request $request)
    {
        if (auth()->user()->role_id == 2) {
            $query = MediaResource::query()
                ->where('institution_id', auth()->user()->institution_id)
                ->where('resource_type_id', 1)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        } elseif (auth()->user()->role_id == 3) {
            $query = MediaResource::query()
                ->where('resource_type_id', 1)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        }

        return view('admin.repository.view-printed', compact('mediaResources'));
    }

    public function view_elec(Request $request)
    {
        if (auth()->user()->role_id == 2) {
            $query = MediaResource::query()
                ->where('institution_id', auth()->user()->institution_id)
                ->where('resource_type_id', 2)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        } elseif (auth()->user()->role_id == 3) {
            $query = MediaResource::query()
                ->where('resource_type_id', 2)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        }

        return view('admin.repository.view-electronic', compact('mediaResources'));
    }

    public function view_video(Request $request)
    {
        if (auth()->user()->role_id == 2) {
            $query = MediaResource::query()
                ->where('institution_id', auth()->user()->institution_id)
                ->where('resource_type_id', 3)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        } elseif (auth()->user()->role_id == 3) {
            $query = MediaResource::query()
                ->where('resource_type_id', 3)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        }

        return view('admin.repository.view-video', compact('mediaResources'));
    }

    public function view_audio(Request $request)
    {
        if (auth()->user()->role_id == 2) {
            $query = MediaResource::query()
                ->where('institution_id', auth()->user()->institution_id)
                ->where('resource_type_id', 4)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        } elseif (auth()->user()->role_id == 3) {
            $query = MediaResource::query()
                ->where('resource_type_id', 4)
                ->orderBy('date', 'desc');
            if (request('search')) {
                $query->where([['title', 'LIKE', '%' . $request->search . '%']]);
            }
            $mediaResources = $query->with('institution', 'subjects', 'access_type', 'authors')
                ->orderBy('date', 'desc')
                ->sortable()
                ->get();
        }

        return view('admin.repository.view-audio', compact('mediaResources'));
    }

    public function create()
    {
        return view('admin.repository.create');
    }
    public function create_printed(Request $request)
    {
        $institutions = Institution::all();
        $accessTypes = AccessType::all();
        return view('admin.repository.add-printed', compact('institutions', 'accessTypes'));
    }

    public function create_elec(Request $request)
    {
        $institutions = Institution::all();
        $accessTypes = AccessType::all();
        return view('admin.repository.add-elec', compact('institutions', 'accessTypes'));
    }

    public function create_video(Request $request)
    {
        $institutions = Institution::all();
        $accessTypes = AccessType::all();
        return view('admin.repository.add-video', compact('institutions', 'accessTypes'));
    }

    public function create_audio(Request $request)
    {
        $institutions = Institution::all();
        $accessTypes = AccessType::all();
        return view('admin.repository.add-audio', compact('institutions', 'accessTypes'));
    }

    public function store_printed(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:media_resources,title',
            'access_type_id' => 'required|exists:access_types,id',
            'authorNames.*' => 'string|nullable|distinct',
            'authorNames.0' => 'required|string',
            'abstract' => 'required|string',
            'subjects.*' => 'required|string|distinct',
            'subjects.0' => 'nullable|string',
            'institution_id' => 'required|exists:institutions,id',
            'page' => 'required|numeric',
            'date' => 'required|date'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $mediaResource = MediaResource::firstOrCreate([
            'title' => $validated['title'],
            'access_type_id' => 1,
            'abstract' => $validated['abstract'],
            'institution_id' => $validated['institution_id'],
            'page' => $validated['page'],
            'date' => $validated['date'],
            'resource_type_id' => 1,
            'encoded_by' => auth()->user()->name
        ]);

        foreach ($request->subjects as $i => $subject) {
            $subject = Subject::firstOrCreate([
                'name' => $request->subjects[$i]
            ]);
            $mediaResource->subjects()->sync($subject);
        }

        foreach ($request->authorNames as $i => $author) {
            $author = Author::firstOrCreate([
                'name' => $request->authorNames[$i]
            ]);
            $mediaResource->authors()->sync($author);
        }

        return redirect(route('admin.repository.index'))->with('success', 'Added printed resource successfully.');
    }

    public function store_elec(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:media_resources,title',
            'access_type_id' => 'required|exists:access_types,id',
            'authorNames.*' => 'string|nullable|distinct',
            'authorNames.0' => 'required|string',
            'abstract' => 'required|string',
            'subjects.*' => 'required|string|distinct',
            'subjects.0' => 'nullable|string',
            'institution_id' => 'required|exists:institutions,id',
            'page' => 'required|numeric',
            'date' => 'required|date',
            'doi' => 'required',
            'url' => 'required|url|unique:media_resources,url'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $mediaResource = MediaResource::firstOrCreate([
            'title' => $validated['title'],
            'access_type_id' => $validated['access_type_id'],
            'abstract' => $validated['abstract'],
            'institution_id' => $validated['institution_id'],
            'page' => $validated['page'],
            'date' => $validated['date'],
            'url' => $validated['url'],
            'doi' => $validated['doi'],
            'resource_type_id' => 2,
            'encoded_by' => auth()->user()->name
        ]);

        foreach ($request->subjects as $i => $subject) {
            $subject = Subject::firstOrCreate([
                'name' => $request->subjects[$i]
            ]);
            $mediaResource->subjects()->sync($subject);
        }

        foreach ($request->authorNames as $i => $author) {
            $author = Author::firstOrCreate([
                'name' => $request->authorNames[$i]
            ]);
            $mediaResource->authors()->sync($author);
        }

        return redirect(route('admin.repository.index'))->with('success', 'Added electronic resource.');
    }

    public function store_video(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:media_resources,title',
            'access_type_id' => 'required|exists:access_types,id',
            'authorNames.*' => 'string|nullable|distinct',
            'authorNames.0' => 'required|string',
            'abstract' => 'required|string',
            'subjects.*' => 'required|string|distinct',
            'subjects.0' => 'nullable|string',
            'institution_id' => 'required|exists:institutions,id',
            'date' => 'required|date',
            'url' => 'required|url|unique:media_resources,url'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $mediaResource = MediaResource::firstOrCreate([
            'title' => $validated['title'],
            'access_type_id' => $validated['access_type_id'],
            'abstract' => $validated['abstract'],
            'institution_id' => $validated['institution_id'],
            'date' => $validated['date'],
            'url' => $validated['url'],
            'resource_type_id' => 3,
            'encoded_by' => auth()->user()->name
        ]);

        foreach ($request->subjects as $i => $subject) {
            $subject = Subject::firstOrCreate([
                'name' => $request->subjects[$i]
            ]);
            $mediaResource->subjects()->sync($subject);
        }

        foreach ($request->authorNames as $i => $author) {
            $author = Author::firstOrCreate([
                'name' => $request->authorNames[$i]
            ]);
            $mediaResource->authors()->sync($author);
        }

        return redirect(route('admin.repository.index'))->with('success', 'Added video resource.');
    }

    public function store_audio(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:media_resources,title',
            'access_type_id' => 'required|exists:access_types,id',
            'authorNames.*' => 'string|nullable|distinct',
            'authorNames.0' => 'required|string',
            'abstract' => 'required|string',
            'subjects.*' => 'required|string|distinct',
            'subjects.0' => 'nullable|string',
            'institution_id' => 'required|exists:institutions,id',
            'date' => 'required|date',
            'url' => 'required|url|unique:media_resources,url'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();

        $mediaResource = MediaResource::firstOrCreate([
            'title' => $validated['title'],
            'access_type_id' => $validated['access_type_id'],
            'abstract' => $validated['abstract'],
            'institution_id' => $validated['institution_id'],
            'date' => $validated['date'],
            'url' => $validated['url'],
            'resource_type_id' => 3,
            'encoded_by' => auth()->user()->name
        ]);

        foreach ($request->subjects as $i => $subject) {
            $subject = Subject::firstOrCreate([
                'name' => $request->subjects[$i]
            ]);
            $mediaResource->subjects()->sync($subject);
        }

        foreach ($request->authorNames as $i => $author) {
            $author = Author::firstOrCreate([
                'name' => $request->authorNames[$i]
            ]);
            $mediaResource->authors()->sync($author);
        }

        return redirect(route('admin.repository.index'))->with('success', 'Added video resource.');
    }


    public function edit($id)
    {
        $mediaResource = MediaResource::find($id);
        $resourceTypes = ResourceType::all();
        return view('admin.media.edit', [
            'mediaResource' => $mediaResource,
            'resourceTypes' => $resourceTypes
        ]);
    }

    public function destroy($id)
    {
        $mediaResource = MediaResource::find($id);
        $mediaResource->delete();
        return redirect()->back()->with('success', 'Deleted media resource successfully.');
    }
}
