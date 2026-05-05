<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donor Messages</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Header -->
  <?php include 'donor_top_bar.php'; ?>

  <div class="flex min-h-[calc(100vh-78px)]">
    <!-- Sidebar -->
    <?php include 'donor_sidebar.php'; ?>

    <!-- Main -->
    <main class="flex-1 px-[32px] pt-[34px]">
      <h1 class="text-[30px] font-extrabold text-black">Messages</h1>

      <section class="mt-[30px] h-[600px] bg-white border border-[#e2e8f0] rounded-xl shadow-md overflow-hidden">
        <!-- Chat Header -->
        <div class="h-[77px] px-[17px] flex items-center gap-[13px] border-b border-[#e2e8f0]">
          <div class="w-[41px] h-[41px] rounded-full bg-[#ff3045] text-white flex items-center justify-center font-bold text-[16px]">
            A
          </div>

          <div>
            <p class="text-[17px] font-extrabold text-black">Admin</p>
            <p class="text-[14px] text-[#22c55e] mt-[5px]">Online</p>
          </div>
        </div>

        <!-- Chat Body -->
        <div class="h-[434px] relative px-[17px] pt-[16px]">
          <div class="absolute left-[17px] top-[16px] w-[276px] bg-[#f1f5f9] rounded-lg px-[16px] py-[13px]">
            <p class="text-[15px] text-[#0f172a] leading-[20px]">
              Thank you for your generous donation!
            </p>
            <p class="text-[12px] text-[#64748b] mt-[5px]">10:30 AM</p>
          </div>

          <div class="absolute left-[17px] top-[120px] w-[320px] bg-[#f1f5f9] rounded-lg px-[16px] py-[13px]">
            <p class="text-[15px] text-[#0f172a] leading-[20px]">
              Your supplies have been delivered to<br>
              Eastern Relief Camp
            </p>
            <p class="text-[12px] text-[#64748b] mt-[8px]">9:15 AM</p>
          </div>

          <div class="absolute left-[17px] top-[230px] w-[300px] bg-[#f1f5f9] rounded-lg px-[16px] py-[13px]">
            <p class="text-[15px] text-[#0f172a] leading-[20px]">
              Welcome to ReliefConnect!
            </p>
            <p class="text-[12px] text-[#64748b] mt-[8px]">Yesterday</p>
          </div>
        </div>

        <!-- Input -->
        <div class="h-[89px] border-t border-[#e2e8f0] px-[17px] flex items-center gap-[8px]">
          <input
            type="text"
            placeholder="Type a message..."
            class="h-[52px] flex-1 rounded-lg border border-[#cbd5e1] px-[16px] text-[16px] outline-none placeholder:text-[#8b8b8b]"
          />

          <button class="w-[84px] h-[52px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[16px]">
            Send
          </button>
        </div>
      </section>
    </main>
  </div>
</body>
</html>