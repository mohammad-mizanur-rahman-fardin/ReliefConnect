<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>ReliefConnect – Report Issues</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
  select { appearance: none; -webkit-appearance: none; }
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
    <main class="flex-1 p-7 bg-gray-100 overflow-auto">

      <!-- Report Field Issue Card -->
      <div class="bg-white rounded-xl border border-gray-200 px-8 py-6 mb-5">
        <h2 class="text-[17px] font-bold text-gray-900 mb-5">Report Field Issue</h2>

        <!-- Issue Title -->
        <div class="mb-4">
          <label class="block text-[13px] font-semibold text-blue-900 mb-1.5">Issue Title</label>
          <input
            type="text"
            placeholder="Brief title of the issue"
            class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-[13.5px] text-gray-400 placeholder-gray-300 focus:outline-none focus:border-gray-300 bg-white"
          />
        </div>

        <!-- Description -->
        <div class="mb-4">
          <label class="block text-[13px] font-semibold text-blue-900 mb-1.5">Description</label>
          <textarea
            placeholder="Detailed description of the issue"
            rows="5"
            class="w-full border border-gray-200 rounded-lg px-4 py-3 text-[13.5px] text-gray-400 placeholder-gray-300 focus:outline-none focus:border-gray-300 bg-white resize-none"
          ></textarea>
        </div>

        <!-- Priority Level -->
        <div class="mb-6">
          <label class="block text-[13px] font-semibold text-blue-900 mb-1.5">Priority Level</label>
          <div class="relative">
            <div class="flex items-center border-2 border-gray-800 rounded-lg px-4 py-2.5 bg-white cursor-pointer">
              <svg class="w-4 h-4 text-gray-700 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <polyline points="6 9 12 15 18 9"/>
              </svg>
              <span class="text-gray-500 text-[13.5px]">Select an Option</span>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center">
          <button class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white font-semibold text-[14px] px-16 py-3 rounded-lg transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
              <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
            </svg>
            Submit Report
          </button>
        </div>
      </div>

      <!-- Your Reported Issues Card -->
      <div class="bg-white rounded-xl border border-gray-200 px-8 py-6">
        <h2 class="text-[17px] font-bold text-gray-900 mb-5">Your Reported Issues</h2>

        <!-- Issue 1: Medicine Shortage -->
        <div class="flex items-start justify-between border-l-4 border-red-400 pl-4 py-1 mb-6">
          <div>
            <div class="text-[14px] font-bold text-gray-900 mb-1">Medicine Shortage</div>
            <div class="text-gray-500 text-[13px] mb-1.5">Running low on antibiotics in medical tent</div>
            <div class="flex items-center gap-1 text-gray-400 text-[12px]">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
              </svg>
              Reported: 2026-03-19 10:30 AM
            </div>
          </div>
          <div class="flex items-center gap-2 ml-4 flex-shrink-0">
            <span class="px-3 py-1 rounded-full bg-red-100 text-red-400 text-[11px] font-semibold">urgent</span>
            <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-600 text-[11px] font-semibold">open</span>
          </div>
        </div>

        <!-- Issue 2: Damaged Shelter -->
        <div class="flex items-start justify-between border-l-4 border-red-400 pl-4 py-1">
          <div>
            <div class="text-[14px] font-bold text-gray-900 mb-1">Damaged Shelter</div>
            <div class="text-gray-500 text-[13px] mb-1.5">Shelter #45 has roof damage, needs repair</div>
            <div class="flex items-center gap-1 text-gray-400 text-[12px]">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
              </svg>
              Reported: 2026-03-18 02:15 PM
            </div>
          </div>
          <div class="flex items-center gap-2 ml-4 flex-shrink-0">
            <span class="px-3 py-1 rounded-full bg-red-100 text-red-400 text-[11px] font-semibold">high</span>
            <span class="px-3 py-1 rounded-full bg-green-100 text-green-600 text-[11px] font-semibold">resolved</span>
          </div>
        </div>

      </div>

    </main>
  </div>

</body>
</html>