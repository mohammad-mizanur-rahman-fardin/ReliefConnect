<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] font-sans">

<!-- TOP BAR -->
<?php include 'camp_manager_top_bar.php'; ?>

<div class="flex">

<!-- SIDEBAR -->
<?php include 'camp_manager_sidebar.php'; ?>

<!-- MAIN -->
<main class="flex-1 p-[28px]">

  <h1 class="text-[30px] pt-[-6px] font-extrabold">Dashboard Overview</h1>

  <!-- TOP STATS -->
  <div class="grid grid-cols-4 gap-[20px] mt-[20px]">

    <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
      <div>
        <p class="text-[13px] text-[#64748b]">Total People</p>
        <h2 class="text-[26px] font-extrabold mt-1">9</h2>
      </div>
      <div class="w-[45px] h-[45px] bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center rounded-lg">👥</div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
      <div>
        <p class="text-[13px] text-[#64748b]">Stock Items</p>
        <h2 class="text-[26px] font-extrabold mt-1">5</h2>
      </div>
      <div class="w-[45px] h-[45px] bg-[#dcfce7] text-[#16a34a] flex items-center justify-center rounded-lg">📦</div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
      <div>
        <p class="text-[13px] text-[#64748b]">Active Tasks</p>
        <h2 class="text-[26px] font-extrabold mt-1">2</h2>
      </div>
      <div class="w-[45px] h-[45px] bg-[#fef3c7] text-[#ca8a04] flex items-center justify-center rounded-lg">📋</div>
    </div>

    <div class="bg-white rounded-xl shadow-md p-[18px] flex justify-between items-center">
      <div>
        <p class="text-[13px] text-[#64748b]">Distributions</p>
        <h2 class="text-[26px] font-extrabold mt-1">3</h2>
      </div>
      <div class="w-[45px] h-[45px] bg-[#ede9fe] text-[#7c3aed] flex items-center justify-center rounded-lg">📈</div>
    </div>

  </div>

  <!-- QUICK ACTIONS -->
  <div class="bg-white rounded-xl shadow-md p-[20px] mt-[24px]">
    <h2 class="font-extrabold text-[16px] mb-[15px]">Quick Actions</h2>

    <div class="grid grid-cols-3 gap-[15px]">

      <a href="camp_manager_register_person.php" class="border border-[#7dd3fc] bg-[#f0f9ff] rounded-lg p-[20px]">
        <p class="text-[#0ea5e9] text-xl">＋</p>
        <p class="mt-2 font-semibold">Register Person</p>
      </a>

      <a href="camp_manager_update_stock.php" class="border border-[#86efac] bg-[#f0fdf4] rounded-lg p-[20px]">
        <p class="text-[#16a34a] text-xl">📦</p>
        <p class="mt-2 font-semibold">Update Stock</p>
      </a>

      <a href="camp_manager_assign_task.php" class="border border-[#fdba74] bg-[#fff7ed] rounded-lg p-[20px]">
        <p class="text-[#f97316] text-xl">📋</p>
        <p class="mt-2 font-semibold">Assign Task</p>
      </a>

    </div>
  </div>

  <!-- BOTTOM SECTION -->
  <div class="grid grid-cols-2 gap-[20px] mt-[24px]">

    <!-- STOCK -->
    <div class="bg-white rounded-xl shadow-md p-[20px]">
      <h2 class="font-extrabold text-[16px] mb-[14px]">Critical Stock Items</h2>

      <div class="space-y-[10px]">

        <div class="bg-[#f8fafc] p-[14px] rounded-lg flex justify-between">
          <div>
            <p class="font-semibold">Water Bottles</p>
            <p class="text-[12px] text-[#64748b]">180 bottles</p>
          </div>
          <span class="bg-[#fef3c7] text-[#ca8a04] text-[12px] px-3 py-1 rounded-full">low</span>
        </div>

        <div class="bg-[#f8fafc] p-[14px] rounded-lg flex justify-between">
          <div>
            <p class="font-semibold">Pain Relievers</p>
            <p class="text-[12px] text-[#64748b]">45 boxes</p>
          </div>
          <span class="bg-[#fee2e2] text-red-600 text-[12px] px-3 py-1 rounded-full">critical</span>
        </div>

        <div class="bg-[#f8fafc] p-[14px] rounded-lg flex justify-between">
          <div>
            <p class="font-semibold">Tents</p>
            <p class="text-[12px] text-[#64748b]">85 pieces</p>
          </div>
          <span class="bg-[#fef3c7] text-[#ca8a04] text-[12px] px-3 py-1 rounded-full">low</span>
        </div>

      </div>
    </div>

    <!-- MESSAGES -->
    <div class="bg-white rounded-xl shadow-md p-[20px]">
      <h2 class="font-extrabold text-[16px] mb-[14px]">Recent Messages</h2>

      <div class="space-y-[10px]">

        <div class="bg-[#f8fafc] p-[14px] rounded-lg">
          <div class="flex justify-between text-[12px]">
            <span class="font-bold">Admin</span>
            <span class="text-[#64748b]">10:30 AM</span>
          </div>
          <p class="text-[13px] text-[#334155] mt-1">
            Please update the stock levels by end of day
          </p>
        </div>

        <div class="bg-[#f8fafc] p-[14px] rounded-lg">
          <div class="flex justify-between text-[12px]">
            <span class="font-bold">Mike Johnson</span>
            <span class="text-[#64748b]">9:15 AM</span>
          </div>
          <p class="text-[13px] text-[#334155] mt-1">
            Completed food distribution for today
          </p>
        </div>

        <div class="bg-[#f8fafc] p-[14px] rounded-lg">
          <div class="flex justify-between text-[12px]">
            <span class="font-bold">Admin</span>
            <span class="text-[#64748b]">Yesterday</span>
          </div>
          <p class="text-[13px] text-[#334155] mt-1">
            New volunteer training scheduled for tomorrow
          </p>
        </div>

      </div>
    </div>

  </div>

</main>
</div>
</body>
</html>