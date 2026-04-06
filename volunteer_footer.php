<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Become a Volunteer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    input, select, textarea {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 6px;
      padding: 9px 12px;
      font-size: 13px;
      color: #374151;
      outline: none;
      background: #fff;
      transition: border-color 0.15s;
    }
    input::placeholder, textarea::placeholder { color: #9ca3af; }
    input:focus, select:focus, textarea:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 2px rgba(0,191,255,0.12);
    }
    select {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%236b7280' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 12px center;
      padding-right: 32px;
      color: #9ca3af;
    }

    .opp-card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      padding: 20px;
    }

    .badge-urgent {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      background: #fef2f2;
      color: #ef4444;
      font-size: 11px;
      font-weight: 600;
      padding: 3px 9px;
      border-radius: 9999px;
      white-space: nowrap;
    }

    .meta-row {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 12px;
      color: #6b7280;
      margin-top: 6px;
    }
  </style>
</head>
<body class="bg-white text-gray-800 flex flex-col min-h-screen">

<!-- ── NAV ── -->
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
      <li><a href="how_it_works.php" class="hover:text-white">How It Works</a></li>
    </ul>
  </div>
  <div class="flex items-center gap-3">
    <a href="#" class="text-sm text-white hover:text-gray-300">Login</a>
    <a href="#" class="text-white text-sm font-semibold px-4 py-2 rounded-md hover:opacity-90" style="background:#00BFFF">Register</a>
  </div>
</nav>

<!-- ── HERO ── -->
<section style="background:linear-gradient(180deg,#00BFFF 0%,#0099cc 100%);" class="text-white text-center py-12 px-4">
  <h1 class="text-3xl font-bold mb-2">Become a Volunteer</h1>
  <p class="text-sm opacity-90 max-w-sm mx-auto leading-relaxed">
    Join our dedicated team of volunteers making a difference in disaster-affected communities.
  </p>
</section>

<!-- ── WHY VOLUNTEER ── -->
<section class="py-14 px-6 text-center">
  <h2 class="text-2xl font-bold mb-10">Why Volunteer with Us?</h2>
  <div class="max-w-4xl mx-auto grid grid-cols-4 gap-6">

    <!-- Make Real Impact -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background:#e0f9ff;">
        <svg class="w-6 h-6" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
        </svg>
      </div>
      <h3 class="font-bold text-sm mb-2">Make Real Impact</h3>
      <p class="text-xs text-gray-500 leading-relaxed">Directly help communities in crisis and make a tangible difference in people's lives.</p>
    </div>

    <!-- Join a Community -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background:#e0f9ff;">
        <svg class="w-6 h-6" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <circle cx="9" cy="7" r="3"/>
          <circle cx="15" cy="7" r="3"/>
          <path stroke-linecap="round" d="M3 19c0-3.314 2.686-6 6-6s6 2.686 6 6"/>
          <path stroke-linecap="round" d="M15 13c2.5 0 5 1.5 5 4.5" opacity="0.6"/>
        </svg>
      </div>
      <h3 class="font-bold text-sm mb-2">Join a Community</h3>
      <p class="text-xs text-gray-500 leading-relaxed">Connect with like-minded individuals dedicated to humanitarian service.</p>
    </div>

    <!-- Flexible Commitment -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background:#e0f9ff;">
        <svg class="w-6 h-6" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9"/>
          <polyline points="9 12 11 14 15 10"/>
        </svg>
      </div>
      <h3 class="font-bold text-sm mb-2">Flexible Commitment</h3>
      <p class="text-xs text-gray-500 leading-relaxed">Choose tasks that fit your schedule and availability.</p>
    </div>

    <!-- Skill Development -->
    <div class="flex flex-col items-center">
      <div class="w-12 h-12 rounded-full flex items-center justify-center mb-4" style="background:#e0f9ff;">
        <svg class="w-6 h-6" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="9"/>
          <polyline points="12 6 12 12 16 14"/>
        </svg>
      </div>
      <h3 class="font-bold text-sm mb-2">Skill Development</h3>
      <p class="text-xs text-gray-500 leading-relaxed">Gain valuable experience in disaster response and emergency management.</p>
    </div>

  </div>
</section>

