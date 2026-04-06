<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>How It Works - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- NAVBAR -->
  <nav class="bg-black text-white px-6 py-3 flex items-center justify-between sticky top-0 z-50">
    <div class="flex items-center gap-8">
      <div class="text-xl font-bold">
        <span style="color:#00BCFF">Relief</span><span class="text-white">Connect</span>
      </div>
      <ul class="hidden md:flex gap-6 text-sm text-gray-300">
        <li><a href="index.php" class="hover:text-white">Home</a></li>
        <li><a href="campaigns.php" class="hover:text-white">Campaigns</a></li>
        <li><a href="about.php" class="hover:text-white">About</a></li>
        <li><a href="contact.php" class="hover:text-white">Contact</a></li>
        <li><a href="how_it_works.php" class="hover:text-white text-white underline-offset-8 underline">How It Works</a></li>
      </ul>
    </div>
    <div class="flex items-center gap-3">
      <a href="#" class="text-sm text-white hover:text-gray-300">Login</a>
      <a href="#" class="text-white text-sm font-semibold px-4 py-2 rounded-md hover:opacity-90" style="background:#00BFFF">Register</a>
    </div>
  </nav>

  <!-- HERO -->
  <section style="background:linear-gradient(135deg,#00BFFF 0%,#0284c7 100%);" class="py-14 px-6 text-center text-white">
    <h1 class="text-3xl md:text-4xl font-black mb-3">How ReliefConnect Works</h1>
    <p class="text-blue-100 text-sm max-w-lg mx-auto leading-relaxed">
      A comprehensive platform coordinating disaster relief efforts through seamless collaboration between administrators, camp managers, volunteers, donors, and affected communities.
    </p>
  </section>

  <!-- OUR RELIEF PROCESS -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-black text-center mb-12">Our Relief Process</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">

        <!-- Step 1 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4" style="background:#fce7f3">
            <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </div>
          <div class="text-xs text-gray-400 mb-1">Step 1</div>
          <h3 class="font-bold text-sm mb-2">Disaster Strikes</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Natural disasters or emergencies create immediate need for coordinated relief efforts.</p>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-8 h-8" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
            </svg>
          </div>
          <div class="text-xs text-gray-400 mb-1">Step 2</div>
          <h3 class="font-bold text-sm mb-2">Camp Setup</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Our administrators quickly establish relief camps in affected areas with proper infrastructure.</p>
        </div>

        <!-- Step 3 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4" style="background:#ede9fe">
            <svg class="w-8 h-8 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
          </div>
          <div class="text-xs text-gray-400 mb-1">Step 3</div>
          <h3 class="font-bold text-sm mb-2">Resource Coordination</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Camp managers coordinate supplies, volunteers, and services to meet immediate needs.</p>
        </div>

        <!-- Step 4 -->
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 rounded-full flex items-center justify-center mb-4" style="background:#fce7f3">
            <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
          </div>
          <div class="text-xs text-gray-400 mb-1">Step 4</div>
          <h3 class="font-bold text-sm mb-2">Community Support</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Volunteers, donors, and partners work together to provide assistance and relief.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- HOW DIFFERENT STAKEHOLDERS USE RELIEFCONNECT -->
  <section class="py-14 px-6 md:px-16 bg-gray-50">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-black text-center mb-10">How Different Stakeholders Use ReliefConnect</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">

        <!-- Administrators -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
            </svg>
          </div>
          <h3 class="font-bold text-sm mb-3">For Administrators</h3>
          <ul class="space-y-1.5">
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Set up and manage relief camps</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Appoint camp managers and coordinators</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Monitor inventory and resource allocation</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Generate comprehensive reports</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Oversee volunteer assignments</li>
          </ul>
        </div>

        <!-- Camp Managers -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <h3 class="font-bold text-sm mb-3">For Camp Managers</h3>
          <ul class="space-y-1.5">
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Register affected individuals</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Manage camp-specific resources</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Assign tasks to volunteers</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Distribute supplies efficiently</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Track camp operations in real-time</li>
          </ul>
        </div>

        <!-- Volunteers -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </div>
          <h3 class="font-bold text-sm mb-3">For Volunteers</h3>
          <ul class="space-y-1.5">
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Sign up and create your profile</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>View and accept task assignments</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Update task progress</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Communicate with camp managers</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Make a direct impact on the ground</li>
          </ul>
        </div>
      </div>

      <!-- Bottom row: 2 cards centered -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5 max-w-2xl mx-auto">

        <!-- Donors -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#fce7f3">
            <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>
          </div>
          <h3 class="font-bold text-sm mb-3">For Donors</h3>
          <ul class="space-y-1.5">
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Donate money to campaigns</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Contribute physical supplies</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Track your donation impact</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Support specific relief efforts</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Receive donation receipts</li>
          </ul>
        </div>

        <!-- Affected People -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"/>
            </svg>
          </div>
          <h3 class="font-bold text-sm mb-3">For Affected People</h3>
          <ul class="space-y-1.5">
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Register at relief camps</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Submit help requests</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Access essential supplies</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Receive medical assistance</li>
            <li class="flex items-start gap-2 text-xs text-gray-600"><svg class="w-3.5 h-3.5 text-green-500 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>Get support services</li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!-- REAL-TIME COORDINATION + SECURITY -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

      <!-- Real-Time Coordination -->
      <div>
        <h2 class="text-xl font-black mb-5">Real-Time Coordination</h2>
        <ul class="space-y-2.5">
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Live updates on camp operations and resource availability
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Instant task assignment and progress tracking
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Real-time communication between all stakeholders
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Dynamic inventory management across all camps
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Automated alerts for critical situations
          </li>
        </ul>
      </div>

      <!-- Security & Privacy -->
      <div>
        <h2 class="text-xl font-black mb-5">Security & Privacy</h2>
        <ul class="space-y-2.5">
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Role-based access control for all users
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Encrypted data storage and transmission
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Protected personal information of affected individuals
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Secure donation processing and tracking
          </li>
          <li class="flex items-start gap-2 text-sm text-gray-600">
            <span class="text-blue-400 font-bold text-base leading-none mt-0.5">+</span>
            Audit trails for accountability and transparency
          </li>
        </ul>
      </div>

    </div>
  </section>

  <!-- READY TO MAKE A DIFFERENCE CTA -->
  <section class="bg-black text-white py-16 px-6 text-center">
    <div class="max-w-2xl mx-auto">
      <h2 class="text-3xl font-black mb-3">Ready to Make a Difference?</h2>
      <p class="text-gray-400 text-sm leading-relaxed mb-8">
        Join our network of relief workers, volunteers, and donors making an impact in disaster-affected communities.
      </p>
      <div class="flex justify-center gap-4 flex-wrap">
        <a href="#" class="text-white text-sm font-semibold px-6 py-2.5 rounded-md hover:opacity-90" style="background:#00BFFF">Become a Volunteer</a>
        <a href="#" class="border border-white text-white text-sm font-semibold px-6 py-2.5 rounded-md hover:bg-white hover:text-black transition-colors">Make a Donation</a>
      </div>
    </div>
  </section>

  <!-- MINIMAL FOOTER -->
  <div class="border-t border-gray-800"></div>
  <?php include 'footer.php'; ?>

</body>
</html>