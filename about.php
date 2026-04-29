<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    .cyan { color: #00BFFF; }
    .cyan-bg { background-color: #00BFFF; }
    .step-connector {
      position: absolute;
      top: 22px;
      left: calc(50% + 28px);
      right: calc(-50% + 28px);
      height: 2px;
      background: #e5e7eb;
      z-index: 0;
    }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- PAGE HERO -->
  <section style="background:linear-gradient(135deg,#00BFFF 0%,#0284c7 100%);" class="py-14 px-6 text-center text-white">
    <h1 class="text-3xl md:text-4xl font-black mb-3">About ReliefConnect</h1>
    <p class="text-blue-100 text-sm max-w-lg mx-auto leading-relaxed">
      A comprehensive disaster relief coordination platform connecting camps, volunteers, donors, and affected communities to deliver efficient and transparent humanitarian aid.
    </p>
  </section>

  <!-- OUR MISSION -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-10 items-start">
      <!-- Left text -->
      <div class="flex-1">
        <h2 class="text-2xl font-black mb-4">Our Mission</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-3">
          In times of disaster, coordination and efficiency can save lives. ReliefConnect was created to streamline disaster relief operations, ensuring that help reaches those who need it most, when they need it most.
        </p>
        <p class="text-gray-500 text-sm leading-relaxed mb-3">
          We bridge the gap between relief organizations, volunteers, donors, and affected communities through a unified digital platform that promotes transparency, accountability, and rapid response.
        </p>
        <p class="text-gray-500 text-sm leading-relaxed">
          Our goal is to transform disaster relief from reactive chaos into coordinated compassion, where every stakeholder has the tools and information they need to make a difference.
        </p>
      </div>
      <!-- Right stats -->
      <div class="flex-shrink-0 w-full md:w-64 grid grid-cols-2 gap-4">
        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
          <div class="flex justify-center mb-2">
            <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
          </div>
          <div class="text-xl font-black">50,000+</div>
          <div class="text-xs text-gray-500 mt-0.5">People Helped</div>
        </div>
        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
          <div class="flex justify-center mb-2">
            <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
          </div>
          <div class="text-xl font-black">150+</div>
          <div class="text-xs text-gray-500 mt-0.5">Relief Camps</div>
        </div>
        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
          <div class="flex justify-center mb-2">
            <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
          </div>
          <div class="text-xl font-black">2M+</div>
          <div class="text-xs text-gray-500 mt-0.5">Supplies Distributed</div>
        </div>
        <div class="bg-gray-50 rounded-xl p-4 text-center border border-gray-100">
          <div class="flex justify-center mb-2">
            <div class="w-9 h-9 rounded-full flex items-center justify-center" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
            </div>
          </div>
          <div class="text-xl font-black">10,000+</div>
          <div class="text-xs text-gray-500 mt-0.5">Active Volunteers</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PLATFORM FEATURES -->
  <section class="py-14 px-6 md:px-16 bg-gray-50">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-10">
        <h2 class="text-2xl font-black mb-2">Platform Features</h2>
        <p class="text-gray-500 text-sm">Built with modern technology to deliver a seamless experience for all stakeholders</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
        <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="font-bold text-sm mb-2">Secure & Reliable</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Built with security and privacy in mind, ensuring all data is protected and confidential.</p>
        </div>
        <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <h3 class="font-bold text-sm mb-2">Real-Time Coordination</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Instant communication and updates between all stakeholders for rapid response.</p>
        </div>
        <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <h3 class="font-bold text-sm mb-2">Comprehensive Management</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Covering camps, volunteers, supplies, and affected people.</p>
        </div>
        <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-sm">
          <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-3" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
          </div>
          <h3 class="font-bold text-sm mb-2">Transparent Operations</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Complete visibility and accountability in relief operations and resource distribution.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO WE SERVE -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-10">
        <h2 class="text-2xl font-black mb-2">Who We Serve</h2>
        <p class="text-gray-500 text-sm">ReliefConnect supports six key stakeholder groups, each with specialized tools and features</p>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Administrators -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#fce7f3">
            <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Administrators</h3>
            <p class="text-gray-500 text-xs leading-relaxed">Oversee all operations, manage camps, approve resources, and generate reports.</p>
          </div>
        </div>
        <!-- Camp Managers -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Camp Managers</h3>
            <p class="text-gray-500 text-xs leading-relaxed">Handle day-to-day camp operations, register people, manage supplies, and assign tasks.</p>
          </div>
        </div>
        <!-- Volunteers -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#dcfce7">
            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Volunteers</h3>
            <p class="text-gray-500 text-xs leading-relaxed">Execute tasks, communicate with teams, and provide direct assistance to affected people.</p>
          </div>
        </div>
        <!-- Donors -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#fce7f3">
            <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Donors</h3>
            <p class="text-gray-500 text-xs leading-relaxed">Contribute money and supplies, track donations, and communicate with administration.</p>
          </div>
        </div>
        <!-- Affected People -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#fff7ed">
            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Affected People</h3>
            <p class="text-gray-500 text-xs leading-relaxed">Submit help requests, track relief status, and communicate with camp support.</p>
          </div>
        </div>
        <!-- Guests -->
        <div class="flex gap-4 items-start">
          <div class="w-10 h-10 rounded-xl flex-shrink-0 flex items-center justify-center" style="background:#ede9fe">
            <svg class="w-5 h-5 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
          </div>
          <div>
            <h3 class="font-bold text-sm mb-1">Guests</h3>
            <p class="text-gray-500 text-xs leading-relaxed">View campaigns, access information, and learn about ongoing relief efforts.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="py-14 px-6 md:px-16 bg-gray-50">
    <div class="max-w-4xl mx-auto">
      <div class="text-center mb-12">
        <h2 class="text-2xl font-black mb-2">How It Works</h2>
        <p class="text-gray-500 text-sm">A streamlined workflow that connects all relief operations</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6 relative">
        <!-- Step 1 -->
        <div class="flex flex-col items-center text-center relative">
          <div class="w-12 h-12 rounded-full text-white font-black text-lg flex items-center justify-center mb-4 z-10 relative" style="background:#00BFFF">1</div>
          <div class="hidden md:block absolute top-6 left-[calc(50%+24px)] right-[calc(-50%+24px)] h-0.5 bg-gray-200"></div>
          <h3 class="font-bold text-sm mb-2">Setup Camps</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Administrators create and configure relief camps with locations and resources</p>
        </div>
        <!-- Step 2 -->
        <div class="flex flex-col items-center text-center relative">
          <div class="w-12 h-12 rounded-full text-white font-black text-lg flex items-center justify-center mb-4 z-10 relative" style="background:#00BFFF">2</div>
          <div class="hidden md:block absolute top-6 left-[calc(50%+24px)] right-[calc(-50%+24px)] h-0.5 bg-gray-200"></div>
          <h3 class="font-bold text-sm mb-2">Coordinate Teams</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Camp managers assign volunteers and organize relief coordinator activities</p>
        </div>
        <!-- Step 3 -->
        <div class="flex flex-col items-center text-center relative">
          <div class="w-12 h-12 rounded-full text-white font-black text-lg flex items-center justify-center mb-4 z-10 relative" style="background:#00BFFF">3</div>
          <div class="hidden md:block absolute top-6 left-[calc(50%+24px)] right-[calc(-50%+24px)] h-0.5 bg-gray-200"></div>
          <h3 class="font-bold text-sm mb-2">Deliver Aid</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Volunteers execute tasks and provide direct assistance to affected people</p>
        </div>
        <!-- Step 4 -->
        <div class="flex flex-col items-center text-center relative">
          <div class="w-12 h-12 rounded-full text-white font-black text-lg flex items-center justify-center mb-4 z-10 relative" style="background:#00BFFF">4</div>
          <h3 class="font-bold text-sm mb-2">Track & Report</h3>
          <p class="text-gray-500 text-xs leading-relaxed">Real-time monitoring and comprehensive reporting ensure accountability</p>
        </div>
      </div>
    </div>
  </section>

  <!-- BUILT WITH MODERN TECHNOLOGY -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-2xl font-black mb-2">Built with Modern Technology</h2>
      <p class="text-gray-500 text-sm mb-10">ReliefConnect leverages cutting-edge web technologies for a fast, reliable, and secure experience</p>
      <div class="bg-gray-900 rounded-2xl p-8 grid grid-cols-1 md:grid-cols-3 gap-0 divide-y md:divide-y-0 md:divide-x divide-gray-700">
        <div class="py-6 md:py-0 md:px-8 text-left">
          <h3 class="text-white font-bold text-sm mb-2">React & TypeScript</h3>
          <p class="text-gray-400 text-xs leading-relaxed">Modern frontend framework ensuring a responsive and type-safe user interface.</p>
        </div>
        <div class="py-6 md:py-0 md:px-8 text-left">
          <h3 class="text-white font-bold text-sm mb-2">Tailwind CSS</h3>
          <p class="text-gray-400 text-xs leading-relaxed">Utility-first CSS framework for consistent and professional styling.</p>
        </div>
        <div class="py-6 md:py-0 md:px-8 text-left">
          <h3 class="text-white font-bold text-sm mb-2">Real-Time Updates</h3>
          <p class="text-gray-400 text-xs leading-relaxed">Live data synchronization keeping all stakeholders informed instantly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- MAKING A REAL IMPACT -->
  <section class="py-16 px-6 bg-white text-center">
    <div class="max-w-2xl mx-auto">
      <div class="flex justify-center mb-4">
        <div class="w-12 h-12 rounded-full flex items-center justify-center" style="background:#e0f7ff">
          <svg class="w-6 h-6" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
      </div>
      <h2 class="text-2xl font-black mb-3">Making a Real Impact</h2>
      <p class="text-gray-500 text-sm leading-relaxed mb-8">
        Every feature in ReliefConnect is designed with one goal in mind: to help more people, faster. By reducing coordination overhead and improving transparency, we enable relief organizations to focus on what matters most—saving lives and rebuilding communities.
      </p>
      <div class="flex justify-center gap-4 flex-wrap">
        <a href="index.php" class="text-white text-sm font-semibold px-6 py-2.5 rounded-md hover:opacity-90" style="background:#00BFFF">Get Started Today</a>
        <a href="campaigns.php" class="border border-gray-300 text-gray-800 text-sm font-semibold px-6 py-2.5 rounded-md hover:bg-gray-50">View Campaigns</a>
      </div>
    </div>
  </section>

  <!-- GET IN TOUCH -->
  <section class="py-14 px-6 md:px-16" style="background:#0ea5e9">
    <div class="max-w-3xl mx-auto text-center text-white">
      <h2 class="text-2xl font-black mb-2">Get in Touch</h2>
      <p class="text-blue-100 text-sm mb-10">Have questions about ReliefConnect or want to implement it in your organization? We'd love to hear from you.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="flex flex-col items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <div>
            <div class="font-bold text-sm">Location</div>
            <div class="text-blue-100 text-xs mt-0.5">Dhaka, Bangladesh</div>
          </div>
        </div>
        <div class="flex flex-col items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <div>
            <div class="font-bold text-sm">Email</div>
            <div class="text-blue-100 text-xs mt-0.5">contact@reliefconnect.org</div>
          </div>
        </div>
        <div class="flex flex-col items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-white bg-opacity-20 flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <div>
            <div class="font-bold text-sm">Support</div>
            <div class="text-blue-100 text-xs mt-0.5">24/7 Emergency Hotline</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>


</body>
</html>