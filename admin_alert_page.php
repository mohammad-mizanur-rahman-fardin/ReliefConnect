<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Alerts</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .sidebar { width: 200px; min-height: 100vh; background: #111827; flex-shrink: 0; }

    .nav-item {
      display: flex; align-items: center; gap: 12px;
      padding: 11px 16px;
      font-size: 14px; font-weight: 500;
      color: #d1d5db;
      cursor: pointer;
      border-radius: 8px;
      margin: 2px 8px;
      transition: background 0.15s, color 0.15s;
      text-decoration: none;
    }
    .nav-item:hover { background: #1f2937; color: #fff; }
    .nav-item.active { background: #00BFFF; color: #fff; }

    input, textarea, select {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      padding: 11px 14px;
      font-size: 14px;
      color: #374151;
      outline: none;
      background: #fff;
      transition: border-color 0.15s;
      appearance: none;
    }
    input::placeholder, textarea::placeholder { color: #9ca3af; }
    input:focus, textarea:focus, select:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 2px rgba(0,191,255,0.12);
    }

    .select-wrap { position: relative; }
    .select-wrap svg {
      position: absolute; left: 12px; top: 50%; transform: translateY(-50%);
      pointer-events: none; color: #6b7280;
    }
    .select-wrap select { padding-left: 34px; color: #374151; cursor: pointer; }
    .select-wrap select option[value=""] { color: #9ca3af; }

    .alert-card {
      border-left: 4px solid;
      border-radius: 6px;
      padding: 14px 16px;
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      gap: 16px;
    }
    .alert-emergency { border-color: #ef4444; background: #fef2f2; }
    .alert-supply    { border-color: #eab308; background: #fefce8; }
    .alert-announce  { border-color: #3b82f6; background: #eff6ff; }
  </style>
</head>
<body class="bg-gray-100 flex min-h-screen">

<!-- ══════════════════════════════
     SIDEBAR
══════════════════════════════ -->
<?php include 'admin_sidebar.php'; ?>

<!-- ══════════════════════════════
     MAIN CONTENT
══════════════════════════════ -->
<div class="flex-1 flex flex-col min-h-screen">

  <!-- Top bar -->
  <header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between">
    <h1 class="text-2xl font-bold text-gray-900">Alerts</h1>
    <div class="text-right">
      <p class="text-xs text-gray-400">Today's Date</p>
      <p class="text-sm font-bold text-gray-900">March 20, 2026</p>
    </div>
  </header>

  <!-- Page content -->
  <main class="flex-1 p-8 flex flex-col gap-6">

    <!-- ── Create New Alert Card ── -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">

      <!-- Card top row -->
      <div class="flex items-start justify-between mb-6">
        <div>
          <h2 class="text-xl font-bold text-gray-900">Alert System</h2>
          <p class="text-sm text-gray-500 mt-0.5">Send urgent alerts and announcements to all users</p>
        </div>
        <button class="flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-colors">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
          </svg>
          Send Alert
        </button>
      </div>

      <!-- Form -->
      <div class="border border-gray-200 rounded-xl p-6">
        <h3 class="text-base font-bold text-gray-900 mb-5">Create New Alert</h3>

        <!-- Alert Type -->
        <div class="mb-4">
          <label class="block text-sm font-bold text-gray-800 mb-2">Alert Type</label>
          <div class="select-wrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="6 9 12 15 18 9"/>
            </svg>
            <select>
              <option value="" disabled selected>Select an Option</option>
              <option>Emergency</option>
              <option>Supply Update</option>
              <option>Announcement</option>
              <option>Warning</option>
            </select>
          </div>
        </div>

        <!-- Target Audience -->
        <div class="mb-4">
          <label class="block text-sm font-bold text-gray-800 mb-2">Target Audience</label>
          <div class="select-wrap">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <polyline points="6 9 12 15 18 9"/>
            </svg>
            <select>
              <option value="" disabled selected>Select an Option</option>
              <option>All Users</option>
              <option>Camp Managers</option>
              <option>Volunteers</option>
              <option>Affected Persons</option>
              <option>Donors</option>
            </select>
          </div>
        </div>

        <!-- Alert Title -->
        <div class="mb-4">
          <label class="block text-sm font-bold text-gray-800 mb-2">Alert Title</label>
          <input type="text" placeholder="Enter alert title"/>
        </div>

        <!-- Alert Message -->
        <div class="mb-6">
          <label class="block text-sm font-bold text-gray-800 mb-2">Alert Message</label>
          <textarea rows="5" placeholder="Enter detailed alert message..."></textarea>
        </div>

        <!-- Send Button -->
        <button class="w-full flex items-center justify-center gap-2 bg-red-500 hover:bg-red-600 text-white font-semibold text-sm py-3.5 rounded-xl transition-colors">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
          </svg>
          Send Alert Now
        </button>
      </div>
    </div>

    <!-- ── Recent Alerts Card ── -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6">
      <h3 class="text-base font-bold text-gray-900 mb-5">Recent Alerts</h3>

      <div class="flex flex-col gap-3">

        <!-- Emergency alert -->
        <div class="alert-card alert-emergency">
          <div>
            <p class="text-sm font-bold text-red-600 mb-1">Emergency: Severe Weather Warning</p>
            <p class="text-sm text-red-500">Storm approaching eastern camps. All personnel take shelter.</p>
          </div>
          <span class="text-xs text-red-400 font-medium whitespace-nowrap mt-0.5">2 hours ago</span>
        </div>

        <!-- Supply alert -->
        <div class="alert-card alert-supply">
          <div>
            <p class="text-sm font-bold text-yellow-600 mb-1">Supply Update: Medical Kits Restocked</p>
            <p class="text-sm text-yellow-600">Northern camp has received new medical supplies shipment.</p>
          </div>
          <span class="text-xs text-yellow-500 font-medium whitespace-nowrap mt-0.5">5 hours ago</span>
        </div>

        <!-- Announcement alert -->
        <div class="alert-card alert-announce">
          <div>
            <p class="text-sm font-bold text-blue-600 mb-1">Announcement: Volunteer Training Session</p>
            <p class="text-sm text-blue-500">Safety training scheduled for all volunteers tomorrow at 10 AM.</p>
          </div>
          <span class="text-xs text-blue-400 font-medium whitespace-nowrap mt-0.5">1 day ago</span>
        </div>

      </div>
    </div>

  </main>
</div>

</body>
</html>