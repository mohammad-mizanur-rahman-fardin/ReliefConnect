<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stock Management</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Bar -->
  <?php include 'camp_manager_top_bar.php'; ?>

  <div class="flex min-h-[calc(100vh-78px)]">
    <!-- Sidebar -->
    <?php include 'camp_manager_sidebar.php'; ?>

    <!-- Main -->
    <main class="flex-1 px-[32px]">
      <div class="flex items-center justify-between">
        <h1 class="text-[30px] font-extrabold text-black pt-[20px]">Stock Management</h1>

        <a href="camp_manager_update_stock.php" class="w-[173px] h-[48px] bg-[#0ea5e9] rounded-lg text-white text-[16px] font-bold flex items-center justify-center gap-[10px] mt-[30px]">
          <span class="text-[26px] font-light leading-none">+</span>
          Update Stock
        </a>
      </div>

      <!-- Stock Cards -->
      <section class="grid grid-cols-3 gap-[16px] mt-[39px]">
        <!-- Food -->
        <div class="h-[190px] bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[25px] py-[25px]">
          <h2 class="text-[20px] font-extrabold text-black">Food</h2>

          <div class="mt-[26px] flex justify-between items-start">
            <div>
              <p class="text-[14px] font-extrabold text-black leading-[17px]">Rice</p>
              <p class="text-[13px] text-[#334155]">450 kg</p>
            </div>

            <span class="bg-[#dcfce7] text-[#16a34a] rounded px-[10px] py-[6px] text-[12px] font-bold">
              good
            </span>
          </div>

          <div class="mt-[17px] flex justify-between items-start">
            <div>
              <p class="text-[14px] font-extrabold text-black leading-[17px]">Water Bottles</p>
              <p class="text-[13px] text-[#334155]">180 bottles</p>
            </div>

            <span class="bg-[#fef3c7] text-[#ca8a04] rounded px-[10px] py-[6px] text-[12px] font-bold">
              low
            </span>
          </div>
        </div>

        <!-- Medicine -->
        <div class="h-[140px] bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[25px] py-[25px]">
          <h2 class="text-[20px] font-extrabold text-black">Medicine</h2>

          <div class="mt-[26px] flex justify-between items-start">
            <div>
              <p class="text-[14px] font-extrabold text-black leading-[17px]">Pain Relievers</p>
              <p class="text-[13px] text-[#334155]">45 boxes</p>
            </div>

            <span class="bg-[#fee2e2] text-[#dc2626] rounded px-[10px] py-[6px] text-[12px] font-bold">
              critical
            </span>
          </div>
        </div>

        <!-- Shelter -->
        <div class="h-[190px] bg-white rounded-xl border border-[#e2e8f0] shadow-md px-[25px] py-[25px]">
          <h2 class="text-[20px] font-extrabold text-black">Shelter</h2>

          <div class="mt-[26px] flex justify-between items-start">
            <div>
              <p class="text-[14px] font-extrabold text-black leading-[17px]">Blankets</p>
              <p class="text-[13px] text-[#334155]">320 pieces</p>
            </div>

            <span class="bg-[#dcfce7] text-[#16a34a] rounded px-[10px] py-[6px] text-[12px] font-bold">
              good
            </span>
          </div>

          <div class="mt-[17px] flex justify-between items-start">
            <div>
              <p class="text-[14px] font-extrabold text-black leading-[17px]">Tents</p>
              <p class="text-[13px] text-[#334155]">85 pieces</p>
            </div>

            <span class="bg-[#fef3c7] text-[#ca8a04] rounded px-[10px] py-[6px] text-[12px] font-bold">
              low
            </span>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>