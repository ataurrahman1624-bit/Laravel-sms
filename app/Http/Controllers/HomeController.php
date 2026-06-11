<?php

namespace App\Http\Controllers;
use App\Models\StudentAdmission;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Ensure this method exists and is public
    public function index()
    {
        return view('homepage'); // or whatever view/data you want to return
    }
    public function StudentInfo (Request $request){
$request->validate([
    'name'           => 'required|max:50',
    'parent_name'    => 'required|max:50',
    'email'          => 'nullable|email|unique:student_admissions', // Changed to student_admissions
    'phone'          => 'nullable', 
    'address'        => 'required|string|max:255',
    'payment_method' => 'required|in:cash,card,online,bkash',           
    'transaction_id' => 'required_if:payment_method,online,bkash|unique:student_admissions' // Changed to student_admissions
],
        [
            'name.required' => 'Student name is required.',
            'parent_name.required' => 'Parent name is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',
            'phone.size' => 'Phone number must be exactly 11 digits.',
            'address.required' => 'Address is required.',
            'payment_method.required' => 'Please select a payment method.',
            'payment_method.in' => 'Invalid payment method selected.',
            'transaction_id.required_if' => 'Transaction ID is required for online payments.',
            'transaction_id.unique' => 'This transaction ID has already been used.'
        ]);
        StudentAdmission::create($request->all());
        return back()->with('alert', [
            'type' => 'success',
            'message' => 'Student information submitted successfully!'
        ]);
    }
}
