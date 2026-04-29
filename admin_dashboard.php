<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-gray-100 text-gray-900 flex" style="min-height:100vh;">

  <!-- SIDEBAR (sticky, full viewport height) -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- MAIN CONTENT (scrollable) -->
  <div class="flex-1 flex flex-col overflow-auto">

    <!-- Top Header -->
    <div class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between flex-shrink-0">
      <h1 class="text-2xl font-black text-gray-900">Dashboard</h1>
      <div class="text-right">
        <div class="text-xs text-gray-400">Today's Date</div>
        <div class="text-sm font-bold text-gray-900">March 20, 2026</div>
      </div>
    </div>
    
    <!-- Page Body -->
    <div class="flex-1 px-8 py-7 flex flex-col gap-6">

      <!-- STAT CARDS -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
          <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-0.5">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>+2
            </span>
          </div>
          <div class="text-3xl font-black mb-1">3</div>
          <div class="text-gray-400 text-xs">Total Camps</div>
        </div>

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
          <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center" style="background:#ede9fe">
              <svg class="w-5 h-5 text-violet-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-0.5">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>+1
            </span>
          </div>
          <div class="text-3xl font-black mb-1">2</div>
          <div class="text-gray-400 text-xs">Camp Managers</div>
        </div>

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
          <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center" style="background:#fff7ed">
              <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-0.5">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>+3
            </span>
          </div>
          <div class="text-3xl font-black mb-1">3</div>
          <div class="text-gray-400 text-xs">Pending Approvals</div>
        </div>

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-5">
          <div class="flex items-start justify-between mb-4">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center" style="background:#fef2f2">
              <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
            </div>
            <span class="text-xs font-semibold text-green-500 flex items-center gap-0.5">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>+3
            </span>
          </div>
          <div class="text-3xl font-black mb-1">2</div>
          <div class="text-gray-400 text-xs">Critical Supplies</div>
        </div>

      </div>

      <!-- QUICK ACTIONS -->
      <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
        <h2 class="text-base font-black mb-4">Quick Actions</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">   <!-- Added gap-3 for better spacing -->
          
          <a href="admin_add_camp_manager.php">
            <button class="flex items-center gap-2.5 w-full rounded-xl border px-4 py-3 text-left hover:opacity-80 transition-opacity" 
                    style="border-color:#bae6fd; background:#f0fbff;">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:#e0f7ff">
                <svg class="w-4 h-4" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/>
                </svg>
              </div>
              <span class="text-sm font-bold text-gray-800">Add Manager</span>
            </button>
          </a>
      
          <a href="admin_approvals.php">
            <button class="flex items-center gap-2.5 w-full rounded-xl border px-4 py-3 text-left hover:opacity-80 transition-opacity" 
                    style="border-color:#fed7aa; background:#fff7ed;">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:#ffedd5">
                <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
              </div>
              <span class="text-sm font-bold text-gray-800">Review Approvals</span>
            </button>
          </a>
      
          <a href="admin_add_camp_location.php">
            <button class="flex items-center gap-2.5 w-full rounded-xl border px-4 py-3 text-left hover:opacity-80 transition-opacity" 
                    style="border-color:#bbf7d0; background:#f0fdf4;">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:#dcfce7">
                <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
              </div>
              <span class="text-sm font-bold text-gray-800">Add Location</span>
            </button>
          </a>
      
          <a href="admin_alert_page.php">
            <button class="flex items-center gap-2.5 w-full rounded-xl border px-4 py-3 text-left hover:opacity-80 transition-opacity" 
                    style="border-color:#fecaca; background:#fef2f2;">
              <div class="w-8 h-8 rounded-lg flex items-center justify-center flex-shrink-0" style="background:#fee2e2">
                <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                </svg>
              </div>
              <span class="text-sm font-bold text-gray-800">Send Alert</span>
            </button>
          </a>
        </div>
      </div>

      <!-- CRITICAL SUPPLY SHORTAGES -->
      <div class="rounded-xl border p-6" style="background:#fff5f5; border-color:#fecaca;">
        <div class="flex items-center gap-2 mb-1">
          <svg class="w-5 h-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/></svg>
          <h2 class="text-base font-black text-red-600">Critical Supply Shortages</h2>
        </div>
        <p class="text-red-500 text-xs mb-5">The following items require immediate attention:</p>
        <div class="flex items-center justify-between py-4 border-b border-red-100">
          <div>
            <div class="text-sm font-bold text-gray-900">Medical Kits</div>
            <div class="text-xs text-gray-400 mt-0.5">Eastern Relief Camp</div>
          </div>
          <div class="text-right">
            <div class="text-sm font-black text-red-500">89 units</div>
            <div class="text-xs text-gray-400">Min: 200</div>
          </div>
        </div>
        <div class="flex items-center justify-between pt-4">
          <div>
            <div class="text-sm font-bold text-gray-900">Tents</div>
            <div class="text-xs text-gray-400 mt-0.5">Western Support Hub</div>
          </div>
          <div class="text-right">
            <div class="text-sm font-black text-red-500">45 units</div>
            <div class="text-xs text-gray-400">Min: 100</div>
          </div>
        </div>
      </div>

      <!-- RECENT ACTIVITY -->
      <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
        <h2 class="text-base font-black mb-5">Recent Activity</h2>
        <div class="flex flex-col gap-0">
          <div class="flex items-center gap-4 py-3.5 border-b border-gray-50">
            <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background:#dcfce7">
              <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div>
              <div class="text-sm font-semibold text-gray-800">New volunteer approved</div>
              <div class="text-xs text-gray-400 mt-0.5">2 hours ago</div>
            </div>
          </div>
          <div class="flex items-center gap-4 py-3.5 border-b border-gray-50">
            <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <div class="text-sm font-semibold text-gray-800">New camp location added</div>
              <div class="text-xs text-gray-400 mt-0.5">5 hours ago</div>
            </div>
          </div>
          <div class="flex items-center gap-4 py-3.5">
            <div class="w-10 h-10 rounded-full flex items-center justify-center flex-shrink-0" style="background:#fff7ed">
              <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div>
              <div class="text-sm font-semibold text-gray-800">Supply stock updated</div>
              <div class="text-xs text-gray-400 mt-0.5">8 hours ago</div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
</body>
</html>