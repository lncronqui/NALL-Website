<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Models\MediaResource;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function index()
    {
        $mediaResources = MediaResource::with('subject', 'authors', 'resource_type')
            ->where([
                ['to_delete', false],
                ['approved_by', NULL]
            ])
            ->get();
        return view('admin.overall.approve.index', compact('mediaResources'));
    }

    public function accept(MediaResource $mediaResource)
    {
        return redirect()->back()->with('success', 'Accepted');
    }

    public function deny(MediaResource $mediaResource)
    {
        return redirect()->back()->with('success', 'Denied');
    }
}
