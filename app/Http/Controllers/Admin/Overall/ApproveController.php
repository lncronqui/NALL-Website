<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index()
    {
        $mediaResources = MediaResource::with('subjects', 'authors', 'resource_type')
            ->where([
                ['approved_by', NULL]
            ])
            ->orderBy('date', 'desc')
            ->get();
        return view('admin.overall.approve.index', compact('mediaResources'));
    }

    public function update($id)
    {
        $mediaResource = MediaResource::find($id);
        $mediaResource->update([
            'approved_by' => auth()->user()->name
        ]);
        return redirect()->back()->with('success', 'Accepted');
    }

    public function destroy($id)
    {
        MediaResource::where('id', $id)->firstOrFail()->delete();
        return redirect()->back()->with('success', 'Denied');
    }
}
