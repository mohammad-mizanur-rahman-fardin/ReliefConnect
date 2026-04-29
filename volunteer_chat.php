<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ReliefConnect Chat</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 bg-[#f8fafc] font-sans text-black">
  <div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php include 'volunteer_sidebar.php'; ?>

    <!-- Main -->
    <main class="flex-1">
      <!-- Top bar -->
      <?php include 'volunteer_top_bar.php'; ?>

      <section class="px-8 pt-[34px]">
        <div class="bg-white rounded-xl border border-slate-200 shadow-md overflow-hidden w-full max-w-[938px]">
          <!-- Chat header -->
          <div class="h-[78px] px-4 flex items-center gap-3 border-b border-slate-200">
            <div class="w-[40px] h-[40px] rounded-full bg-[#0ea5e9] text-white flex items-center justify-center font-bold">
              CM
            </div>
            <div>
              <h3 class="text-[18px] font-extrabold leading-5">Camp Manager</h3>
              <p class="text-[14px] text-green-600 mt-1">
                <span class="inline-block w-[10px] h-[10px] rounded-full bg-green-600 mr-1"></span>Online
              </p>
            </div>
          </div>

          <!-- Messages area -->
          <div class="h-[250px] px-4 pt-5 border-b border-slate-200 relative">
            <div class="w-[362px] bg-[#f1f5f9] rounded-xl shadow-md px-3 py-3">
              <p class="text-[14px] font-extrabold mb-1">Camp Manager</p>
              <p class="text-[16px]">Great work! Let me know when you complete it.</p>
            </div>
            <p class="text-[12px] text-slate-500 mt-1 ml-1">10:35 AM</p>

            <!-- Sent message state: remove/comment this block for typing state -->
            <div class="absolute right-8 bottom-12">
              <div class="w-[362px] bg-[#74c9ed] rounded-lg shadow-md px-3 py-3">
                <p class="text-[14px] font-extrabold mb-2">You</p>
                <p class="text-[16px]">Send a doctor to Camp T2. Breathing problem.</p>
              </div>
              <p class="text-[12px] text-slate-500 mt-1 ml-1">10:55 AM</p>
            </div>
          </div>

          <!-- Input -->
          <div class="h-[84px] px-4 flex items-center gap-2">
            <input
              class="h-[45px] flex-1 rounded-lg border border-slate-300 shadow-inner px-4 text-[16px] outline-none"
              placeholder="Type your message..."
            />

            <!-- For typing screenshot, use value instead:
            <input class="h-[45px] flex-1 rounded-lg border border-slate-300 shadow-inner px-4 text-[16px] outline-none"
              value="Send a doctor to Camp T2. Breathing problem." />
            -->

            <button class="h-[45px] w-[112px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[16px] flex items-center justify-center gap-2">
              <span class="text-xl">↗</span> Send
            </button>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>