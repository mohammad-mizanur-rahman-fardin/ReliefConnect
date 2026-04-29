<?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<style>
  * { font-family: 'Inter', sans-serif; }
  .sidebar-link {
    display: flex; align-items: center; gap: 10px;
    padding: 10px 16px; border-radius: 8px;
    font-size: 14px; font-weight: 500; color: #9ca3af;
    cursor: pointer; transition: all 0.15s;
    text-decoration: none;
  }
  .sidebar-link2 {
    display: flex; align-items: center; gap: 10px;
    padding: 0px 16px; border-radius: 8px;
    padding-top: 3px;
    font-size: 14px; font-weight: 500; color: #9ca3af;
    cursor: pointer; transition: all 0.15s;
    text-decoration: none;
  }
  .sidebar-link:hover { background: #1f2937; color: #f3f4f6; }
  .sidebar-link.active { background: #00BFFF; color: white; }
  .sidebar-link2.active { background: #00BFFF; color: black; }
</style>

<aside class="w-52 bg-black flex-shrink-0 flex flex-col sticky top-0 h-screen overflow-y-auto">
  <!-- Logo -->
  <div class="px-5 pt-5 pb-4 border-b border-gray-800">
    <div class="text-lg font-black mb-0.5">
      <span style="color:#00BFFF">Relief</span><span class="text-white">Connect</span>
    </div>
    <div class="text-gray-500 text-xs">Volunteer Portal</div>
  </div>

  <a href="volunteer_profile.php" class="sidebar-link2 <?php echo ($current_page == 'volunteer_profile.php') ? 'active' : ''; ?>">
    <!-- User Info -->
    <div class="px-2 py-2 w-[100%] border-b pb-3 border-gray-800 flex items-center gap-3">
      <div class="w-10 h-10 rounded-full bg-cyan-500 flex items-center justify-center flex-shrink-0">
        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
        </svg>
      </div>
      <div>
        <div class="text-white text-sm font-semibold leading-tight">John Volunteer</div>
        <div class="text-xs <?php echo ($current_page == 'volunteer_profile.php') ? 'text-black' : 'text-gray-400'; ?>">Active Status</div>
      </div>
    </div>
  </a>
  
  <!-- Nav Links -->
  <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
    <a href="volunteer_dashboard.php" class="sidebar-link <?php echo ($current_page == 'volunteer_dashboard.php') ? 'active' : ''; ?>">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
          <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
        </svg>
        Overview
    </a>
    <a href="volunteer_my_tasks.php" class="sidebar-link <?php echo ($current_page == 'volunteer_my_tasks.php') ? 'active' : ''; ?>">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
        </svg>
        My Tasks
    </a>
    <a href="volunteer_supply_records.php" class="sidebar-link <?php echo ($current_page == 'volunteer_supply_records.php') ? 'active' : ''; ?>">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
        </svg>
        Supply Records
    </a>
    <a href="volunteer_report_issues.php" class="sidebar-link <?php echo ($current_page == 'volunteer_report_issues.php') ? 'active' : ''; ?>">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
        </svg>
        Report Issues
    </a>
    <a href="volunteer_chat.php" class="sidebar-link <?php echo ($current_page == 'volunteer_chat.php') ? 'active' : ''; ?>">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>
        Chat
    </a>
  </nav>
  <!-- Logout (right below user info, above nav links) -->
  <div class="px-3 pt-3 pb-2 border-b border-gray-800">
    <a href="index.php" class="sidebar-link hover:bg-gray-900" style="color:#6b7280;">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
      </svg>
      Logout
    </a>
  </div>
</aside>