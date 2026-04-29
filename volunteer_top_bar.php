<?php
  // Get current page
  $current_page = basename($_SERVER['PHP_SELF']);

  // Set page title
  $page_title = "Overview";

  if ($current_page == "volunteer_dashboard.php") {
    $page_title = "Overview";
  } elseif ($current_page == "volunteer_my_tasks.php") {
    $page_title = "My Tasks";
  } elseif ($current_page == "volunteer_supply_records.php") {
    $page_title = "Supply Records";
  } elseif ($current_page == "volunteer_report_issues.php") {
    $page_title = "Report Issues";
  } elseif ($current_page == "volunteer_chat.php") {
    $page_title = "Chat";
  }
?>

<header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between flex-shrink-0">
  
  <h1 class="text-2xl font-bold text-gray-900">
    <?php echo $page_title; ?>
  </h1>

  <div class="text-right">
    <div class="text-gray-400 text-xs">Today's Date</div>
    <div class="text-gray-900 font-bold text-sm">April 08, 2026</div>
  </div>

</header>