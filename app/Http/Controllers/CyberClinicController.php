<?php

namespace App\Http\Controllers;

use App\Mail\ClinicInquiryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CyberClinicController extends Controller
{
    public function index()
    {
        return view('cyber-clinic');
    }

    public function submitInquiry(Request $request)
    {
        $data = $request->validate([
            'organization_name' => 'required|string|max:255',
            'name'              => 'required|string|max:255',
            'role'              => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'nullable|string|max:50',
            'organization_type' => 'required|string|max:100',
            'organization_size' => 'required|string|max:100',
            'industry'          => 'nullable|string|max:255',
            'location'          => 'required|string|max:255',
            'needs'             => 'required|string|max:3000',
            'contact_method'    => 'required|in:Email,Phone,Either',
            'timeline'          => 'required|string|max:100',
            'referral'          => 'nullable|string|max:255',
        ]);

        Mail::to('cybersecurityclinic@oit.edu')
            ->send(new ClinicInquiryMail($data));

        return back()->with(
            'success',
            'Thank you. Your inquiry has been sent to the Oregon Tech Cybersecurity Community Clinic.'
        );
    }
}
