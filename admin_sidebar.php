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
    <div class="text-gray-500 text-xs">Admin Portal</div>
  </div>

  <a href="admin_profile.php" class="sidebar-link2 <?php echo ($current_page == 'admin_profile.php') ? 'active' : ''; ?>">
    <!-- User Info -->
    <div class="px-4 py-2 w-[100%] border-b pb-3 border-gray-800 flex items-center gap-3">
      <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center flex-shrink-0">
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
        </svg>
      </div>
      <div>
        <div class="text-white text-sm font-semibold leading-tight">Admin User</div>
        <div class="text-xs <?php echo ($current_page == 'admin_profile.php') ? 'text-black' : 'text-gray-400'; ?>">Super Admin</div>
      </div>
    </div>
  </a>
  
  <!-- Nav Links -->
  <nav class="flex-1 px-3 py-4 flex flex-col gap-1">
    <a href="admin_dashboard.php" class="sidebar-link <?php echo ($current_page == 'admin_dashboard.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" stroke-width="2"/></svg>
      Dashboard
    </a>
    <a href="admin_camp_manager.php" class="sidebar-link <?php echo ($current_page == 'admin_camp_manager.php' || $current_page == 'admin_add_camp_manager.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      Camp Managers
    </a>
    <a href="admin_approvals.php" class="sidebar-link <?php echo ($current_page == 'admin_approvals.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
      Approvals
    </a>
    <a href="admin_camp_location.php" class="sidebar-link <?php echo ($current_page == 'admin_camp_location.php' || $current_page == 'admin_add_camp_location.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      Camp Locations
    </a>
    <a href="admin_supply_monitor.php" class="sidebar-link <?php echo ($current_page == 'admin_supply_monitor.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
      Supply Monitor
    </a>
    <a href="admin_reports.php" class="sidebar-link <?php echo ($current_page == 'admin_reports.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
      Reports
    </a>
    <a href="admin_alert_page.php" class="sidebar-link <?php echo ($current_page == 'admin_alert_page.php') ? 'active' : ''; ?>">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
      Alerts
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