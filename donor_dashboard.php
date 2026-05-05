<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Donor Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] font-sans">


<!-- SIDEBAR -->
<?php include 'donor_top_bar.php'; ?>

<!-- MAIN -->
<div class="flex">

  <!-- HEADER -->
  <?php include 'donor_sidebar.php'; ?>

  <!-- CONTENT -->
  <main class="p-[28px] w-content">

    <!-- Title -->
    <h2 class="text-[28px] font-extrabold mb-[20px]">Dashboard Overview</h2>

    <div class="w-[950px]">
      <!-- STATS -->
      <div class="grid grid-cols-3 gap-[18px] mb-[20px]">
  
        <!-- Card -->
        <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
          <div>
            <p class="text-[13px] text-[#64748b]">Total Money Donated</p>
            <p class="text-[28px] font-extrabold">$750</p>
          </div>
          <div class="w-[40px] h-[40px] bg-green-100 rounded-lg flex items-center justify-center text-green-600 text-xl">$</div>
        </div>
  
        <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
          <div>
            <p class="text-[13px] text-[#64748b]">Supply Donations</p>
            <p class="text-[28px] font-extrabold">2</p>
          </div>
          <div class="w-[40px] h-[40px] bg-blue-100 rounded-lg flex items-center justify-center">📦</div>
        </div>
  
        <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
          <div>
            <p class="text-[13px] text-[#64748b]">Total Donations</p>
            <p class="text-[28px] font-extrabold">4</p>
          </div>
          <div class="w-[40px] h-[40px] bg-purple-100 rounded-lg flex items-center justify-center">📈</div>
        </div>
  
      </div>
  
      <!-- DONATION BOX -->
      <div class="bg-white rounded-xl shadow-md p-[20px] mb-[20px]">
  
        <h3 class="font-bold mb-[14px]">Make a Donation</h3>
  
        <div class="grid grid-cols-2 gap-[16px]">
  
          <!-- Money -->
          <a href="donor_donate_money.php" class="border border-green-200 bg-green-50 rounded-xl p-[18px]">
            <p class="text-green-600 text-[24px]">$</p>
            <p class="font-bold mt-[6px]">Donate Money</p>
            <p class="text-[13px] text-[#64748b] mt-[4px]">Make a monetary contribution</p>
          </a>
  
          <!-- Supplies -->
          <a href="donor_donate_supplies.php" class="border border-blue-200 bg-blue-50 rounded-xl p-[18px]">
            <p class="text-blue-600 text-[22px]">📦</p>
            <p class="font-bold mt-[6px]">Donate Supplies</p>
            <p class="text-[13px] text-[#64748b] mt-[4px]">Donate food, medicine, or shelter items</p>
          </a>
  
        </div>
      </div>
  
      <!-- RECENT -->
      <div class="bg-white rounded-xl shadow-md p-[20px] mb-[20px]">
        <h3 class="font-bold mb-[12px]">Recent Donations</h3>
  
        <!-- Item -->
        <div class="bg-[#f1f5f9] rounded-lg p-[14px] flex justify-between items-center mb-[10px]">
          <div>
            <p class="font-bold">$500</p>
            <p class="text-[12px] text-[#64748b]">2026-03-20</p>
          </div>
          <span class="bg-green-100 text-green-600 text-[12px] px-[10px] py-[2px] rounded-full">completed</span>
        </div>
  
        <div class="bg-[#f1f5f9] rounded-lg p-[14px] flex justify-between items-center mb-[10px]">
          <div>
            <p class="font-bold">Blankets (50), Water Bottles (100)</p>
            <p class="text-[12px] text-[#64748b]">2026-03-18</p>
          </div>
          <span class="bg-green-100 text-green-600 text-[12px] px-[10px] py-[2px] rounded-full">delivered</span>
        </div>
  
        <div class="bg-[#f1f5f9] rounded-lg p-[14px] flex justify-between items-center">
          <div>
            <p class="font-bold">$250</p>
            <p class="text-[12px] text-[#64748b]">2026-03-15</p>
          </div>
          <span class="bg-green-100 text-green-600 text-[12px] px-[10px] py-[2px] rounded-full">completed</span>
        </div>
  
      </div>
  
      <!-- FOOTER CARD -->
      <div class="bg-gradient-to-r from-[#0ea5e9] to-[#2563eb] rounded-xl p-[20px] text-white flex items-center gap-[16px] shadow-md">
        <div class="text-[28px]">🤍</div>
        <div>
          <p class="font-bold text-[18px]">Thank You for Your Generosity!</p>
          <p class="text-[13px] opacity-90 mt-[4px]">
            Your donations have helped 4 relief operations across multiple camps.
            Together, we're making a difference in people's lives.
          </p>
        </div>
      </div>
    </div>


  </main>

</div>

</body>
</html>