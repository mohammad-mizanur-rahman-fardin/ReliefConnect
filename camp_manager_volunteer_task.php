<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Volunteer Tasks</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">

<!-- TOP BAR -->
<?php include 'camp_manager_top_bar.php'; ?>

<div class="flex min-h-[calc(100vh-78px)]">

<!-- SIDEBAR -->
<?php include 'camp_manager_sidebar.php'; ?>

<!-- MAIN -->
<main class="flex-1 px-[32px]">

  <!-- HEADER -->
  <div class="flex justify-between items-center">
    <h1 class="text-[30px] font-extrabold pt-[20px]">Volunteer Tasks</h1>

    <a href="camp_manager_assign_task.php" class="h-[48px] px-[18px] bg-[#0ea5e9] text-white rounded-lg font-bold flex items-center gap-2 mt-[30px]">
      <span class="text-[22px]">+</span>
      Assign Task
    </a>
  </div>

  <!-- TASK LIST -->
  <div class="mt-[32px] space-y-[18px]">

    <!-- CARD 1 -->
    <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[24px] py-[20px] flex justify-between items-center">

      <div class="flex items-start gap-[14px]">
        <!-- icon -->
        <div class="w-[36px] h-[36px] bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center rounded-full">
          👤
        </div>

        <div>
          <div class="flex items-center gap-[10px]">
            <h3 class="font-bold text-[16px]">Mike Johnson</h3>
            <span class="bg-[#fef3c7] text-[#ca8a04] text-[12px] px-[10px] py-[3px] rounded-full font-semibold">
              in-progress
            </span>
          </div>

          <p class="text-[#475569] text-[14px] mt-[6px]">Food Distribution</p>

          <p class="text-[#64748b] text-[13px] mt-[8px] flex items-center gap-2">
            📅 Assigned: 2026-03-22
          </p>
        </div>
      </div>

      <!-- actions -->
      <div class="flex gap-[16px] text-[18px]">
        <span class="text-[#0ea5e9] cursor-pointer">✎</span>
        <span class="text-[#22c55e] cursor-pointer">✔</span>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[24px] py-[20px] flex justify-between items-center">

      <div class="flex items-start gap-[14px]">
        <div class="w-[36px] h-[36px] bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center rounded-full">
          👤
        </div>

        <div>
          <div class="flex items-center gap-[10px]">
            <h3 class="font-bold text-[16px]">Lisa Chen</h3>
            <span class="bg-[#dcfce7] text-[#16a34a] text-[12px] px-[10px] py-[3px] rounded-full font-semibold">
              completed
            </span>
          </div>

          <p class="text-[#475569] text-[14px] mt-[6px]">Medical Assistance</p>

          <p class="text-[#64748b] text-[13px] mt-[8px] flex items-center gap-2">
            📅 Assigned: 2026-03-22
          </p>
        </div>
      </div>

      <div class="flex gap-[16px] text-[18px]">
        <span class="text-[#0ea5e9]">✎</span>
        <span class="text-[#22c55e]">✔</span>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[24px] py-[20px] flex justify-between items-center">

      <div class="flex items-start gap-[14px]">
        <div class="w-[36px] h-[36px] bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center rounded-full">
          👤
        </div>

        <div>
          <div class="flex items-center gap-[10px]">
            <h3 class="font-bold text-[16px]">David Brown</h3>
            <span class="bg-[#fee2e2] text-[#dc2626] text-[12px] px-[10px] py-[3px] rounded-full font-semibold">
              pending
            </span>
          </div>

          <p class="text-[#475569] text-[14px] mt-[6px]">Registration Desk</p>

          <p class="text-[#64748b] text-[13px] mt-[8px] flex items-center gap-2">
            📅 Assigned: 2026-03-21
          </p>
        </div>
      </div>

      <div class="flex gap-[16px] text-[18px]">
        <span class="text-[#0ea5e9]">✎</span>
        <span class="text-[#22c55e]">✔</span>
      </div>
    </div>

  </div>

</main>
</div>

</body>
</html>