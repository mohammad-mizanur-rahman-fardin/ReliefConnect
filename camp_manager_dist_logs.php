<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Distribution Logs</title>
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
        <h1 class="text-[30px] font-extrabold text-black pt-[20px]">Distribution Logs</h1>

        <a href="camp_manager_record_distribution.php" class="w-[218px] h-[48px] bg-[#0ea5e9] rounded-lg text-white text-[16px] font-bold flex items-center justify-center gap-[10px] mt-[30px]">
          <span class="text-[26px] font-light leading-none">+</span>
          Record Distribution
        </a>
      </div>

      <section class="mt-[39px] bg-white border border-[#e2e8f0] rounded-xl shadow-md overflow-hidden">
        <table class="w-full text-left">
          <thead>
            <tr class="h-[51px] bg-[#f8fafc] border-b border-[#e2e8f0] text-[#334155] text-[13px] font-bold">
              <th class="pl-[25px] w-[18%]">Date</th>
              <th class="w-[22%]">Beneficiary</th>
              <th class="w-[26%]">Items</th>
              <th class="w-[14%]">Quantity</th>
              <th>Distributed By</th>
            </tr>
          </thead>

          <tbody class="text-[16px] text-[#334155]">
            <tr class="h-[57px] border-b border-[#e2e8f0]">
              <td class="pl-[25px]">2026-03-22</td>
              <td class="font-extrabold text-black">Ahmed Family</td>
              <td>Rice, Water, Blankets</td>
              <td>15</td>
              <td>Mike Johnson</td>
            </tr>

            <tr class="h-[57px] border-b border-[#e2e8f0]">
              <td class="pl-[25px]">2026-03-22</td>
              <td class="font-extrabold text-black">Sarah Wilson</td>
              <td>Medicine Kit</td>
              <td>1</td>
              <td>Lisa Chen</td>
            </tr>

            <tr class="h-[57px]">
              <td class="pl-[25px]">2026-03-21</td>
              <td class="font-extrabold text-black">Martinez Family</td>
              <td>Food Packets</td>
              <td>12</td>
              <td>Mike Johnson</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>