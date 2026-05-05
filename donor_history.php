<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donation History</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Bar -->
  <?php include 'donor_top_bar.php' ?>

  <div class="flex min-h-[calc(100vh-78px)]">
    <!-- Sidebar -->
    <?php include 'donor_sidebar.php' ?>

    <!-- Main -->
    <main class="flex-1 px-[32px] pt-[34px]">
      <div class="flex items-start justify-between">
        <h1 class="text-[30px] font-extrabold text-black">Donation History</h1>

        <div class="flex gap-[34px] pr-[10px] items-center">
          <a href="donor_donate_money.php" class="w-[150px] h-[36px] rounded-lg bg-[#11820f] px-3 text-white font-bold text-[14px] flex items-center justify-center gap-[8px]">
            <span class="text-[20px] mt-[-4px] leading-none">+</span>
            Donate Money
          </a>

          <a href="donor_donate_supplies.php" class="w-[140px] h-[36px] mt-[-3px] rounded-lg bg-[#1000d9] text-white font-bold text-[14px] flex items-center justify-center gap-[8px]">
            <span class="text-[20px] leading-none">+</span>
            Donate Item
          </a>
        </div>
      </div>

      <section class="mt-[35px] bg-white border border-[#e2e8f0] rounded-xl shadow-md overflow-hidden">
        <table class="w-full text-left">
          <thead>
            <tr class="h-[51px] bg-[#f8fafc] border-b border-[#e2e8f0] text-[#334155] text-[13px] font-bold">
              <th class="pl-[25px] w-[13%]">Date</th>
              <th class="w-[11%]">Type</th>
              <th class="w-[30%]">Details</th>
              <th class="w-[25%]">Camp</th>
              <th class="w-[13%]">Status</th>
              <th class="text-right pr-[31px]">Receipt</th>
            </tr>
          </thead>

          <tbody class="text-[16px] text-[#334155]">
            <tr class="h-[67px] border-b border-[#e2e8f0]">
              <td class="pl-[25px]">2026-03-20</td>
              <td class="font-extrabold text-black">Money</td>
              <td>$500</td>
              <td>Eastern Relief Camp</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[13px] py-[6px] rounded-full text-[12px] font-bold">completed</span>
              </td>
              <td class="text-right pr-[31px]">
                <svg class="inline-block text-[#0ea5e9]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                  <path d="M12 3v12"/>
                  <path d="M7 10l5 5 5-5"/>
                  <path d="M5 21h14"/>
                </svg>
              </td>
            </tr>

            <tr class="h-[67px] border-b border-[#e2e8f0]">
              <td class="pl-[25px]">2026-03-18</td>
              <td class="font-extrabold text-black">Supplies</td>
              <td>Blankets (50), Water Bottles (100)</td>
              <td>Northern Emergency Center</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[13px] py-[6px] rounded-full text-[12px] font-bold">delivered</span>
              </td>
              <td class="text-right pr-[31px]">
                <svg class="inline-block text-[#0ea5e9]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                  <path d="M12 3v12"/>
                  <path d="M7 10l5 5 5-5"/>
                  <path d="M5 21h14"/>
                </svg>
              </td>
            </tr>

            <tr class="h-[67px] border-b border-[#e2e8f0]">
              <td class="pl-[25px]">2026-03-15</td>
              <td class="font-extrabold text-black">Money</td>
              <td>$250</td>
              <td>Western Support Hub</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[13px] py-[6px] rounded-full text-[12px] font-bold">completed</span>
              </td>
              <td class="text-right pr-[31px]">
                <svg class="inline-block text-[#0ea5e9]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                  <path d="M12 3v12"/>
                  <path d="M7 10l5 5 5-5"/>
                  <path d="M5 21h14"/>
                </svg>
              </td>
            </tr>

            <tr class="h-[67px]">
              <td class="pl-[25px]">2026-03-10</td>
              <td class="font-extrabold text-black">Supplies</td>
              <td>Medical Kits (20), First Aid Supplies</td>
              <td>Eastern Relief Camp</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[13px] py-[6px] rounded-full text-[12px] font-bold">delivered</span>
              </td>
              <td class="text-right pr-[31px]">
                <svg class="inline-block text-[#0ea5e9]" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                  <path d="M12 3v12"/>
                  <path d="M7 10l5 5 5-5"/>
                  <path d="M5 21h14"/>
                </svg>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>