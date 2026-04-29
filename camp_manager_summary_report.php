<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Camp Reports</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">

<!-- TOP BAR -->
<?php include 'camp_manager_top_bar.php'; ?>

<div class="flex min-h-[calc(100vh-78px)]">

<!-- SIDEBAR -->
<?php include 'camp_manager_sidebar.php'; ?>

<!-- MAIN -->
<main class="flex-1 px-[32px] pt-[20px]">

  <h1 class="text-[30px] font-extrabold">Camp Reports</h1>

  <!-- CARD -->
  <div class="mt-[30px] bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[40px] py-[50px] text-center">

    <!-- Icon -->
    <div class="flex justify-center">
      <div class="w-[80px] h-[80px] rounded-full bg-[#e0f2fe] flex items-center justify-center text-[#0284c7] text-[34px]">
        📄
      </div>
    </div>

    <!-- Title -->
    <h2 class="mt-[28px] text-[22px] font-extrabold">
      Generate Camp Summary Report
    </h2>

    <!-- Description -->
    <p class="text-[#475569] text-[15px] mt-[12px] max-w-[540px] mx-auto leading-[24px]">
      Download a comprehensive PDF report including camp statistics, stock levels,
      registered people, and distribution logs.
    </p>

    <!-- Button -->
    <button class="mt-[24px] h-[48px] px-[26px] bg-[#0ea5e9] text-white rounded-lg font-bold flex items-center justify-center gap-3 mx-auto">
      ⬇ Download PDF Report
    </button>

    <!-- Divider -->
    <div class="border-t border-[#e2e8f0] mt-[32px] pt-[24px]"></div>

    <!-- Included -->
    <p class="text-[#64748b] text-[14px] mb-[18px]">
      Report will include:
    </p>

    <div class="grid grid-cols-2 gap-y-[12px] max-w-[400px] mx-auto text-[15px] text-[#334155]">

      <div class="flex items-center gap-2">
        <span class="text-[#22c55e]">✔</span> Camp Statistics
      </div>

      <div class="flex items-center gap-2">
        <span class="text-[#22c55e]">✔</span> Stock Inventory
      </div>

      <div class="flex items-center gap-2">
        <span class="text-[#22c55e]">✔</span> Distribution Logs
      </div>

      <div class="flex items-center gap-2">
        <span class="text-[#22c55e]">✔</span> Volunteer Tasks
      </div>

    </div>

  </div>

</main>
</div>

</body>
</html>