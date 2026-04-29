<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Camp Locations</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>* { font-family: 'Inter', sans-serif; box-sizing: border-box; }</style>
</head>
<body class="bg-white">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- Main -->
  <main class="flex-1 bg-white flex flex-col">

    <!-- Top bar -->
    <div class="flex items-center justify-between px-8 py-4 border-b border-gray-200">
      <h1 class="text-2xl font-black text-gray-900">Camp Locations</h1>
      <div class="text-right">
        <div class="text-xs text-gray-500">Today's Date</div>
        <div class="text-sm font-bold text-gray-800">March 20, 2026</div>
      </div>
    </div>

    <!-- Content -->
    <div class="flex-1 bg-gray-50 px-8 py-8">

      <!-- Section header -->
      <div class="flex items-start justify-between mb-6">
        <div>
          <h2 class="text-xl font-bold text-gray-900">Camp Locations</h2>
          <p class="text-sm text-gray-500 mt-0.5">Manage disaster relief camp locations and capacity</p>
        </div>
        <a href="admin_add_camp_location.php">
          <button class="flex items-center gap-2 bg-cyan-500 hover:bg-cyan-600 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
            Add Location
          </button>
        </a>
      </div>

      <!-- Cards grid -->
      <div class="grid grid-cols-2 gap-5">

        <!-- Eastern Relief Camp -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">
          <div class="flex items-start justify-between mb-3">
            <h3 class="text-base font-bold text-gray-900">Eastern Relief Camp</h3>
            <div class="flex items-center gap-2 shrink-0 ml-3">
              <button class="text-cyan-500 hover:text-cyan-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
              </button>
              <button class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
              </button>
            </div>
          </div>
          <div class="flex items-center gap-1.5 text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-cyan-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            123 Main St, Eastern Province
          </div>
          <span class="inline-block text-xs font-medium text-green-600 bg-green-100 border border-green-200 px-3 py-0.5 rounded-full mb-4">active</span>
          <div class="space-y-1.5 mb-4">
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Category:</span>
              <span class="font-bold text-gray-900">Flood Relief</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Capacity:</span>
              <span class="font-bold text-gray-900">500 people</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Occupancy:</span>
              <span class="font-bold text-gray-900">342 / 500</span>
            </div>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-green-500 h-2.5 rounded-full" style="width: 68.4%"></div>
          </div>
        </div>

        <!-- Northern Emergency Center -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">
          <div class="flex items-start justify-between mb-3">
            <h3 class="text-base font-bold text-gray-900">Northern Emergency Center</h3>
            <div class="flex items-center gap-2 shrink-0 ml-3">
              <button class="text-cyan-500 hover:text-cyan-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
              </button>
              <button class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
              </button>
            </div>
          </div>
          <div class="flex items-center gap-1.5 text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-cyan-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            456 North Ave, Northern Region
          </div>
          <span class="inline-block text-xs font-medium text-green-600 bg-green-100 border border-green-200 px-3 py-0.5 rounded-full mb-4">active</span>
          <div class="space-y-1.5 mb-4">
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Category:</span>
              <span class="font-bold text-gray-900">Earthquake</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Capacity:</span>
              <span class="font-bold text-gray-900">800 people</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Occupancy:</span>
              <span class="font-bold text-gray-900">689 / 800</span>
            </div>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-yellow-400 h-2.5 rounded-full" style="width: 86.1%"></div>
          </div>
        </div>

        <!-- Western Support Hub -->
        <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-5">
          <div class="flex items-start justify-between mb-3">
            <h3 class="text-base font-bold text-gray-900">Western Support Hub</h3>
            <div class="flex items-center gap-2 shrink-0 ml-3">
              <button class="text-cyan-500 hover:text-cyan-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
              </button>
              <button class="text-red-400 hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
              </button>
            </div>
          </div>
          <div class="flex items-center gap-1.5 text-sm text-gray-500 mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-cyan-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            789 West Blvd, Western Villages
          </div>
          <span class="inline-block text-xs font-medium text-green-600 bg-green-100 border border-green-200 px-3 py-0.5 rounded-full mb-4">active</span>
          <div class="space-y-1.5 mb-4">
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Category:</span>
              <span class="font-bold text-gray-900">Shelter</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Capacity:</span>
              <span class="font-bold text-gray-900">350 people</span>
            </div>
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Occupancy:</span>
              <span class="font-bold text-gray-900">156 / 350</span>
            </div>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-green-500 h-2.5 rounded-full" style="width: 44.6%"></div>
          </div>
        </div>

      </div>
    </div>
  </main>
</div>

</body>
</html>