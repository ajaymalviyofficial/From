<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Mail\CandidateFormMail;
use Illuminate\Support\Facades\Mail;

class CandidateWebController extends Controller
{
    public function create()
    {
        return view('form.candidate_form'); // Load the HTML form view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'required|string',
            'full_address' => 'required|string',
            'district' => 'required|string',
            'state' => 'required|string',
            'age' => 'required|integer',
            'marital_status' => 'required|string',
            'qualification' => 'required|string',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'job_experience' => 'nullable|string',
        ]);

        Candidate::create($validated);

        try {
            Mail::to('ajaymalviy27@gmail.com')->send(new CandidateFormMail($validated));
            \Log::info('Mail sent successfully.');
        } catch (\Exception $e) {
            \Log::error('Mail error: ' . $e->getMessage());
        }

        return redirect('/submit-candidate')->with('success', 'Form submitted successfully.');
    }
}
