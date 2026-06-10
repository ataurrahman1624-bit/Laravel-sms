<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <header>
        <nav class="bg-white border-b border-gray-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between h-16 items-center">
      <!-- Left side: Logo -->
      <div class="flex-shrink-0 flex items-center">
        <a href="/" class="text-2xl font-bold text-gray-800">
          Student Management System
        </a>
      </div>
      <!-- Right side: Admission Link -->
      <div class="flex items-center space-x-4">
        <a href="{{ url('/') }}" class="text-gray-7xl hover:text-blue-600 font-medium transition-colors">
          Admission
        </a>
      </div>
    </div>
  </div>
</nav>
    </header>
    <main>
<div class="max-w-3xl mx-auto my-10 p-8 bg-white border border-gray-200 rounded-xl shadow-sm">
  <h2 class="text-2xl font-bold text-gray-900 mb-6 pb-2 border-b border-gray-100">Admission Form</h2>
  
  <form action="{{ url('/student-info') }}" method="POST" class="space-y-6">
    @csrf
    <!-- Section: Personal Information -->
    <div>
      <h3 class="text-lg font-medium text-gray-700 mb-4">Personal Information</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
          <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="parent_name" class="block text-sm font-medium text-gray-700 mb-1">Parent's Name</label>
          <input type="text" id="parent_name" name="parent_name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
          @error('parent_name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
          @error('phone')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>
      </div>
    </div>

    <!-- Section: Address -->
    <div class="pt-4 border-t border-gray-100">
      <h3 class="text-lg font-medium text-gray-700 mb-4">Address Details</h3>
      <div>
        <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Street Address</label>
        <textarea id="address" name="address" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm"></textarea>
        @error('address')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <!-- Section: Payment Info -->
    <div class="pt-4 border-t border-gray-100">
      <h3 class="text-lg font-medium text-gray-700 mb-2">Payment Method</h3>
      <p class="text-xs text-gray-500 mb-4">Select your preferred option below.</p>
      
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
        <!-- Cash Option -->
        <label class="flex flex-col items-center justify-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 focus-within:ring-2 focus-within:ring-blue-500 transition-all text-center">
          <input type="radio" name="payment_method" value="cash" class="sr-only peer">
          <span class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center mb-2 peer-checked:border-blue-600 peer-checked:bg-blue-600">
            <span class="w-1.5 h-1.5 rounded-full bg-white hidden peer-checked:block"></span>
          </span>
          <span class="text-sm font-semibold text-gray-800">Cash</span>
          <span class="text-[10px] text-gray-400 mt-0.5">Pay at Desk</span>
        </label>

        <!-- Card Option -->
        <label class="flex flex-col items-center justify-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-gray-50 focus-within:ring-2 focus-within:ring-blue-500 transition-all text-center">
          <input type="radio" name="payment_method" value="card" class="sr-only peer">
          <span class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center mb-2 peer-checked:border-blue-600 peer-checked:bg-blue-600">
            <span class="w-1.5 h-1.5 rounded-full bg-white hidden peer-checked:block"></span>
          </span>
          <span class="text-sm font-semibold text-gray-800">Card</span>
          <span class="text-[10px] text-gray-400 mt-0.5">Visa/Master</span>
        </label>

        <!-- bKash Option -->
        <label class="flex flex-col items-center justify-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-pink-50 focus-within:ring-2 focus-within:ring-pink-500 transition-all text-center">
          <input type="radio" name="payment_method" value="bkash" class="sr-only peer">
          <span class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center mb-2 peer-checked:border-pink-600 peer-checked:bg-pink-600">
            <span class="w-1.5 h-1.5 rounded-full bg-white hidden peer-checked:block"></span>
          </span>
          <span class="text-sm font-semibold text-gray-800">bKash</span>
          <span class="text-[10px] text-pink-600 font-medium mt-0.5">MFS</span>
        </label>

        <!-- Nagad Option -->
        <label class="flex flex-col items-center justify-center p-3 border border-gray-200 rounded-xl cursor-pointer hover:bg-orange-50 focus-within:ring-2 focus-within:ring-orange-500 transition-all text-center">
          <input type="radio" name="payment_method" value="nagad" class="sr-only peer">
          <span class="w-4 h-4 rounded-full border border-gray-300 flex items-center justify-center mb-2 peer-checked:border-orange-600 peer-checked:bg-orange-600">
            <span class="w-1.5 h-1.5 rounded-full bg-white hidden peer-checked:block"></span>
          </span>
          <span class="text-sm font-semibold text-gray-800">Nagad</span>
          <span class="text-[10px] text-orange-600 font-medium mt-0.5">MFS</span>
        </label>
        @error('payment_method')
          <p class="text-red-500 text-xs mt-1 col-span-full">{{ $message }}</p>
        @enderror
      </div>

      <!-- Conditional Input fields for Transaction details -->
      <div class="mt-4">
        <label for="transaction_id" class="block text-sm font-medium text-gray-700 mb-1">Transaction ID / Reference (If applicable)</label>
        <input type="text" id="transaction_id" name="transaction_id" placeholder="e.g. TRID123456" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
        @error('transaction_id')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <!-- Submit Button -->
    <div class="pt-4">
      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2.5 px-4 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 text-sm">
        Submit Admission Application
      </button>
    </div>
  </form>
</div>


    </main>
</body>
</html>