<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Our Camps</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    /* Progress bar base */
    .bar-track { height: 6px; border-radius: 9999px; background: #e5e7eb; overflow: hidden; }
    .bar-fill  { height: 100%; border-radius: 9999px; }

    /* stat colours */
    .text-cyan   { color: #06b6d4; }
    .text-green2 { color: #22c55e; }
    .text-violet { color: #a855f7; }
    .text-orange { color: #f97316; }

    /* supply % colours */
    .pct-green  { color: #22c55e; }
    .pct-yellow { color: #eab308; }
    .pct-orange { color: #f97316; }
    .pct-red    { color: #ef4444; }

    /* badge */
    .badge-active  { background:#dcfce7; color:#16a34a; }
    .badge-standby { background:#fef9c3; color:#ca8a04; }
  </style>
</head>
<body class="bg-white text-gray-800">

<!-- ───────────────────────── NAV ───────────────────────── -->
<?php include 'navbar.php'; ?>

<!-- ───────────────────────── HERO ───────────────────────── -->
<section class="bg-[#00BFFF] text-white text-center py-14 px-4">
  <h1 class="text-3xl font-bold mb-3">Our Relief Camps</h1>
  <p class="text-sm max-w-lg mx-auto opacity-90">
    Strategic relief facilities providing essential support and resources to disaster-affected communities.
  </p>
</section>

<!-- ───────────────────────── STATS ───────────────────────── -->
<section class="py-10 px-6">
  <div class="max-w-5xl mx-auto grid grid-cols-4 gap-4">
    <!-- Total Camps -->
    <div class="border border-gray-200 rounded-xl text-center py-6 px-4 shadow-sm">
      <p class="text-3xl font-bold text-cyan">5</p>
      <p class="text-sm text-gray-500 mt-1">Total Camps</p>
    </div>
    <!-- People Served -->
    <div class="border border-gray-200 rounded-xl text-center py-6 px-4 shadow-sm">
      <p class="text-3xl font-bold text-green2">1,248</p>
      <p class="text-sm text-gray-500 mt-1">People Served</p>
    </div>
    <!-- Active Volunteers -->
    <div class="border border-gray-200 rounded-xl text-center py-6 px-4 shadow-sm">
      <p class="text-3xl font-bold text-violet">175</p>
      <p class="text-sm text-gray-500 mt-1">Active Volunteers</p>
    </div>
    <!-- Total Capacity -->
    <div class="border border-gray-200 rounded-xl text-center py-6 px-4 shadow-sm">
      <p class="text-3xl font-bold text-orange">2,200</p>
      <p class="text-sm text-gray-500 mt-1">Total Capacity</p>
    </div>
  </div>
</section>

<!-- ───────────────────────── CAMPS ───────────────────────── -->
<section class="py-4 px-6 pb-16">
  <div class="max-w-5xl mx-auto">
    <h2 class="text-xl font-bold mb-6">Active Relief Facilities</h2>
    <div class="flex flex-col gap-5">

      <!-- ── Camp Card template (repeated 5×) ── -->

      <!-- 1. Coastal Relief Camp -->
      <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex items-center gap-2 mb-1">
          <h3 class="font-bold text-lg">Coastal Relief Camp – Bay Area</h3>
          <span class="badge-active text-xs font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="5"/></svg>Active
          </span>
        </div>
        <p class="text-xs text-gray-500 flex items-center gap-1 mb-1">
          <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Bay City Coastal Zone
        </p>
        <p class="text-sm text-gray-600 mb-2">Primary relief camp serving coastal communities affected by recent flooding.</p>
        <p class="text-xs text-gray-400 mb-4">Established: March 15, 2026 • Camp Manager: Sarah Johnson</p>

        <!-- metrics row -->
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div>
            <p class="text-xs text-gray-400 flex items-center gap-1 mb-0.5">
              <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20H7a2 2 0 01-2-2V9l5-5h7a2 2 0 012 2v12a2 2 0 01-2 2z"/></svg>
              Occupancy
            </p>
            <p class="font-bold text-sm">342/500</p>
            <p class="text-xs text-gray-400">68% capacity</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 flex items-center gap-1 mb-0.5">
              <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20H7a2 2 0 01-2-2V7l5-5h7a2 2 0 012 2v13a2 2 0 01-2 2z"/></svg>
              Volunteers
            </p>
            <p class="font-bold text-sm">45</p>
            <p class="text-xs text-gray-400">Active on site</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 flex items-center gap-1 mb-0.5">
              <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/></svg>
              Food Supplies
            </p>
            <p class="font-bold text-sm pct-green">85%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 flex items-center gap-1 mb-0.5">
              <svg class="w-3.5 h-3.5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2l1.5 4h4l-3.3 2.4L15.5 13 12 10.5 8.5 13l1.3-4.6L6.5 6h4z"/></svg>
              Medical Supplies
            </p>
            <p class="font-bold text-sm pct-yellow">78%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
        </div>

        <!-- bars -->
        <div class="grid grid-cols-4 gap-4">
          <div><p class="text-xs text-gray-400 mb-1">Food</p><div class="bar-track"><div class="bar-fill bg-green-400" style="width:85%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Water</p><div class="bar-track"><div class="bar-fill bg-blue-400" style="width:80%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Medical</p><div class="bar-track"><div class="bar-fill bg-red-400" style="width:78%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Shelter</p><div class="bar-track"><div class="bar-fill bg-purple-400" style="width:68%"></div></div></div>
        </div>
      </div>

      <!-- 2. Mountain Region -->
      <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex items-center gap-2 mb-1">
          <h3 class="font-bold text-lg">Mountain Region Emergency Center</h3>
          <span class="badge-active text-xs font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="5"/></svg>Active
          </span>
        </div>
        <p class="text-xs text-gray-500 flex items-center gap-1 mb-1">
          <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Highland Valley
        </p>
        <p class="text-sm text-gray-600 mb-2">Supporting communities impacted by landslides and infrastructure damage.</p>
        <p class="text-xs text-gray-400 mb-4">Established: March 18, 2026 • Camp Manager: Michael Chen</p>
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Occupancy</p>
            <p class="font-bold text-sm">298/350</p>
            <p class="text-xs text-gray-400">85% capacity</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Volunteers</p>
            <p class="font-bold text-sm">32</p>
            <p class="text-xs text-gray-400">Active on site</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Food Supplies</p>
            <p class="font-bold text-sm pct-yellow">72%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Medical Supplies</p>
            <p class="font-bold text-sm pct-yellow">65%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
          <div><p class="text-xs text-gray-400 mb-1">Food</p><div class="bar-track"><div class="bar-fill bg-green-400" style="width:72%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Water</p><div class="bar-track"><div class="bar-fill bg-blue-400" style="width:75%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Medical</p><div class="bar-track"><div class="bar-fill bg-red-400" style="width:65%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Shelter</p><div class="bar-track"><div class="bar-fill bg-purple-400" style="width:85%"></div></div></div>
        </div>
      </div>

      <!-- 3. Central City -->
      <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex items-center gap-2 mb-1">
          <h3 class="font-bold text-lg">Central City Disaster Response Hub</h3>
          <span class="badge-active text-xs font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="5"/></svg>Active
          </span>
        </div>
        <p class="text-xs text-gray-500 flex items-center gap-1 mb-1">
          <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Downtown Metro Area
        </p>
        <p class="text-sm text-gray-600 mb-2">Large-scale relief facility coordinating urban disaster response efforts.</p>
        <p class="text-xs text-gray-400 mb-4">Established: March 12, 2026 • Camp Manager: Emily Rodriguez</p>
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Occupancy</p>
            <p class="font-bold text-sm">521/750</p>
            <p class="text-xs text-gray-400">69% capacity</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Volunteers</p>
            <p class="font-bold text-sm">68</p>
            <p class="text-xs text-gray-400">Active on site</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Food Supplies</p>
            <p class="font-bold text-sm pct-green">90%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Medical Supplies</p>
            <p class="font-bold text-sm pct-green">82%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
          <div><p class="text-xs text-gray-400 mb-1">Food</p><div class="bar-track"><div class="bar-fill bg-green-400" style="width:90%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Water</p><div class="bar-track"><div class="bar-fill bg-blue-400" style="width:88%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Medical</p><div class="bar-track"><div class="bar-fill bg-red-400" style="width:82%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Shelter</p><div class="bar-track"><div class="bar-fill bg-purple-400" style="width:69%"></div></div></div>
        </div>
      </div>

      <!-- 4. Northern Plains -->
      <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex items-center gap-2 mb-1">
          <h3 class="font-bold text-lg">Northern Plains Relief Station</h3>
          <span class="badge-active text-xs font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="5"/></svg>Active
          </span>
        </div>
        <p class="text-xs text-gray-500 flex items-center gap-1 mb-1">
          <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          Prairie Hills
        </p>
        <p class="text-sm text-gray-600 mb-2">Serving rural communities affected by severe weather events.</p>
        <p class="text-xs text-gray-400 mb-4">Established: March 22, 2026 • Camp Manager: David Thompson</p>
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Occupancy</p>
            <p class="font-bold text-sm">87/200</p>
            <p class="text-xs text-gray-400">44% capacity</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Volunteers</p>
            <p class="font-bold text-sm">18</p>
            <p class="text-xs text-gray-400">Active on site</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Food Supplies</p>
            <p class="font-bold text-sm pct-yellow">68%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Medical Supplies</p>
            <p class="font-bold text-sm pct-orange">55%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
          <div><p class="text-xs text-gray-400 mb-1">Food</p><div class="bar-track"><div class="bar-fill bg-green-400" style="width:68%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Water</p><div class="bar-track"><div class="bar-fill bg-blue-400" style="width:60%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Medical</p><div class="bar-track"><div class="bar-fill bg-red-400" style="width:55%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Shelter</p><div class="bar-track"><div class="bar-fill bg-purple-400" style="width:44%"></div></div></div>
        </div>
      </div>

      <!-- 5. Riverside Emergency Camp -->
      <div class="border border-gray-200 rounded-xl p-6 shadow-sm">
        <div class="flex items-center gap-2 mb-1">
          <h3 class="font-bold text-lg">Riverside Emergency Camp</h3>
          <span class="badge-standby text-xs font-semibold px-2 py-0.5 rounded-full flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><circle cx="10" cy="10" r="5"/></svg>Standby
          </span>
        </div>
        <p class="text-xs text-gray-500 flex items-center gap-1 mb-1">
          <svg class="w-3.5 h-3.5 text-cyan-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/><circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/></svg>
          River Junction
        </p>
        <p class="text-sm text-gray-600 mb-2">Fully prepared standby facility ready for rapid deployment.</p>
        <p class="text-xs text-gray-400 mb-4">Established: March 25, 2026</p>
        <div class="grid grid-cols-4 gap-4 mb-4">
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Occupancy</p>
            <p class="font-bold text-sm">0/400</p>
            <p class="text-xs text-gray-400">&nbsp;</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Volunteers</p>
            <p class="font-bold text-sm">12</p>
            <p class="text-xs text-gray-400">Active on site</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Food Supplies</p>
            <p class="font-bold text-sm pct-green">100%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
          <div>
            <p class="text-xs text-gray-400 mb-0.5">Medical Supplies</p>
            <p class="font-bold text-sm pct-green">100%</p>
            <p class="text-xs text-gray-400">Stock level</p>
          </div>
        </div>
        <div class="grid grid-cols-4 gap-4">
          <div><p class="text-xs text-gray-400 mb-1">Food</p><div class="bar-track"><div class="bar-fill bg-green-400" style="width:100%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Water</p><div class="bar-track"><div class="bar-fill bg-blue-400" style="width:100%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Medical</p><div class="bar-track"><div class="bar-fill bg-red-400" style="width:100%"></div></div></div>
          <div><p class="text-xs text-gray-400 mb-1">Shelter</p><div class="bar-track"><div class="bar-fill bg-purple-400" style="width:100%"></div></div></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ───────────────────────── FOOTER CTA ───────────────────────── -->
<!-- FOOTER -->
<?php include 'footer.php'; ?>

</body>
</html>