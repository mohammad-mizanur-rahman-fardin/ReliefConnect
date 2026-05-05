<?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="h-[58px] bg-black flex items-center justify-between px-[44px]">
  
  <!-- Logo -->
  <h1 class="text-[24px] font-extrabold">
    <span class="text-[#0ea5e9]">Relief</span>
    <span class="text-white ml-[-6px]">Connect</span>
  </h1>

  <!-- Right Section -->
  <div class="flex items-center gap-[22px]">

    <!-- Profile -->
    <a href="donor_profile.php"
       class="flex items-center px-[22px] py-[3px] rounded-md transition-all duration-200
       <?php echo ($current_page == 'donor_profile.php') 
         ? 'bg-[#1e293b]' 
         : 'hover:bg-[#1e293b]'; ?>">

      <div class="text-right">
        <p class="text-white text-[14px] font-bold leading-5">
          Sarah Thompson
        </p>
        <p class="text-[#94a3b8] text-[12px] text-center">
          Donor
        </p>
      </div>

    </a>

    <!-- Logout Icon -->
    <a href="index.php" class="flex items-center justify-center">
      <svg width="24" height="24" fill="none" stroke="#0ea5e9" stroke-width="2" viewBox="0 0 24 24">
        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
        <path d="M10 17l5-5-5-5"/>
        <path d="M15 12H3"/>
      </svg>
    </a>

  </div>
</header>