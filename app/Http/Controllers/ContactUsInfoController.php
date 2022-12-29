<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreContactUsInfoRequest;
use App\Mail\ContactUsMail;
use App\Models\ContactInfo;
use App\Models\ContactUsInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsInfoController extends Controller
{

    public function index()
    {
        return view('user.contact-us');
    }

    public function store(StoreContactUsInfoRequest $request)
    {
        $contactus = ContactUsInfo::create(
            $request->validated()
        );

        $contactInfo = ContactInfo::find(1);

        Mail::to($contactInfo->email)->send(new ContactUsMail($contactus));

        return redirect()->back()->with('success', 'Message sent successfully.');
    }
}
