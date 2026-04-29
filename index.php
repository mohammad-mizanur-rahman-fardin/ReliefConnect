<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ReliefConnect - Coordinating Hope in Times of Crisis</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    .cyan-text { color: #00BFFF; }
    .cyan-bg { background-color: #00BFFF; }
    .gradient-hero { background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); }
    .campaign-card img { width: 100%; height: 180px; object-fit: cover; }
    .urgent-badge {
      position: absolute;
      top: 12px; right: 12px;
      background: #ef4444;
      color: white;
      font-size: 11px;
      font-weight: 700;
      padding: 3px 8px;
      border-radius: 4px;
      letter-spacing: 0.05em;
    }
    .stat-item { border-right: 1px solid #333; }
    .stat-item:last-child { border-right: none; }
    .hero-image-wrapper {
      position: relative;
    }
    .hero-image-wrapper::before {
      content: '';
      position: absolute;
      top: -8px; left: -8px;
      width: 100%; height: 100%;
      border: 3px solid #00BFFF;
      border-radius: 12px;
      z-index: 0;
    }
    .hero-image-wrapper img {
      position: relative;
      z-index: 1;
      border-radius: 10px;
    }
    .stakeholder-card:hover { box-shadow: 0 8px 30px rgba(0,191,255,0.15); transform: translateY(-2px); transition: all 0.2s; }
    .campaign-card:hover { box-shadow: 0 8px 30px rgba(0,0,0,0.12); transform: translateY(-2px); transition: all 0.2s; }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- HERO -->
  <section class="px-6 md:px-16 py-16 bg-white">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
      <div class="flex-1">
        <div class="inline-flex items-center gap-2 border border-blue-300 text-blue-500 text-xs font-medium px-3 py-1.5 rounded-full mb-6">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="2"/><path d="M12 8v4l3 3" stroke-width="2" stroke-linecap="round"/></svg>
          Emergency Hotline: 1-800-RELIEF
        </div>
        <h1 class="text-4xl md:text-5xl font-black leading-tight mb-4">
          Coordinating Hope<br/>in Times of <span class="cyan-text">Crisis</span>
        </h1>
        <p class="text-gray-500 text-sm leading-relaxed mb-8 max-w-md">
          A comprehensive platform connecting disaster relief camps, volunteers, donors, and affected communities. Together, we bring aid where it's needed most.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="request_help.php" class="cyan-bg text-white text-sm font-semibold px-5 py-2.5 rounded-md hover:opacity-90">Request Help</a>
          <a href="volunteer_footer.php" class="bg-black text-white text-sm font-semibold px-5 py-2.5 rounded-md hover:bg-gray-800">Become a Volunteer</a>
          <a href="donor_footer.php" class="border border-gray-300 text-gray-800 text-sm font-semibold px-5 py-2.5 rounded-md hover:bg-gray-50">Donate Now</a>
        </div>
      </div>
      <div class="flex-1 flex justify-center">
        <div class="hero-image-wrapper w-full max-w-sm">
          <img src="assets\Flood Relief Eastern Region.jpg" alt="Rescue workers" class="w-full" />
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="bg-black text-white py-10">
    <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-4">
      <div class="stat-item flex flex-col items-center py-6 px-4">
        <div class="w-12 h-12 rounded-full bg-cyan-500 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <div class="text-3xl font-black">45</div>
        <div class="text-cyan-400 text-sm mt-1">Active Camps</div>
      </div>
      <div class="stat-item flex flex-col items-center py-6 px-4">
        <div class="w-12 h-12 rounded-full bg-cyan-500 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <div class="text-3xl font-black">2,340</div>
        <div class="text-cyan-400 text-sm mt-1">Volunteers</div>
      </div>
      <div class="stat-item flex flex-col items-center py-6 px-4">
        <div class="w-12 h-12 rounded-full bg-cyan-500 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <div class="text-3xl font-black">15,600</div>
        <div class="text-cyan-400 text-sm mt-1">Families Helped</div>
      </div>
      <div class="flex flex-col items-center py-6 px-4">
        <div class="w-12 h-12 rounded-full bg-cyan-500 flex items-center justify-center mb-3">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <div class="text-3xl font-black">89,200</div>
        <div class="text-cyan-400 text-sm mt-1">Supply Packages</div>
      </div>
    </div>
  </section>

  <!-- STAKEHOLDERS -->
  <section class="bg-gray-50 py-16 px-6 md:px-16">
    <div class="max-w-5xl mx-auto text-center mb-10">
      <h2 class="text-3xl font-black mb-3">Built For Every <span class="cyan-text">Stakeholder</span></h2>
      <p class="text-gray-500 text-sm max-w-lg mx-auto">Whether you're managing camps, volunteering, donating, or seeking help, our platform streamlines coordination and maximizes impact.</p>
    </div>
    <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
      <!-- Camp Managers -->
      <div class="stakeholder-card bg-white rounded-xl p-5 border border-gray-100 shadow-sm cursor-pointer">
        <div class="w-11 h-11 rounded-xl bg-cyan-500 flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-2">For Camp Managers</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Manage camps, register families, truck supplies, and coordinate volunteers effectively.</p>
      </div>
      <!-- Volunteers -->
      <div class="stakeholder-card bg-white rounded-xl p-5 border border-gray-100 shadow-sm cursor-pointer">
        <div class="w-11 h-11 rounded-xl bg-blue-600 flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-2">For Volunteers</h3>
        <p class="text-gray-500 text-xs leading-relaxed">View assigned tasks, update completion status, and report urgent field issues in real-time.</p>
      </div>
      <!-- Donors -->
      <div class="stakeholder-card bg-white rounded-xl p-5 border border-gray-100 shadow-sm cursor-pointer">
        <div class="w-11 h-11 rounded-xl bg-cyan-400 flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-2">For Donors</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Donate money or supplies, track usage, and download receipts for your contributions.</p>
      </div>
      <!-- Affected People -->
      <div class="stakeholder-card bg-white rounded-xl p-5 border border-gray-100 shadow-sm cursor-pointer">
        <div class="w-11 h-11 rounded-xl bg-gray-800 flex items-center justify-center mb-4">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-2">For Affected People</h3>
        <p class="text-gray-500 text-xs leading-relaxed">Submit help requests, view relief status, and get assigned to nearest support camps.</p>
      </div>
    </div>
  </section>

  <!-- ACTIVE CAMPAIGNS -->
  <section class="py-16 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto">
      <div class="text-center mb-10">
        <div class="inline-flex items-center gap-1.5 bg-red-50 text-red-500 text-xs font-semibold px-3 py-1.5 rounded-full mb-4">
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          Urgent
        </div>
        <h2 class="text-3xl font-black mb-3">Active <span class="cyan-text">Relief Campaigns</span></h2>
        <p class="text-gray-500 text-sm">Your support can make an immediate difference in these ongoing relief efforts.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Campaign 1 -->
        <div class="campaign-card rounded-xl border border-gray-100 shadow-sm overflow-hidden cursor-pointer">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1547683905-f686c993aae5?w=400&q=80" alt="Flood Relief" class="w-full h-44 object-cover" />
            <span class="urgent-badge">URGENT</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-sm mb-3">Flood Relief – Eastern Region</h3>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-1.5">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              3,200 families affected
            </div>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-4">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              Needed: Food, Medicine, Shelter
            </div>
            <button class="w-full cyan-bg text-white text-xs font-semibold py-2.5 rounded-md hover:opacity-90">Support This Campaign</button>
          </div>
        </div>
        <!-- Campaign 2 -->
        <div class="campaign-card rounded-xl border border-gray-100 shadow-sm overflow-hidden cursor-pointer">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?w=400&q=80" alt="Medical Support" class="w-full h-44 object-cover" />
            <span class="urgent-badge">URGENT</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-sm mb-3">Emergency Medical Support</h3>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-1.5">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              1,800 families affected
            </div>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-4">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              Needed: Medical Supplies, Doctors
            </div>
            <button class="w-full cyan-bg text-white text-xs font-semibold py-2.5 rounded-md hover:opacity-90">Support This Campaign</button>
          </div>
        </div>
        <!-- Campaign 3 -->
        <div class="campaign-card rounded-xl border border-gray-100 shadow-sm overflow-hidden cursor-pointer">
          <div class="relative">
            <img src="https://images.unsplash.com/photo-1593113630400-ea4288922497?w=400&q=80" alt="Community Rebuilding" class="w-full h-44 object-cover" />
            <span class="urgent-badge">URGENT</span>
          </div>
          <div class="p-4">
            <h3 class="font-bold text-sm mb-3">Community Rebuilding Initiative</h3>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-1.5">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
              5,600 families affected
            </div>
            <div class="flex items-center gap-2 text-gray-500 text-xs mb-4">
              <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              Needed: Building Materials, Volunteers
            </div>
            <button class="w-full cyan-bg text-white text-xs font-semibold py-2.5 rounded-md hover:opacity-90">Support This Campaign</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA BANNER -->
  <section style="background: linear-gradient(135deg, #00BFFF 0%, #0284c7 100%);" class="py-16 px-6 text-center text-white">
    <h2 class="text-3xl font-black mb-3">Every Action Counts in Times of Crisis</h2>
    <p class="text-blue-100 text-sm max-w-lg mx-auto mb-8">
      Join thousands of volunteers, donors, and relief workers making a real difference. Your contribution, big or small, helps rebuild lives and restore hope.
    </p>
    <div class="flex justify-center gap-4 flex-wrap">
      <a href="#" class="bg-white text-gray-900 text-sm font-semibold px-6 py-3 rounded-md hover:bg-gray-100">Get Started Today</a>
      <a href="#" class="bg-transparent border-2 border-white text-white text-sm font-semibold px-6 py-3 rounded-md hover:bg-white hover:text-gray-900 transition-colors">Learn More</a>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

</body>
</html>