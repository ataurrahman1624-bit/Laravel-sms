<?php

namespace App\Http\Controllers;

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
    'phone'          => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|size:11', 
    'address'        => 'required|string|max:255',
    'payment_method' => 'required|in:cash,card,online,bkash',           
    'transaction_id' => 'required_if:payment_method,online,bkash|unique:student_admissions' // Changed to student_admissions
],
        [
            'name.required' => 'Student name is required.',
            'parent_name.required' => 'Parent name is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already registered.',
            'phone.regex' => 'Please enter a valid phone number.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'phone.max' => 'Phone number cannot exceed 20 digits.',
            'address.required' => 'Address is required.',
            'payment_method.required' => 'Please select a payment method.',
            'payment_method.in' => 'Invalid payment method selected.',
            'transaction_id.required_if' => 'Transaction ID is required for online payments.',
            'transaction_id.unique' => 'This transaction ID has already been used.'
        ]);
    }
}
