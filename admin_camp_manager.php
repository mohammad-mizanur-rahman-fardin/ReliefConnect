<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Camp Managers</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .sidebar { width: 260px; min-height: 100vh; background: #111827; flex-shrink: 0; }

    .nav-item {
      display: flex; align-items: center; gap: 12px;
      padding: 11px 20px;
      font-size: 14px; font-weight: 500;
      color: #d1d5db;
      cursor: pointer;
      border-radius: 8px;
      margin: 2px 12px;
      transition: background 0.15s, color 0.15s;
      text-decoration: none;
    }
    .nav-item:hover { background: #1f2937; color: #fff; }
    .nav-item.active { background: #00BFFF; color: #fff; }
    .nav-item.active svg { color: #fff; }

    .badge-active   { background: #dcfce7; color: #16a34a; border: 1px solid #bbf7d0; }
    .badge-inactive { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }

    .action-btn {
      padding: 6px;
      border-radius: 6px;
      border: none;
      background: transparent;
      cursor: pointer;
      transition: background 0.15s;
    }
    .action-btn:hover { background: #f1f5f9; }

    table { border-collapse: collapse; width: 100%; }
    th { font-size: 13px; font-weight: 600; color: #6b7280; padding: 14px 16px; text-align: left; border-bottom: 1px solid #e5e7eb; }
    td { font-size: 14px; color: #111827; padding: 20px 16px; border-bottom: 1px solid #f1f5f9; vertical-align: middle; }
    tr:last-child td { border-bottom: none; }
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
    <h1 class="text-2xl font-black text-gray-900">Camp Managers</h1>
    <div class="text-right">
      <p class="text-xs text-gray-400">Today's Date</p>
      <p class="text-sm font-bold text-gray-900">March 20, 2026</p>
    </div>
  </header>

  <!-- Page content -->
  <main class="flex-1 p-8">

    <!-- Section header -->
    <div class="flex items-start justify-between mb-6">
      <div>
        <h2 class="text-2xl font-bold text-gray-900">Camp Managers</h2>
        <p class="text-sm text-gray-500 mt-1">Manage camp manager accounts and assignments</p>
      </div>
      <a href="admin_add_camp_manager.php">
        <button style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-3 rounded-xl hover:opacity-90 transition-opacity">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/>
          </svg>
          Add Manager
        </button>
      </a>
    </div>

    <!-- Table card -->
    <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
      <table>
        <thead>
          <tr>
            <th style="width:200px;">Name</th>
            <th style="width:260px;">Contact</th>
            <th>Camp Assigned</th>
            <th style="width:130px;">Status</th>
            <th style="width:140px;">Joined</th>
            <th style="width:100px; text-align:right;">Actions</th>
          </tr>
        </thead>
        <tbody>

          <!-- Row 1: Michael Chen -->
          <tr>
            <td class="font-semibold text-gray-900">Michael Chen</td>
            <td>
              <p class="text-sm text-gray-500">michael.c@reliefconnect.org</p>
              <p class="text-sm text-gray-500">+1 234-567-8902</p>
            </td>
            <td class="text-gray-600">Northern Emergency Center</td>
            <td>
              <span class="badge-active text-xs font-semibold px-3 py-1 rounded-full inline-block">active</span>
            </td>
            <td class="text-gray-500 text-sm">2026-02-10</td>
            <td>
              <div class="flex items-center justify-end gap-2">
                <button class="action-btn" title="Edit">
                  <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                  </svg>
                </button>
                <button class="action-btn" title="Delete">
                  <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="3 6 5 6 21 6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 11v6M14 11v6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/>
                  </svg>
                </button>
              </div>
            </td>
          </tr>

          <!-- Row 2: Emily Rodriguez -->
          <tr>
            <td class="font-semibold text-gray-900">Emily Rodriguez</td>
            <td>
              <p class="text-sm text-gray-500">emily.r@reliefconnect.org</p>
              <p class="text-sm text-gray-500">+1 234-567-8903</p>
            </td>
            <td class="text-gray-600">Western Support Hub</td>
            <td>
              <span class="badge-inactive text-xs font-semibold px-3 py-1 rounded-full inline-block">inactive</span>
            </td>
            <td class="text-gray-500 text-sm">2025-12-05</td>
            <td>
              <div class="flex items-center justify-end gap-2">
                <button class="action-btn" title="Edit">
                  <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                  </svg>
                </button>
                <button class="action-btn" title="Delete">
                  <svg class="w-4 h-4 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="3 6 5 6 21 6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 6l-1 14a2 2 0 01-2 2H8a2 2 0 01-2-2L5 6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 11v6M14 11v6"/>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6V4a1 1 0 011-1h4a1 1 0 011 1v2"/>
                  </svg>
                </button>
              </div>
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </main>
</div>

</body>
</html>