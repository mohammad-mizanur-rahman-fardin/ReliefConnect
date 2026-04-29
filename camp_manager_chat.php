<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Messages</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Bar -->
  <?php include 'camp_manager_top_bar.php'; ?>

  <div class="flex min-h-[calc(100vh-78px)]">
    <!-- Sidebar -->
    <?php include 'camp_manager_sidebar.php'; ?>

    <!-- Main -->
    <main class="flex-1 px-[32px] pt-[20px]">
      <h1 class="text-[30px] font-extrabold text-black">Messages</h1>

      <section class="grid grid-cols-[310px_1fr] gap-[25px] mt-[29px]">
        <!-- Contacts -->
        <div class="h-[600px] bg-white rounded-xl border border-[#e2e8f0] shadow-md overflow-hidden">
          <div class="h-[58px] px-[16px] flex items-center border-b border-[#e2e8f0]">
            <h2 class="text-[17px] font-extrabold text-black">Contacts</h2>
          </div>

          <div class="h-[78px] px-[17px] flex items-center gap-[13px] border-b border-[#e2e8f0] relative">
            <div class="w-[41px] h-[41px] rounded-full bg-[#ff3045] text-white flex items-center justify-center font-bold text-[16px]">
              A
            </div>
            <div>
              <p class="text-[17px] font-extrabold text-black">Admin</p>
              <p class="text-[14px] text-[#334155] mt-[5px]">2 new messages</p>
            </div>
            <span class="absolute right-[17px] top-[38px] w-[8px] h-[8px] bg-[#ff3045] rounded-full"></span>
          </div>

          <div class="h-[77px] px-[17px] flex items-center gap-[13px] border-b border-[#e2e8f0]">
            <div class="w-[41px] h-[41px] rounded-full bg-[#0ea5e9] text-white flex items-center justify-center font-bold text-[16px]">
              M
            </div>
            <div>
              <p class="text-[17px] font-extrabold text-black">Mike Johnson</p>
              <p class="text-[14px] text-[#334155] mt-[5px]">Volunteer</p>
            </div>
          </div>

          <div class="h-[77px] px-[17px] flex items-center gap-[13px]">
            <div class="w-[41px] h-[41px] rounded-full bg-[#22c55e] text-white flex items-center justify-center font-bold text-[16px]">
              L
            </div>
            <div>
              <p class="text-[17px] font-extrabold text-black">Lisa Chen</p>
              <p class="text-[14px] text-[#334155] mt-[5px]">Volunteer</p>
            </div>
          </div>
        </div>

        <!-- Chat -->
        <div class="h-[600px] bg-white rounded-xl border border-[#e2e8f0] shadow-md overflow-hidden">
          <!-- Chat Header -->
          <div class="h-[65px] px-[16px] flex items-center gap-[13px] border-b border-[#e2e8f0]">
            <div class="w-[41px] h-[41px] rounded-full bg-[#ff3045] text-white flex items-center justify-center font-bold text-[16px]">
              A
            </div>
            <div>
              <p class="text-[17px] font-extrabold text-black">Admin</p>
              <p class="text-[14px] text-[#22c55e]">Online</p>
            </div>
          </div>

          <!-- Messages Area -->
          <div class="h-[432px] relative px-[16px] pt-[16px]">
            <div class="absolute left-[16px] top-[16px] w-[306px] bg-[#f1f5f9] rounded-lg px-[16px] py-[13px]">
              <p class="text-[15px] text-[#0f172a] leading-[20px]">
                Please update the stock levels by end of day
              </p>
              <p class="text-[12px] text-[#64748b] mt-[4px]">10:30 AM</p>
            </div>

            <div class="absolute right-[16px] top-[116px] w-[270px] bg-[#0ea5e9] text-white rounded-lg px-[16px] py-[13px]">
              <p class="text-[15px] leading-[20px]">
                Completed food distribution for today
              </p>
              <p class="text-[12px] text-blue-100 mt-[4px]">9:15 AM</p>
            </div>

            <div class="absolute left-[16px] top-[216px] w-[320px] bg-[#f1f5f9] rounded-lg px-[16px] py-[13px]">
              <p class="text-[15px] text-[#0f172a] leading-[20px]">
                New volunteer training scheduled for<br />tomorrow
              </p>
              <p class="text-[12px] text-[#64748b] mt-[6px]">Yesterday</p>
            </div>
          </div>

          <!-- Input -->
          <div class="h-[80px] border-t border-[#e2e8f0] px-[16px] flex items-center mt-5 gap-[8px]">
            <input
              type="text"
              placeholder="Type a message..."
              class="h-[42px] flex-1 rounded-lg border border-[#cbd5e1] px-[16px] text-[16px] outline-none placeholder:text-[#8b8b8b]"
            />

            <button class="w-[84px] h-[42px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[16px]">
              Send
            </button>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>