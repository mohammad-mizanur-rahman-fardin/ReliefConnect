<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Volunteer Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * { font-family: 'Inter', sans-serif; }
    body { background: #f3f4f6; }
  </style>
</head>
<body class="flex h-screen overflow-hidden">

  <!-- Sidebar -->
  <?php include 'volunteer_sidebar.php'; ?>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col overflow-y-auto">

    <!-- Top Header -->
    <?php include 'volunteer_top_bar.php'; ?>

    <!-- Body -->
    <main class="flex-1 p-8 space-y-6">

      <!-- Stat Cards -->
      <div class="grid grid-cols-4 gap-5">

        <!-- Active Tasks -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex flex-col items-center gap-3">
          <div class="w-14 h-14 rounded-2xl bg-blue-500 flex items-center justify-center text-white text-2xl font-bold">3</div>
          <div class="text-gray-500 text-sm text-center">Active Tasks</div>
        </div>

        <!-- Completed Today -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex flex-col items-center gap-3">
          <div class="w-14 h-14 rounded-2xl bg-green-500 flex items-center justify-center text-white text-2xl font-bold">1</div>
          <div class="text-gray-500 text-sm text-center">Completed Today</div>
        </div>

        <!-- Supplies Delivered -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex flex-col items-center gap-3">
          <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-white text-2xl font-bold">2</div>
          <div class="text-gray-500 text-sm text-center">Supplies Delivered</div>
        </div>

        <!-- Open Issues -->
        <div class="bg-white rounded-2xl shadow-sm p-6 flex flex-col items-center gap-3">
          <div class="w-14 h-14 rounded-2xl bg-red-500 flex items-center justify-center text-white text-2xl font-bold">1</div>
          <div class="text-gray-500 text-sm text-center">Open Issues</div>
        </div>

      </div>

      <!-- Quick Actions -->
      <div class="bg-white rounded-2xl shadow-sm p-6">
        <h2 class="text-base font-semibold text-gray-900 mb-4">Quick Actions</h2>
        <div class="grid grid-cols-4 gap-4">

        <!-- View Tasks -->
        <a href="volunteer_my_tasks.php" class="flex flex-col items-start gap-2 bg-blue-50 border border-blue-100 rounded-xl p-4 hover:bg-blue-100 transition-colors">
          <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
          </svg>
          <span class="text-sm font-semibold text-gray-800">View Tasks</span>
        </a>
        
        <!-- Record Supply -->
        <a href="volunteer_supply_records.php" class="flex flex-col items-start gap-2 bg-blue-50 border border-blue-100 rounded-xl p-4 hover:bg-blue-100 transition-colors">
          <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
          </svg>
          <span class="text-sm font-semibold text-gray-800">Record Supply</span>
        </a>
        
        <!-- Report Issue -->
        <a href="volunteer_report_issues.php" class="flex flex-col items-start gap-2 bg-red-50 border border-red-100 rounded-xl p-4 hover:bg-red-100 transition-colors">
          <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
          </svg>
          <span class="text-sm font-semibold text-gray-800">Report Issue</span>
        </a>
        
        <!-- Chat Manager -->
        <a href="volunteer_chat.php" class="flex flex-col items-start gap-2 bg-green-50 border border-green-100 rounded-xl p-4 hover:bg-green-100 transition-colors">
          <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
          </svg>
          <span class="text-sm font-semibold text-gray-800">Chat Manager</span>
        </a>

        </div>  
      </div>

      <!-- Today's Priority Tasks -->
      <div class="bg-white rounded-2xl shadow-sm p-6">
        <h2 class="text-base font-semibold text-gray-900 mb-4">Today's Priority Tasks</h2>
        <div class="space-y-3">

          <!-- Task 1 -->
          <div class="flex items-center justify-between py-3 border-b border-gray-100">
            <div class="flex items-center gap-4">
              <div class="w-6 h-6 flex items-center justify-center text-cyan-400 flex-shrink-0">
                <!-- Spinner icon (in-progress) -->
                <svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                </svg>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-800">Distribute Food Packages</div>
                <div class="text-xs text-gray-400 mt-0.5">Camp Relief Center - Sector A</div>
              </div>
            </div>
            <span class="bg-red-100 text-red-500 text-xs font-semibold px-3 py-1 rounded-full">high</span>
          </div>

          <!-- Task 2 -->
          <div class="flex items-center justify-between py-3">
            <div class="flex items-center gap-4">
              <div class="w-6 h-6 flex items-center justify-center flex-shrink-0">
                <div class="w-5 h-5 rounded-full border-2 border-gray-300"></div>
              </div>
              <div>
                <div class="text-sm font-semibold text-gray-800">Medical Supply Delivery</div>
                <div class="text-xs text-gray-400 mt-0.5">Emergency Medical Tent</div>
              </div>
            </div>
            <span class="bg-red-100 text-red-400 text-xs font-semibold px-3 py-1 rounded-full">urgent</span>
          </div>

        </div>
      </div>

    </main>
  </div>

</body>
</html>