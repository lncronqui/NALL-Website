<?php

namespace App\Http\Controllers\Admin\Overall;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Overall\UpdateWebsiteInfoRequest;
use App\Models\ContactInfo;
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
        $websiteInfo = WebsiteInfo::find(1);
        $contactInfo = ContactInfo::find(1);
        return view('admin.overall.websiteInfo.edit', compact('websiteInfo', 'contactInfo'));
    }

    public function update_website(Request $request)
    {
        $validated = $request->validate([
            'history' => 'required|string',
            'mission' => 'required|string',
            'vision' => 'required|string',
            'about' => 'required|string',
            'objectives' => 'required|string',
        ]);

        $websiteInfo = WebsiteInfo::find(1);
        $websiteInfo->update([
            'history' => $validated['history'],
            'mission' => $validated['mission'],
            'vision' => $validated['vision'],
            'about' => $validated['about'],
            'objectives' => $validated['objectives']
        ]);
        return redirect()->back()->with('success', 'Updated About Us.');
    }

    public function update_contact(Request $request)
    {
        $validated = $request->validate([
            'address_1' => 'required|string',
            'address_2' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|string',
            'tel_no' => 'required|string',
            'email' => 'required|email'
        ]);

        $contactInfo = ContactInfo::find(1);
        $contactInfo->update([
            'address_1' => $validated['address_1'],
            'address_2' => $validated['address_2'],
            'city' => $validated['city'],
            'zip_code' => $validated['zip_code'],
            'tel_number' => $validated['tel_no'],
            'email' => $validated['email']
        ]);

        return redirect()->back()->with('success', 'Updated Contact Info.');
    }
}
