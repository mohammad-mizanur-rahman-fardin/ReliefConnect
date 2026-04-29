<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Request Emergency Help</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    input, select, textarea {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 7px;
      padding: 10px 13px;
      font-size: 14px;
      color: #374151;
      outline: none;
      background: #fff;
      transition: border-color 0.15s;
    }
    input::placeholder, textarea::placeholder { color: #9ca3af; }
    input:focus, select:focus, textarea:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 2px rgba(0,191,255,0.15);
    }

    .help-type-card {
      display: flex;
      align-items: center;
      gap: 10px;
      border: 1.5px solid #d1d5db;
      border-radius: 8px;
      padding: 14px 16px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 500;
      color: #1f2937;
      background: #fff;
      transition: border-color 0.15s, background 0.15s;
      user-select: none;
    }
    .help-type-card:hover { border-color: #00BFFF; }
    .help-type-card.selected { border-color: #00BFFF; background: #f0fbff; }
    .help-type-card input[type="checkbox"] { display: none; }
  </style>
</head>
<body class="bg-white text-gray-800 flex flex-col min-h-screen">

<!-- ── NAV ── -->
<?php include 'navbar.php'; ?>

<!-- ── HERO ── -->
<section style="background: linear-gradient(135deg, #ef4444 0%, #f97316 100%);" class="text-white text-center py-14 px-4">
  <div class="flex justify-center mb-4">
    <div class="w-12 h-12 rounded-full border-2 border-white flex items-center justify-center">
      <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10"/>
        <line x1="12" y1="8" x2="12" y2="12"/>
        <line x1="12" y1="16" x2="12.01" y2="16"/>
      </svg>
    </div>
  </div>
  <h1 class="text-3xl font-bold mb-3">Request Emergency Help</h1>
  <p class="text-sm opacity-90 max-w-sm mx-auto leading-relaxed">
    We're here to help. Submit your request and our team will coordinate immediate assistance.
  </p>
</section>

<!-- ── MAIN CONTENT ── -->
<main class="flex-1 py-10 px-4">
  <div class="max-w-2xl mx-auto">

    <!-- Warning Banner -->
    <div class="border border-yellow-400 rounded-xl p-5 mb-8 bg-yellow-50">
      <div class="flex items-center gap-2 mb-2">
        <svg class="w-5 h-5 text-yellow-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"/>
          <line x1="12" y1="8" x2="12" y2="12"/>
          <line x1="12" y1="16" x2="12.01" y2="16"/>
        </svg>
        <p class="font-bold text-yellow-700 text-sm">Life-Threatening Emergency?</p>
      </div>
      <p class="text-sm text-yellow-700 mb-4 leading-relaxed">
        If you are in immediate danger or experiencing a life-threatening emergency, please call our 24/7 emergency hotline directly:
      </p>
      <button style="background:#b45309;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-opacity">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
        </svg>
        Call 1-800-RELIEF Now
      </button>
    </div>

    <!-- Form Section -->
    <h2 class="text-2xl font-bold text-center mb-7">Help Request Form</h2>

    <div class="border border-gray-200 rounded-xl p-7 shadow-sm bg-white">

      <!-- Row 1: Name + Phone -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Your Full Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="John Doe"/>
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Contact Phone Number <span class="text-red-500">*</span></label>
          <input type="tel" placeholder="+1 (555) 123-4567"/>
        </div>
      </div>

      <!-- Current Location -->
      <div class="mb-4">
        <label class="block text-xs font-semibold text-gray-800 mb-1.5">Current Location <span class="text-red-500">*</span></label>
        <input type="text" placeholder="Address or description of your location"/>
      </div>

      <!-- Row 2: People + Urgency -->
      <div class="grid grid-cols-2 gap-4 mb-4">
        <div>
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Number of People Needing Help <span class="text-red-500">*</span></label>
          <input type="number" placeholder="e.g., 4"/>
        </div>
        <div>
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Urgency Level <span class="text-red-500">*</span></label>
          <select>
            <option value="" disabled selected></option>
            <option>Low – Stable but need help</option>
            <option>Medium – Need help soon</option>
            <option>High – Urgent situation</option>
            <option>Critical – Life-threatening</option>
          </select>
        </div>
      </div>

      <!-- Type of Help -->
      <div class="mb-4">
        <label class="block text-xs font-semibold text-gray-800 mb-3">Type of Help Needed <span class="text-red-500">*</span> <span class="font-normal text-gray-400">(Select all that apply)</span></label>
        <div class="grid grid-cols-2 gap-3">
          <label class="help-type-card" onclick="this.classList.toggle('selected')">
            <svg class="w-5 h-5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 4l9 5.75V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.75z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"/>
            </svg>
            Shelter & Housing
          </label>
          <label class="help-type-card" onclick="this.classList.toggle('selected')">
            <svg class="w-5 h-5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20 7H4a2 2 0 00-2 2v6a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/>
              <circle cx="12" cy="12" r="2" fill="currentColor" stroke="none"/>
            </svg>
            Food & Water
          </label>
          <label class="help-type-card" onclick="this.classList.toggle('selected')">
            <svg class="w-5 h-5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
            </svg>
            Medical Assistance
          </label>
          <label class="help-type-card" onclick="this.classList.toggle('selected')">
            <svg class="w-5 h-5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
            Essential Supplies
          </label>
        </div>
      </div>

      <!-- Medical Emergency Notice -->
      <div class="bg-red-50 border border-red-200 rounded-lg px-4 py-3 mb-4">
        <p class="text-red-600 font-bold text-sm mb-0.5">This is a medical emergency</p>
        <p class="text-red-500 text-xs">Check this if anyone requires immediate medical attention</p>
      </div>

      <!-- Safe Location -->
      <div class="mb-4">
        <label class="block text-xs font-semibold text-gray-800 mb-1.5">Are you in a safe location? <span class="text-red-500">*</span></label>
        <select>
          <option value="" disabled selected></option>
          <option>Yes – I am in a safe location</option>
          <option>No – I am not in a safe location</option>
          <option>Unsure</option>
        </select>
      </div>

      <!-- Additional Info -->
      <div class="mb-6">
        <label class="block text-xs font-semibold text-gray-800 mb-1.5">Specific Needs & Additional Information <span class="text-red-500">*</span></label>
        <textarea rows="5" placeholder="Please describe your situation and specific needs in detail. Include information about..."></textarea>
      </div>

      <!-- Submit -->
      <button style="background:#00BFFF;" class="w-full text-white font-semibold text-sm py-3.5 rounded-lg hover:opacity-90 transition-opacity mb-4">
        Submit Help Request
      </button>

      <p class="text-xs text-gray-400 text-center leading-relaxed">
        By submitting this form, you consent to being contacted by ReliefConnect staff regarding your help request.
      </p>
    </div>

  </div>
</main>

<!-- ── FOOTER ── -->
<?php include 'footer.php'; ?>

</body>
</html>