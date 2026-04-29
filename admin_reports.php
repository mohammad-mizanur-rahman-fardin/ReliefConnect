<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reports - ReliefConnect Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    .sidebar-link {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 16px; border-radius: 8px;
      font-size: 14px; font-weight: 500; color: #9ca3af;
      cursor: pointer; transition: all 0.15s;
      text-decoration: none;
    }
    .sidebar-link:hover { background: #1f2937; color: #f3f4f6; }
    .sidebar-link.active { background: #00BFFF; color: white; }
    select { outline: none; }
    select:focus { border-color: #00BFFF; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }
  </style>
</head>
<body class="bg-gray-100 text-gray-900 flex" style="min-height:100vh;">

  <!-- SIDEBAR -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- MAIN CONTENT -->
  <div class="flex-1 flex flex-col overflow-auto">

    <!-- Top Header -->
    <div class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between flex-shrink-0">
      <h1 class="text-2xl font-black text-gray-900">Reports</h1>
      <div class="text-right">
        <div class="text-xs text-gray-400">Today's Date</div>
        <div class="text-sm font-bold text-gray-900">March 20, 2026</div>
      </div>
    </div>

    <!-- Page Body -->
    <div class="flex-1 px-8 py-7">

      <!-- Section Header -->
      <div class="mb-6">
        <h2 class="text-xl font-black text-gray-900">Reports & Analytics</h2>
        <p class="text-gray-400 text-sm mt-0.5">Generate and download comprehensive reports</p>
      </div>

      <!-- 2x2 Report Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <!-- Card 1: Aid Distribution Report -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-base font-black text-gray-900">Aid Distribution Report</h3>
              <p class="text-gray-400 text-xs mt-0.5">Complete overview of aid distribution across all camps</p>
            </div>
          </div>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500">Period:</span>
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs text-gray-500 bg-white w-36">
              <option value="" disabled selected></option>
              <option>Last 7 days</option>
              <option>Last 30 days</option>
              <option>Last 3 months</option>
              <option>Last 6 months</option>
              <option>This year</option>
            </select>
          </div>
          <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2" style="background:#00BFFF">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Generate PDF Report
          </button>
        </div>

        <!-- Card 2: Volunteer Activity Report -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#dcfce7">
              <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-base font-black text-gray-900">Volunteer Activity Report</h3>
              <p class="text-gray-400 text-xs mt-0.5">Detailed volunteer participation and task completion</p>
            </div>
          </div>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500">Period:</span>
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs text-gray-500 bg-white w-36">
              <option value="" disabled selected></option>
              <option>Last 7 days</option>
              <option>Last 30 days</option>
              <option>Last 3 months</option>
              <option>Last 6 months</option>
              <option>This year</option>
            </select>
          </div>
          <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2" style="background:#22c55e">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Generate PDF Report
          </button>
        </div>

        <!-- Card 3: Supply Inventory Report -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#e0f7ff">
              <svg class="w-5 h-5" style="color:#3b82f6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
              </svg>
            </div>
            <div>
              <h3 class="text-base font-black text-gray-900">Supply Inventory Report</h3>
              <p class="text-gray-400 text-xs mt-0.5">Current stock levels and consumption patterns</p>
            </div>
          </div>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500">Format:</span>
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs text-gray-500 bg-white w-24">
              <option value="" disabled selected></option>
              <option>PDF</option>
              <option>Excel</option>
              <option>CSV</option>
            </select>
          </div>
          <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2" style="background:#3b82f6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Generate Report
          </button>
        </div>

        <!-- Card 4: Campaign Performance Report -->
        <div class="bg-white rounded-xl border border-gray-100 shadow-sm p-6">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-11 h-11 rounded-xl flex items-center justify-center flex-shrink-0" style="background:#f3e8ff">
              <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
            </div>
            <div>
              <h3 class="text-base font-black text-gray-900">Campaign Performance Report</h3>
              <p class="text-gray-400 text-xs mt-0.5">Fundraising and campaign effectiveness metrics</p>
            </div>
          </div>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500">Campaign:</span>
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 text-xs text-gray-500 bg-white w-36">
              <option value="" disabled selected></option>
              <option>Flood Relief</option>
              <option>Medical Support</option>
              <option>Community Rebuild</option>
              <option>All Campaigns</option>
            </select>
          </div>
          <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity flex items-center justify-center gap-2" style="background:linear-gradient(90deg,#a855f7,#ec4899)">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Generate PDF Report
          </button>
        </div>

      </div>
    </div>
  </div>

</body>
</html>