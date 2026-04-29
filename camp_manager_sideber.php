<?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<aside class="w-[250px] bg-[#0f172a] min-h-[calc(100vh-70px)] px-[18px] py-[22px]">

  <!-- Camp Card -->
  <div class="bg-[#1e293b] rounded-xl p-[16px] text-white">
    <h2 class="font-extrabold text-[15px]">Eastern Relief Camp</h2>
    <p class="text-[12px] text-[#94a3b8] mt-1">Downtown, District 5</p>

    <div class="mt-[14px]">
      <div class="flex justify-between text-[12px] text-[#cbd5f5] mb-1">
        <span>Occupancy</span>
        <span>342/500</span>
      </div>
      <div class="w-full h-[6px] bg-[#334155] rounded-full">
        <div class="w-[70%] h-[6px] bg-[#0ea5e9] rounded-full"></div>
      </div>
    </div>
  </div>

  <!-- MENU -->
<nav class="mt-[20px] space-y-[8px]">

  <a href="camp_manager_dashboard.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_dashboard.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path d="M3 10.5l9-7 9 7"/>
      <path d="M5 9.5v10h14v-10"/>
    </svg>
    Overview
  </a>

  <a href="camp_manager_affected_people.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_affected_people.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <circle cx="8" cy="8" r="3"/>
      <circle cx="16" cy="8" r="3"/>
      <path d="M3 20c0-3 3-5 5-5s5 2 5 5"/>
      <path d="M11 20c0-3 3-5 5-5s5 2 5 5"/>
    </svg>
    Affected People
  </a>

  <a href="camp_manager_stock_manage.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_stock_manage.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
      <path d="M3.3 7l8.7 5 8.7-5"/>
    </svg>
    Stock Management
  </a>

  <a href="camp_manager_volunteer_task.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_volunteer_task.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <rect x="9" y="2" width="6" height="4" rx="1"/>
      <path d="M4 6h16v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6z"/>
      <path d="M9 12h6M9 16h6"/>
    </svg>
    Volunteer Tasks
  </a>

  <a href="camp_manager_dist_logs.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_dist_logs.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2z"/>
    </svg>
    Distribution Logs
  </a>

  <a href="camp_manager_summary_report.php"
     class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_summary_report.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path d="M12 3v12"/>
      <path d="M7 10l5 5 5-5"/>
      <path d="M5 21h14"/>
    </svg>
    Reports
  </a>

  <a href="camp_manager_chat.php"
     class="flex items-center justify-between px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'camp_manager_chat.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
    <span class="flex items-center gap-3">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M4 5h16v11a2 2 0 0 1-2 2H8l-4 3V7a2 2 0 0 1 2-2z"/>
      </svg>
      Messages
    </span>
    <span class="w-[6px] h-[6px] bg-red-500 rounded-full"></span>
  </a>

</nav>
</aside>