<!-- ── OPPORTUNITIES ── -->
<section class="px-6 pb-14">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-xl font-bold mb-5">Current Volunteer Opportunities</h2>
    <div class="bg-gray-50 rounded-2xl p-5 grid grid-cols-2 gap-4">

      <!-- On-Site Camp Support -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">On-Site Camp Support</h3>
          <span class="badge-urgent">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><text x="7" y="14" font-size="9" fill="white" font-family="sans-serif">!</text></svg>
            Urgent
          </span>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Assist with daily camp operations, supply distribution, and community support.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Various Locations
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          Full-time / Part-time • Flexible
        </div>
      </div>

      <!-- Medical & Healthcare -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">Medical & Healthcare Support</h3>
          <span class="badge-urgent">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="8"/><text x="7" y="14" font-size="9" fill="white" font-family="sans-serif">!</text></svg>
            Urgent
          </span>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Provide medical assistance, first aid, and health monitoring for affected individuals.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          All Active Camps
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          On-call • 4+ hours/week
        </div>
      </div>

      <!-- Food & Nutrition -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">Food & Nutrition Services</h3>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Help prepare and distribute meals, manage food inventory, and ensure nutritional standards.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Central City Hub
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          Shifts Available • 6-8 hours/week
        </div>
      </div>

      <!-- Administrative & Logistics -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">Administrative & Logistics</h3>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Support camp administration, data entry, inventory tracking, and coordination.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Remote / On-site
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          Remote Friendly • Flexible
        </div>
      </div>

      <!-- Children & Family -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">Children & Family Services</h3>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Organize activities for children, provide educational support, and assist families.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Bay Area Camp
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          Part-time • 8+ hours/week
        </div>
      </div>

      <!-- Translation & Communication -->
      <div class="opp-card">
        <div class="flex items-start justify-between gap-2 mb-2">
          <h3 class="font-bold text-sm">Translation & Communication</h3>
        </div>
        <p class="text-xs text-gray-500 leading-relaxed mb-3">Help bridge language barriers and facilitate communication with diverse communities.</p>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Remote
        </div>
        <div class="meta-row">
          <svg class="w-3.5 h-3.5 shrink-0" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="12 6 12 12 16 14"/></svg>
          As Needed • Flexible
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── APPLICATION FORM ── -->
<section class="px-6 pb-16">
  <h2 class="text-2xl font-bold text-center mb-8">Volunteer Application</h2>
  <div class="max-w-2xl mx-auto border border-gray-200 rounded-xl p-8 shadow-sm bg-white">

    <!-- Row 1: Name + Email -->
    <div class="grid grid-cols-2 gap-4 mb-4">
      <div>
        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
        <input type="text" placeholder="John Doe"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
        <input type="email" placeholder="john@example.com"/>
      </div>
    </div>

    <!-- Row 2: Phone + Location -->
    <div class="grid grid-cols-2 gap-4 mb-4">
      <div>
        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Phone Number <span class="text-red-500">*</span></label>
        <input type="tel" placeholder="+1 (555) 123-4567"/>
      </div>
      <div>
        <label class="block text-xs font-semibold text-gray-700 mb-1.5">Location <span class="text-red-500">*</span></label>
        <input type="text" placeholder="City, State"/>
      </div>
    </div>

    <!-- Availability -->
    <div class="mb-4">
      <label class="block text-xs font-semibold text-gray-700 mb-1.5">Availability <span class="text-red-500">*</span></label>
      <select>
        <option value="" disabled selected></option>
        <option>Full-time</option>
        <option>Part-time</option>
        <option>Weekends only</option>
        <option>Flexible / On-call</option>
      </select>
    </div>

    <!-- Skills -->
    <div class="mb-4">
      <label class="block text-xs font-semibold text-gray-700 mb-1.5">Skills & Qualifications</label>
      <textarea rows="3" placeholder="E.g., medical training, language skills, logistics experience, etc."></textarea>
    </div>

    <!-- Previous Experience -->
    <div class="mb-4">
      <label class="block text-xs font-semibold text-gray-700 mb-1.5">Previous Volunteer Experience</label>
      <textarea rows="3" placeholder="Brief description of any previous volunteer work"></textarea>
    </div>

    <!-- Motivation -->
    <div class="mb-6">
      <label class="block text-xs font-semibold text-gray-700 mb-1.5">Why do you want to volunteer? <span class="text-red-500">*</span></label>
      <textarea rows="3" placeholder="Share your motivation and what you hope to contribute"></textarea>
    </div>

    <!-- Submit -->
    <button style="background:#00BFFF;" class="w-full text-white font-semibold text-sm py-3 rounded-lg hover:opacity-90 transition-opacity">
      Submit Application
    </button>

  </div>
</section>

<!-- ── FOOTER ── -->
<?php include 'footer.php'; ?>

</body>
</html>