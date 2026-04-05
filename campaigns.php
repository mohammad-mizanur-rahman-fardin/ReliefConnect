<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Campaigns - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    .progress-bar { height: 6px; border-radius: 9999px; background: #e5e7eb; overflow: hidden; }
    .progress-fill { height: 100%; border-radius: 9999px; background: #00BFFF; }
    .badge-critical { background: #ef4444; color: white; }
    .badge-urgent { background: #f97316; color: white; }
    .badge-moderate { background: #eab308; color: white; }
    .filter-btn { border: 1px solid #e5e7eb; border-radius: 9999px; padding: 5px 14px; font-size: 12px; font-weight: 500; cursor: pointer; background: white; color: #374151; display: flex; align-items: center; gap: 5px; }
    .filter-btn.active { background: #00BFFF; color: white; border-color: #00BFFF; }
    .urgency-btn { border-radius: 9999px; padding: 4px 14px; font-size: 12px; font-weight: 500; cursor: pointer; background: white; color: #374151; border: 1px solid #e5e7eb; }
    .urgency-btn.active { background: #111827; color: white; border-color: #111827; }
    .card-img { width: 100%; height: 180px; object-fit: cover; }
    .supply-tag { background: #f3f4f6; color: #374151; font-size: 11px; padding: 3px 8px; border-radius: 4px; white-space: nowrap; }
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
        <li><a href="#" class="hover:text-white text-white underline-offset-8 underline">Campaigns</a></li>
        <li><a href="about.php" class="hover:text-white">About</a></li>
        <li><a href="contact.php" class="hover:text-white">Contact</a></li>
        <li><a href="how_it_works.php" class="hover:text-white">How It Works</a></li>
      </ul>
    </div>
    <div class="flex items-center gap-3">
      <a href="#" class="text-sm text-white hover:text-gray-300">Login</a>
      <a href="#" class="text-white text-sm font-semibold px-4 py-2 rounded-md hover:opacity-90" style="background:#00BFFF">Register</a>
    </div>
  </nav>

  <!-- HERO -->
  <section style="background:linear-gradient(160deg,#00BFFF 0%,#0369a1 100%);" class="px-6 pt-10 pb-0 text-center text-white">
    <div class="inline-flex items-center gap-2 bg-white bg-opacity-20 text-white text-xs font-medium px-3 py-1.5 rounded-full mb-5">
      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
      Urgent Relief Needed
    </div>
    <h1 class="text-3xl md:text-4xl font-black mb-3">Active Relief Campaigns</h1>
    <p class="text-blue-100 text-sm max-w-lg mx-auto leading-relaxed mb-8">
      Your support can make an immediate difference. Browse ongoing campaigns and contribute to saving lives and rebuilding communities.
    </p>

    <!-- Stats bar inside hero -->
    <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-3 pb-8">
      <div class="bg-white bg-opacity-15 rounded-xl px-5 py-4 text-left flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center flex-shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
        </div>
        <div>
          <div class="text-2xl font-black">6</div>
          <div class="text-blue-100 text-xs">Active Campaigns</div>
        </div>
      </div>
      <div class="bg-white bg-opacity-15 rounded-xl px-5 py-4 text-left flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center flex-shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <div>
          <div class="text-2xl font-black">15,480</div>
          <div class="text-blue-100 text-xs">Families Helped</div>
        </div>
      </div>
      <div class="bg-white bg-opacity-15 rounded-xl px-5 py-4 text-left flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-green-500 bg-opacity-80 flex items-center justify-center flex-shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <div>
          <div class="text-2xl font-black">$2.1M</div>
          <div class="text-blue-100 text-xs">Total Raised</div>
        </div>
      </div>
      <div class="bg-white bg-opacity-15 rounded-xl px-5 py-4 text-left flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-red-500 bg-opacity-70 flex items-center justify-center flex-shrink-0">
          <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <div>
          <div class="text-2xl font-black">526</div>
          <div class="text-blue-100 text-xs">Volunteers Active</div>
        </div>
      </div>
    </div>
  </section>

  <!-- SEARCH + FILTERS -->
  <section class="py-6 px-6 md:px-16 bg-white border-b border-gray-100">
    <div class="max-w-5xl mx-auto">
      <!-- Search -->
      <div class="relative mb-5 max-w-xl mx-auto">
        <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" placeholder="Search campaigns..." class="w-full pl-9 pr-4 py-2.5 border border-gray-200 rounded-full text-sm text-gray-700 placeholder-gray-400 outline-none focus:border-blue-400" />
      </div>
      <!-- Category Filters -->
      <div class="flex flex-wrap gap-2 mb-3">
        <button class="filter-btn active">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          All Campaigns
        </button>
        <button class="filter-btn">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
          Flood Relief
        </button>
        <button class="filter-btn">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
          Earthquake
        </button>
        <button class="filter-btn">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          Medical Aid
        </button>
        <button class="filter-btn">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
          Shelter
        </button>
        <button class="filter-btn">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/></svg>
          Food & Nutrition
        </button>
      </div>
      <!-- Urgency Filters -->
      <div class="flex items-center gap-2 flex-wrap">
        <div class="flex items-center gap-1.5 text-xs text-gray-500 mr-1">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L13 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 017 21v-7.586L3.293 6.707A1 1 0 013 6V4z"/></svg>
          Urgency:
        </div>
        <button class="urgency-btn active">All</button>
        <button class="urgency-btn">Critical</button>
        <button class="urgency-btn">Urgent</button>
        <button class="urgency-btn">Moderate</button>
      </div>
    </div>
  </section>

  <!-- CAMPAIGN CARDS -->
  <section class="py-10 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- Card 1: Flood Relief Eastern Region -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1547683905-f686c993aae5?w=400&q=80" alt="Flood Relief" class="card-img" />
          <span class="absolute top-3 right-3 badge-critical text-xs font-bold px-2 py-0.5 rounded">CRITICAL</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Eastern Province
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Flood Relief - Eastern Region</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Massive flooding has displaced thousands of families in the eastern region. Immediate relief...</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">68%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:68%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$342,000 raised</span><span>Goal: $500,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>3,200 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>89/150 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Food Packages</span>
              <span class="supply-tag">Clean Water</span>
              <span class="supply-tag">Tents</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

      <!-- Card 2: Emergency Medical Support -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?w=400&q=80" alt="Medical Support" class="card-img" />
          <span class="absolute top-3 right-3 badge-critical text-xs font-bold px-2 py-0.5 rounded">CRITICAL</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Multiple Camps
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Emergency Medical Support</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Critical shortage of medical supplies and healthcare workers in disaster affected areas.</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">82%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:82%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$245,000 raised</span><span>Goal: $300,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>1,800 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>34/50 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Antibiotics</span>
              <span class="supply-tag">First Aid Kits</span>
              <span class="supply-tag">IV Fluids</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

      <!-- Card 3: Community Rebuilding Initiative -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?w=400&q=80" alt="Community Rebuilding" class="card-img" />
          <span class="absolute top-3 right-3 badge-moderate text-xs font-bold px-2 py-0.5 rounded">MODERATE</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Western Villages
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Community Rebuilding Initiative</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Long-term rebuilding project to help affected communities restore their homes and...</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">57%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:57%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$680,000 raised</span><span>Goal: $1,200,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>5,600 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>178/300 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Building Materials</span>
              <span class="supply-tag">Tools</span>
              <span class="supply-tag">Seeds</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

      <!-- Card 4: Earthquake Emergency Response -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1547683905-f686c993aae5?w=400&q=80" alt="Earthquake" class="card-img object-top" />
          <span class="absolute top-3 right-3 badge-critical text-xs font-bold px-2 py-0.5 rounded">CRITICAL</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Northern Region
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Earthquake Emergency Response</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Rapid response to recent earthquake that has left hundreds trapped and thousands homeless.</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">57%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:57%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$456,000 raised</span><span>Goal: $800,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>2,400 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>145/200 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Rescue Equipment</span>
              <span class="supply-tag">Emergency Shelters</span>
              <span class="supply-tag">Food Rations</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

      <!-- Card 5: Children Nutrition Program -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?w=400&q=80" alt="Nutrition" class="card-img object-bottom" />
          <span class="absolute top-3 right-3 badge-urgent text-xs font-bold px-2 py-0.5 rounded">URGENT</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Central Camps
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Children Nutrition Program</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Providing nutritious meals and essential vitamins to malnourished children in affected areas.</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">65%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:65%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$98,000 raised</span><span>Goal: $150,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>980 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>28/40 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Baby Formula</span>
              <span class="supply-tag">Nutrition Packets</span>
              <span class="supply-tag">Vitamins</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

      <!-- Card 6: Winter Shelter Program -->
      <div class="rounded-xl border border-gray-100 shadow-sm overflow-hidden">
        <div class="relative">
          <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?w=400&q=80" alt="Winter Shelter" class="card-img object-bottom" />
          <span class="absolute top-3 right-3 badge-urgent text-xs font-bold px-2 py-0.5 rounded">URGENT</span>
          <div class="absolute bottom-3 left-3 flex items-center gap-1 text-white text-xs">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
            Highland Camps
          </div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-sm mb-2">Winter Shelter Program</h3>
          <p class="text-gray-500 text-xs leading-relaxed mb-4">Urgent winterization of temporary shelters as temperatures drop in highland areas.</p>
          <div class="flex items-center justify-between text-xs mb-1.5">
            <span class="font-semibold text-gray-700">Funding Progress</span>
            <span class="font-bold" style="color:#00BFFF">67%</span>
          </div>
          <div class="progress-bar mb-1.5"><div class="progress-fill" style="width:67%"></div></div>
          <div class="flex justify-between text-xs text-gray-400 mb-4">
            <span>$267,000 raised</span><span>Goal: $400,000</span>
          </div>
          <div class="flex gap-4 mb-3">
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              <span>1,500 <span class="text-gray-400">Families</span></span>
            </div>
            <div class="flex items-center gap-1.5 text-xs text-gray-600">
              <svg class="w-3.5 h-3.5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
              <span>52/80 <span class="text-gray-400">Volunteers</span></span>
            </div>
          </div>
          <div class="mb-4">
            <div class="text-xs text-gray-500 mb-2">Supplies Needed:</div>
            <div class="flex flex-wrap gap-1.5">
              <span class="supply-tag">Winter Clothing</span>
              <span class="supply-tag">Heaters</span>
              <span class="supply-tag">Insulated Tents</span>
              <span class="supply-tag">+2 more</span>
            </div>
          </div>
          <button class="w-full text-white text-xs font-semibold py-2.5 rounded-lg hover:opacity-90" style="background:#00BFFF">Support This Campaign</button>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>
</body>
</html>