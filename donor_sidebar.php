<?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
?>


<aside class="w-[250px] bg-[#0f172a] min-h-[calc(100vh-70px)] px-[18px] py-[22px]">

  <!-- Profile -->
  <div class="bg-[#1e293b] rounded-xl p-[16px] px-[20px] mb-[18px]">
    <p class="text-[14px] font-bold flex gap-2 text-white">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 1 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/>
      </svg>
      Donor Profile
    </p>
    <p class="text-[12px] text-[#94a3b8] mt-[4px]">sarah.thompson@email.com</p>

    <div class="flex justify-between text-[12px] mt-[10px] text-[#cbd5f5]">
      <span>Total Donations</span>
      <span>12</span>
    </div>
    <div class="flex justify-between text-[12px] text-[#cbd5f5]">
      <span>Member Since</span>
      <span>1/15/2025</span>
    </div>
  </div>

  <!-- Nav -->
  <nav class="mt-[20px] space-y-[8px]">
    <a href="donor_dashboard.php" class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'donor_dashboard.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M3 10.5l9-7 9 7"/>
        <path d="M5 9.5v10h14v-10"/>
      </svg>
      Overview
    </a>

    <a href="donor_history.php" class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'donor_history.php') || ($current_page == 'donor_donate_money.php') || ($current_page == 'donor_donate_supplies.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M3 12a9 9 0 1 0 3-6.7"/>
        <path d="M3 4v6h6"/>
        <path d="M12 7v5l3 2"/>
      </svg>
      Donation History
    </a>

    <a href="donor_track_donation.php" class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'donor_track_donation.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path d="M12 21s7-5.5 7-11a7 7 0 1 0-14 0c0 5.5 7 11 7 11z"/>
        <circle cx="12" cy="10" r="2.5"/>
      </svg>
      Track Donations
    </a>

    <a href="donor_chat.php" class="flex items-center gap-3 px-[14px] h-[44px] rounded-lg text-[#cbd5e1] font-semibold <?php echo ($current_page == 'donor_chat.php') ? 'bg-[#0ea5e9] text-white' : ''; ?>">
      <div class="flex gap-3 items-center">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z"/>
        </svg>
        <span class="mt-[-4px]">Messages</span>
      </div>
      <span class="w-[6px] h-[6px] bg-red-500 rounded-full mt-1 mr-3"></span>
    </a>
  </nav>

</aside>