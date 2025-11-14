<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
            'user_type' => 'required|in:brand,kol',
        ];

        // Different validation rules based on user type
        if ($request->user_type == 'brand') {
            $rules['company'] = 'required|string|max:255';
            $rules['phone'] = 'nullable|string|max:20';
        } else {
            $rules['phone'] = 'required|string|max:20';
            $rules['company'] = 'nullable|string|max:255'; // Instagram handle for KOL
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please correct the errors below.')
                ->with('active_tab', $request->user_type);
        }

        // Sanitize input
        $data = [
            'name' => strip_tags(trim($request->name)),
            'email' => filter_var(trim($request->email), FILTER_SANITIZE_EMAIL),
            'phone' => $request->phone ? preg_replace('/[^0-9+\-\s]/', '', trim($request->phone)) : null,
            'company' => $request->company ? strip_tags(trim($request->company)) : null,
            'message' => strip_tags(trim($request->message)),
            'service_interest' => $request->service_interest ? strip_tags($request->service_interest) : null,
            'user_type' => $request->user_type,
            'status' => 'new',
        ];

        $inquiry = Inquiry::create($data);

        // TODO: Send email notification
        // Mail::to('your-email@example.com')->send(new NewInquiryNotification($inquiry));

        return redirect()->route('thank.you')
            ->with('success', 'Thank you for your inquiry! We will contact you soon.');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
