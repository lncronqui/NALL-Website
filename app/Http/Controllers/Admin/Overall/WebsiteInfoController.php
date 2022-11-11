<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Overall\UpdateWebsiteInfoRequest;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = WebsiteInfo::find(1);
        return view('admin.overall.website-info', compact('info'));
    }

    public function update(UpdateWebsiteInfoRequest $request, WebsiteInfo $websiteInfo)
    {
        $request->validated();

        $websiteInfo->history = $request->input('history');
        $websiteInfo->mission = $request->input('mission');
        $websiteInfo->vision = $request->input('vision');
        $websiteInfo->about = $request->input('about');
        $websiteInfo->objectives = $request->input('objectives');
        $websiteInfo->address_1 = $request->input('address_1');
        $websiteInfo->address_2 = $request->input('address_2');
        $websiteInfo->city = $request->input('city');
        $websiteInfo->zip_code = $request->input('zip_code');
        $websiteInfo->tel_number = $request->input('tel_number');
        $websiteInfo->email = $request->input('email');
        $websiteInfo->fb_page = $request->input('fb_page');
        $websiteInfo->website = $request->input('website');
        $websiteInfo->user_id = Auth::user()->id;
        $websiteInfo->save();

        return redirect()->route('admin.overall.website-info.index')->with('success', 'Updated Website Info successfully.');
    }
}
