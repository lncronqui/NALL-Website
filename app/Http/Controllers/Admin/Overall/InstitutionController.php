<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::all();
        return view('admin.overall.institution.index', compact('institutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.overall.institution.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:institutions,name'
        ]);

        Institution::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('admin.overall.institutions.index')->with('success', 'Added Institution data successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function edit(Institution $institution)
    {
        return view('admin.overall.institution.edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Institution $institution)
    {
        $request->validate([
            'name' => 'required|unique:institutions,name'
        ]);

        $institution->name = $request->input('name');
        $institution->save();

        return redirect()->route('admin.overall.institutions.index')->with('success', 'Updated Institution data successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institution  $institution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institution $institution)
    {
        $institution->delete();

    }
}
