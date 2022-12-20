<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccessType;
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
        $mediaResources = MediaResource::with('institution', 'subjects', 'access_type', 'resource_type', 'authors')
            ->orderBy('date', 'desc')
            ->get();
        return view('admin.repository.index', compact('mediaResources'));
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
        $validated = $request->validate([
            'title' => 'required|string',
            'access_type_id' => 'required|exists:access_types,id',
            'authorName' => 'required|string',
            'authorEmail' => 'required|email',
            'abstract' => 'required|string',
            'subjects' => 'required|string',
            'institution_id' => 'required|exists:institutions,id',
            'page' => 'required|numeric',
            'date' => 'required|date'
        ]);

        return redirect(route('admin.repository.index'))->with('success', 'Added printed resource.');
    }

    public function store_electronic(Request $request)
    {
    }

    public function store_video(Request $request)
    {
    }

    public function store_audio(Request $request)
    {
    }


    public function show(MediaResource $mediaResource)
    {
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MediaResource  $mediaResource
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mediaResource = MediaResource::find($id);
        $validator = Validator::make($request->all(), [
            'resource_type_id' => 'required|exists:resource_types,id',
            'title' => [
                'required',
                'unique:media_resources,title,' . $id
            ],
            'abstract' => 'required',
            'subject_id' => 'required_if:resource_type_id,1,2',
            'url' => 'required_unless:resource_type_id,1',
            'doi' => 'required_if:resource_type_id,2',
            'page' => 'required_if:resource_type_id,1,2',
            'date' => 'required|date|max:now',
            'access_type_id' => 'required|exists:access_types,id',
        ]);
        $validated = $validator->validated();

        $input = [
            'resource_type_id' => $validated['resource_type_id'],
            'title' => $validated['title'],
            'abstract' => $validated['abstract'],
            'date' => $validated['date'],
            'approved_by' => null
        ];

        if ($validated['resource_type_id'] == 1 || $validated['resource_type_id'] == 2) {
            $subject_id = Subject::firstOrCreate([
                'name' => $validated['subject_id']
            ]);
            $input['journal_title_id'] = $subject_id->id;
            $input['page'] = $validated['page'];
        }

        if ($validated['resource_type_id'] == 1) {
            $input['access_type_id'] = 1;
        } else {
            $input['url'] = $validated['url'];
            $input['access_type_id'] = $validated['access_type_id'];
        }

        if ($validated['resource_type_id'] == 2) {
            $input['doi'] = $validated['doi'];
        }

        $mediaResource->update($input);
        return redirect()->route('admin.media.index')->with('success', $mediaResource);
    }

    public function approve(MediaResource $mediaResource)
    {
        if ($mediaResource->approved_by != null) {
            return redirect()->back()->withErrors('Media resource has already been approved.');
        }

        $mediaResource->update([
            'approved_by' => auth()->user()->name
        ]);
        return redirect()->back()->with('success', 'Media resource approved.');
    }

    public function to_delete(MediaResource $mediaResource)
    {
        if ($mediaResource->to_delete == true) {
            return redirect()->back()->withErrors('Data has already been deleted.');
        }
        $mediaResource->update([
            'to_delete' => true,
        ]);

        return redirect()->route('admin.media.index')->with('success', 'Media resource deletion for approval.');
    }

    public function destroy(MediaResource $mediaResource)
    {
        if ($mediaResource->to_delete == false) {
            return redirect()->back()->withErrors('Data can not be deleted yet.');
        }

        $mediaResource->delete();
    }

    public function restore(MediaResource $mediaResource)
    {
        if ($mediaResource->deleted_at == null) {
            return redirect()->back()->withErrors('Data is not deleted.');
        }

        $mediaResource->restore();
        return redirect()->back()->with('success', 'Data has been restored.');
    }

    public function force_delete(MediaResource $mediaResource)
    {
        if ($mediaResource->deleted_at == null) {
            return redirect()->back()->withErrors('Data is not deleted.');
        }

        $mediaResource->forceDelete();
        return redirect()->back()->with('success', 'Data has been deleted from database.');
    }
}
