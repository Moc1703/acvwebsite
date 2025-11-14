<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $query = Inquiry::latest();
        
        // Filter by status
        if ($request->has('status') && $request->status != 'all') {
            $query->where('status', $request->status);
        }
        
        // Filter by type
        if ($request->has('type') && $request->type != 'all') {
            $query->where('user_type', $request->type);
        }
        
        $inquiries = $query->get();
        $stats = [
            'total' => Inquiry::count(),
            'new' => Inquiry::where('status', 'new')->count(),
            'contacted' => Inquiry::where('status', 'contacted')->count(),
            'qualified' => Inquiry::where('status', 'qualified')->count(),
            'closed' => Inquiry::where('status', 'closed')->count(),
        ];
        
        return view('admin.inquiries', compact('inquiries', 'stats'));
    }

    public function show($id)
    {
        $inquiry = Inquiry::findOrFail($id);
        return view('admin.inquiry-detail', compact('inquiry'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:new,contacted,qualified,closed',
        ]);

        $inquiry = Inquiry::findOrFail($id);
        $inquiry->status = $request->status;
        $inquiry->save();

        return back()->with('success', 'Status updated successfully');
    }
}
