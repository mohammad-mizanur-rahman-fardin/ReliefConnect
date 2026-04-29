<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>ReliefConnect – My Tasks</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
</style>
</head>
<body class="flex h-screen bg-gray-100 overflow-hidden">

  <!-- Sidebar -->
  <?php include 'volunteer_sidebar.php'; ?>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col overflow-auto">

    <!-- Top Header -->
    <?php include 'volunteer_top_bar.php'; ?>

    <!-- Page Body -->
    <main class="flex-1 p-7 bg-gray-100">

      <!-- Filter Tabs Card -->
      <div class="bg-white rounded-xl border border-gray-200 px-4 py-3 mb-5 flex gap-2">
        <button class="px-5 py-2 rounded-lg bg-sky-500 text-white text-[13px] font-semibold">All Tasks</button>
        <button class="px-5 py-2 rounded-lg border border-gray-300 text-gray-600 text-[13px] font-medium hover:bg-gray-50">Pending</button>
        <button class="px-5 py-2 rounded-lg border border-gray-300 text-gray-600 text-[13px] font-medium hover:bg-gray-50">In Progress</button>
        <button class="px-5 py-2 rounded-lg border border-gray-300 text-gray-600 text-[13px] font-medium hover:bg-gray-50">Completed</button>
      </div>

      <!-- Task 1: Distribute Food Packages -->
      <div class="bg-white rounded-xl border border-gray-200 px-6 py-5 mb-4 flex items-start gap-4">
        <!-- Icon -->
        <div class="mt-0.5 flex-shrink-0">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="12" r="10" stroke="#22c55e" stroke-width="2"/>
            <polyline points="8,12 11,15 16,9" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>

        <!-- Body -->
        <div class="flex-1">
          <div class="text-[15px] font-bold text-gray-900 mb-1">Distribute Food Packages</div>
          <div class="text-gray-500 text-[13px] mb-2.5">Deliver 50 food packages to families in Sector A</div>
          <div class="flex items-center gap-4 text-[12px] text-gray-400">
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Camp Relief Center · Sector A
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Due: 2026-03-19
            </span>
            <span class="px-3 py-0.5 rounded-full bg-red-100 text-red-500 text-[11px] font-semibold">high</span>
          </div>
        </div>

        <!-- Current Status -->
        <div class="flex gap-5 items-start">
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Current Status</div>
            <div class="px-4 py-1.5 rounded-lg border border-gray-300 text-gray-600 text-[12.5px] font-medium text-center">Pending</div>
          </div>

          <!-- Update Status -->
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Update Status:</div>
            <div class="flex flex-col gap-1.5">
              <button class="w-[110px] py-1.5 rounded-lg border border-gray-300 text-gray-600 text-[12px] font-medium">Pending</button>
              <button class="w-[110px] py-1.5 rounded-lg border border-blue-300 text-blue-600 bg-blue-50 text-[12px] font-medium">In Progress</button>
              <button class="w-[110px] py-1.5 rounded-lg bg-green-500 text-white text-[12px] font-semibold">Completed</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Task 2: Medical Supply Delivery -->
      <div class="bg-white rounded-xl border border-gray-200 px-6 py-5 mb-4 flex items-start gap-4">
        <!-- Icon (spinning/loading style) -->
        <div class="mt-0.5 flex-shrink-0">
          <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 2v3M12 19v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M2 12h3M19 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12" stroke-linecap="round"/>
          </svg>
        </div>

        <!-- Body -->
        <div class="flex-1">
          <div class="text-[15px] font-bold text-gray-900 mb-1">Medical Supply Delivery</div>
          <div class="text-gray-500 text-[13px] mb-2.5">Transport medical supplies to temporary clinic</div>
          <div class="flex items-center gap-4 text-[12px] text-gray-400">
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Emergency Medical Tent
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Due: 2026-03-19
            </span>
            <span class="px-3 py-0.5 rounded-full bg-red-100 text-red-400 text-[11px] font-semibold">urgent</span>
          </div>
        </div>

        <!-- Current Status -->
        <div class="flex gap-5 items-start">
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Current Status</div>
            <div class="px-4 py-1.5 rounded-lg border border-green-300 bg-green-50 text-green-600 text-[12.5px] font-semibold text-center">Completed</div>
          </div>

          <!-- Update Status -->
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Update Status:</div>
            <div class="flex flex-col gap-1.5">
              <button class="w-[110px] py-1.5 rounded-lg border border-gray-300 text-gray-600 text-[12px] font-medium">Pending</button>
              <button class="w-[110px] py-1.5 rounded-lg bg-blue-500 text-white text-[12px] font-semibold">In Progress</button>
              <button class="w-[110px] py-1.5 rounded-lg border border-green-300 bg-green-50 text-green-600 text-[12px] font-medium">Completed</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Task 3: Register New Families -->
      <div class="bg-white rounded-xl border border-gray-200 px-6 py-5 mb-4 flex items-start gap-4">
        <!-- Icon (empty circle) -->
        <div class="mt-0.5 flex-shrink-0">
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="12" r="10" stroke="#d1d5db" stroke-width="2"/>
          </svg>
        </div>

        <!-- Body -->
        <div class="flex-1">
          <div class="text-[15px] font-bold text-gray-900 mb-1">Register New Families</div>
          <div class="text-gray-500 text-[13px] mb-2.5">Help register arriving families at intake desk</div>
          <div class="flex items-center gap-4 text-[12px] text-gray-400">
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              Main Registration Office
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="17" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              Due: 2026-03-20
            </span>
            <span class="px-3 py-0.5 rounded-full bg-yellow-100 text-yellow-600 text-[11px] font-semibold">medium</span>
          </div>
        </div>

        <!-- Current Status -->
        <div class="flex gap-5 items-start">
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Current status</div>
            <div class="px-4 py-1.5 rounded-lg border border-blue-300 bg-blue-50 text-blue-600 text-[12.5px] font-semibold text-center">In Progress</div>
          </div>

          <!-- Update Status -->
          <div>
            <div class="text-[12px] text-gray-500 font-medium mb-2">Update Status:</div>
            <div class="flex flex-col gap-1.5">
              <button class="w-[110px] py-1.5 rounded-lg bg-gray-800 text-white text-[12px] font-semibold">Pending</button>
              <button class="w-[110px] py-1.5 rounded-lg border border-blue-300 bg-blue-50 text-blue-600 text-[12px] font-medium">In Progress</button>
              <button class="w-[110px] py-1.5 rounded-lg border border-green-300 bg-green-50 text-green-600 text-[12px] font-medium">Completed</button>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>

</body>
</html>