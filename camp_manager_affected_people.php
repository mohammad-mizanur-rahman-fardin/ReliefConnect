<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Affected People</title>
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
        <h1 class="text-[30px] font-extrabold text-black pt-[20px]">Affected People</h1>

        <a href="camp_manager_register_person.php" class="w-[173px] h-[48px] bg-[#0ea5e9] rounded-lg text-white text-[16px] font-bold flex items-center justify-center gap-[10px] mt-[30px]">
          <span class="text-[26px] font-light leading-none">+</span>
          Register New
        </a>
      </div>

      <section class="mt-[39px] bg-white border border-[#e2e8f0] rounded-xl shadow-md overflow-hidden">
        <table class="w-full text-left">
          <thead>
            <tr class="h-[51px] bg-[#f8fafc] border-b border-[#e2e8f0] text-[#334155] text-[13px] font-bold">
              <th class="pl-[25px] w-[18%]">Name</th>
              <th class="w-[13%]">Type</th>
              <th class="w-[12%]">Members</th>
              <th class="w-[14%]">Registered</th>
              <th class="w-[17%]">Needs</th>
              <th class="w-[12%]">Status</th>
              <th class="text-right pr-[34px]">Actions</th>
            </tr>
          </thead>

          <tbody class="text-[16px] text-[#334155]">
            <tr class="h-[67px] border-b border-[#e2e8f0]">
              <td class="pl-[25px] font-extrabold text-black">Ahmed Family</td>
              <td>Family</td>
              <td>5</td>
              <td>2026-03-20</td>
              <td>Shelter &amp; Food</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[14px] py-[6px] rounded-full text-[12px] font-bold">active</span>
              </td>
              <td class="pr-[34px]">
                <div class="flex justify-end gap-[22px] text-[18px]">
                  <span class="text-[#0ea5e9]">▱</span>
                  <span class="text-[#ef4444]">♜</span>
                </div>
              </td>
            </tr>

            <tr class="h-[67px] border-b border-[#e2e8f0]">
              <td class="pl-[25px] font-extrabold text-black">Sarah Wilson</td>
              <td>Individual</td>
              <td>1</td>
              <td>2026-03-21</td>
              <td>Medical</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[14px] py-[6px] rounded-full text-[12px] font-bold">active</span>
              </td>
              <td class="pr-[34px]">
                <div class="flex justify-end gap-[22px] text-[18px]">
                  <span class="text-[#0ea5e9]">▱</span>
                  <span class="text-[#ef4444]">♜</span>
                </div>
              </td>
            </tr>

            <tr class="h-[67px]">
              <td class="pl-[25px] font-extrabold text-black">Martinez Family</td>
              <td>Family</td>
              <td>3</td>
              <td>2026-03-19</td>
              <td>Food</td>
              <td>
                <span class="bg-[#dcfce7] text-[#16a34a] px-[14px] py-[6px] rounded-full text-[12px] font-bold">active</span>
              </td>
              <td class="pr-[34px]">
                <div class="flex justify-end gap-[22px] text-[18px]">
                  <span class="text-[#0ea5e9]">▱</span>
                  <span class="text-[#ef4444]">♜</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </div>
</body>
</html>