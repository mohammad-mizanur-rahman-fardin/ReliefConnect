<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] text-[#111827] font-sans">
  <header class="h-[74px] bg-white border-b border-[#e5e7eb]">
    <div class="w-[1200px] mx-auto h-full flex items-center justify-between">
      <div class="text-[24px] font-extrabold">
        <span class="text-[#0ea5e9]">Relief</span><span class="text-black">Connect</span>
      </div>

      <div class="flex items-center gap-4">
        <div class="text-right leading-tight">
          <p class="font-bold text-[14px]">Ahmed Rahman</p>
          <p class="text-[#64748b] text-[12px] mt-1">Relief Recipient</p>
        </div>

        <!-- profile logo -->
        <div class="w-[42px] h-[42px] rounded-full bg-[#f1f5f9] flex items-center justify-center text-slate-600">
          <a href="victim_profile.php">
            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="3"></circle>
              <path d="M5 21c1-4 3.5-6 7-6s6 2 7 6"></path>
            </svg>
          </a>
        </div>

        <!-- logout logo -->
        <a href="index.php">
          <svg width="24" height="24" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
            <path d="M10 17l5-5-5-5"/>
            <path d="M15 12H3"/>
          </svg>
        </a>
      </div>
    </div>
  </header>

  <main class="w-[1200px] mx-auto pt-[30px] pb-[56px]">
    <h1 class="text-[31px] font-extrabold">Welcome, Ahmed Rahman</h1>
    <p class="text-[16px] text-[#475569] mt-[14px]">Registration ID: REL-2026-001234</p>

    <section class="grid grid-cols-3 gap-[25px] mt-[38px]">
      <div class="h-[220px] bg-white rounded-xl border border-[#e5e7eb] shadow-md p-[25px]">
        <div class="flex justify-between">
          <div class="w-[49px] h-[49px] bg-[#dcfce7] rounded-lg flex items-center justify-center text-[#22c55e]">
            <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path d="M20 6L9 17l-5-5"/>
              <circle cx="12" cy="12" r="10"/>
            </svg>
          </div>
          <span class="bg-[#dcfce7] text-[#16a34a] px-4 py-1 rounded-full text-[12px] font-bold h-fit">Active</span>
        </div>
        <h3 class="mt-[22px] text-[18px] font-extrabold">Registration Status</h3>
        <p class="text-[#22c55e] text-[26px] font-extrabold mt-[10px]">Registered</p>
        <p class="text-[#64748b] text-[12px] mt-[10px]">Since 2026-03-15</p>
      </div>

      <div class="h-[220px] bg-white rounded-xl border border-[#e5e7eb] shadow-md p-[25px]">
        <div class="w-[49px] h-[49px] bg-[#e0f2fe] rounded-lg flex items-center justify-center text-[#0ea5e9]">
          <svg width="27" height="27" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M12 21s7-5.4 7-12a7 7 0 0 0-14 0c0 6.6 7 12 7 12z"/>
            <circle cx="12" cy="9" r="2.5"/>
          </svg>
        </div>
        <h3 class="mt-[22px] text-[18px] font-extrabold">Assigned Camp</h3>
        <p class="text-[#0ea5e9] text-[18px] font-extrabold mt-[10px]">Eastern Relief Camp</p>
        <p class="text-[#475569] text-[12px] mt-[13px]">123 Relief Street, Eastern District</p>
      </div>

      <div class="h-[220px] bg-white rounded-xl border border-[#e5e7eb] shadow-md p-[25px]">
        <div class="flex justify-between">
          <div class="w-[49px] h-[49px] bg-[#f3e8ff] rounded-lg flex items-center justify-center text-[#a855f7]">
            <svg width="27" height="27" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
              <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
              <circle cx="9" cy="7" r="4"/>
              <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
          </div>
          <span class="bg-[#fee2e2] text-[#dc2626] px-4 py-1 rounded-full text-[12px] font-bold h-fit">High Priority</span>
        </div>
        <h3 class="mt-[22px] text-[18px] font-extrabold">Family Members</h3>
        <p class="text-[#a855f7] text-[26px] font-extrabold mt-[10px]">5</p>
        <p class="text-[#64748b] text-[12px] mt-[10px]">Registered members</p>
      </div>
    </section>

    <section class="h-[150px] mt-[31px] bg-gradient-to-r from-[#0ea5e9] to-[#0284c7] rounded-xl shadow-lg text-white p-[25px]">
      <h2 class="text-[20px] font-extrabold">Your Camp Support Information</h2>
      <div class="grid grid-cols-3 mt-[24px]">
        <div class="flex gap-4 items-center">
          <span>♙</span>
          <div>
            <p class="text-[12px] opacity-90">Camp Manager</p>
            <p class="font-extrabold text-[16px] mt-1">John Manager</p>
          </div>
        </div>
        <div class="flex gap-4 items-center">
          <span>⌕</span>
          <div>
            <p class="text-[12px] opacity-90">Contact Number</p>
            <p class="font-extrabold text-[16px] mt-1">+880 1712-345678</p>
          </div>
        </div>
        <div class="flex gap-4 items-center">
          <span>⌖</span>
          <div>
            <p class="text-[12px] opacity-90">Location</p>
            <p class="font-extrabold text-[16px] mt-1">123 Relief Street, Eastern District</p>
          </div>
        </div>
      </div>
    </section>

    <section class="grid grid-cols-2 gap-[17px] mt-[32px]">
      <a href="victim_new_request.php">
        <div class="h-[116px] bg-white rounded-xl border border-[#e5e7eb] shadow-md p-[25px] flex items-center gap-4">
          <div class="w-[64px] h-[64px] rounded-lg bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center text-3xl">▤</div>
          <div>
            <h3 class="text-[18px] font-extrabold">Submit Help Request</h3>
            <p class="text-[14px] text-[#475569] mt-2">Request assistance for your needs</p>
          </div>
        </div>
      </a>

      <div onclick="showTab('chat')" class="cursor-pointer h-[116px] bg-white rounded-xl border border-[#e5e7eb] shadow-md p-[25px] flex items-center gap-4">
        <div class="w-[64px] h-[64px] rounded-lg bg-[#dcfce7] text-[#22c55e] flex items-center justify-center text-3xl">▱</div>
        <div>
          <h3 class="text-[18px] font-extrabold">Chat with Camp Support</h3>
          <p class="text-[14px] text-[#475569] mt-2">Get instant help from camp staff</p>
        </div>
      </div>
    </section>

    <section class="bg-white rounded-xl border border-[#e5e7eb] shadow-md mt-[34px] overflow-hidden">
      <div class="grid grid-cols-3 h-[47px] border-b border-[#e5e7eb] text-[15px] font-bold">
        <button id="tab-status" onclick="showTab('status')" class="tab bg-[#0ea5e9] text-white">▧ &nbsp; Relief Status</button>
        <button id="tab-requests" onclick="showTab('requests')" class="tab text-[#475569]">▤ &nbsp; My Requests</button>
        <button id="tab-chat" onclick="showTab('chat')" class="tab text-[#475569]">▱ &nbsp; Camp Chat</button>
      </div>

      <div id="page-status" class="page p-[25px]">
        <div class="flex justify-between items-center">
          <h2 class="text-[26px] font-extrabold">Relief Status & Support</h2>
          <span class="bg-[#dcfce7] text-[#16a34a] px-5 py-3 rounded-lg font-bold">Assistance Active</span>
        </div>

        <div class="grid grid-cols-2 gap-[25px] mt-[26px]">
          <div class="h-[136px] bg-[#f8fafc] rounded-lg shadow-md border-l-4 border-[#22c55e] p-5">
            <h3 class="text-[18px] font-extrabold">🧊 Food Distribution</h3>
            <p class="text-[#475569] mt-5">Next distribution scheduled for tomorrow at 2:00 PM</p>
            <p class="text-[#64748b] text-[12px] mt-3">Location: Main Distribution Hall</p>
          </div>
          <div class="h-[136px] bg-[#f8fafc] rounded-lg shadow-md border-l-4 border-[#3b82f6] p-5">
            <h3 class="text-[18px] font-extrabold">ⓘ Medical Support</h3>
            <p class="text-[#475569] mt-5">Medical team available daily from 9 AM to 5 PM</p>
            <p class="text-[#64748b] text-[12px] mt-3">Location: Medical Unit, Block A</p>
          </div>
          <div class="h-[136px] bg-[#f8fafc] rounded-lg shadow-md border-l-4 border-[#a855f7] p-5">
            <h3 class="text-[18px] font-extrabold">⌂ Shelter Assignment</h3>
            <p class="text-[#475569] mt-5">Assigned to Block B, Unit 12</p>
            <p class="text-[#64748b] text-[12px] mt-3">Capacity: 6 persons</p>
          </div>
          <div class="h-[136px] bg-[#f8fafc] rounded-lg shadow-md border-l-4 border-[#f97316] p-5">
            <h3 class="text-[18px] font-extrabold">♙ Children's Education</h3>
            <p class="text-[#475569] mt-5">Temporary school running Monday to Friday, 10 AM - 3 PM</p>
            <p class="text-[#64748b] text-[12px] mt-3">Location: Education Center</p>
          </div>
        </div>

        <div class="mt-[25px] bg-[#fefce8] border border-[#fde68a] rounded-lg p-4">
          <h3 class="font-extrabold">ⓘ Important Notices</h3>
          <p class="ml-7 mt-3 text-[#334155] leading-7">
            Weekly health checkup scheduled for Friday, March 28<br>
            New clothing distribution on Monday, March 31<br>
            Family registration update required by end of month
          </p>
        </div>
      </div>

      <div id="page-requests" class="page hidden p-[25px]">
        <div class="flex justify-between items-center">
          <h2 class="text-[26px] font-extrabold">My Help Requests</h2>
          <a href="victim_new_request.php"><button class="bg-[#0ea5e9] text-white rounded-lg px-5 py-3 font-bold">+ New Request</button></a>
        </div>

        <div class="space-y-4 mt-[25px]">
          <div class="h-[160px] bg-[#f8fafc] border border-[#e5e7eb] rounded-lg p-5 flex justify-between">
            <div>
              <h3 class="text-[18px] font-extrabold">✓ &nbsp; Food Assistance</h3>
              <p class="text-[#64748b] text-[12px] ml-8">Submitted on 2026-03-20</p>
              <p class="text-[#334155] mt-5 ml-8">Need food supplies for family of 5</p>
              <p class="text-[#64748b] text-[12px] mt-2 ml-8">Request ID: 1</p>
            </div>
            <div class="text-right">
              <span class="bg-[#dcfce7] border border-[#86efac] text-[#16a34a] rounded-full px-4 py-1 text-[12px] font-bold">COMPLETED</span>
              <p class="text-[#16a34a] text-[12px] font-bold mt-[64px]">✓ Assistance provided</p>
            </div>
          </div>

          <div class="h-[160px] bg-[#f8fafc] border border-[#e5e7eb] rounded-lg p-5 flex justify-between">
            <div>
              <h3 class="text-[18px] font-extrabold">◷ &nbsp; Medical Assistance</h3>
              <p class="text-[#64748b] text-[12px] ml-8">Submitted on 2026-03-22</p>
              <p class="text-[#334155] mt-5 ml-8">Require medical attention for elderly family member</p>
              <p class="text-[#64748b] text-[12px] mt-2 ml-8">Request ID: 2</p>
            </div>
            <div class="text-right">
              <span class="bg-[#dbeafe] border border-[#93c5fd] text-[#2563eb] rounded-full px-4 py-1 text-[12px] font-bold">IN PROGRESS</span>
              <p class="text-[#2563eb] text-[12px] font-bold mt-[64px]">⌛ Being processed</p>
            </div>
          </div>

          <div class="h-[160px] bg-[#f8fafc] border border-[#e5e7eb] rounded-lg p-5 flex justify-between">
            <div>
              <h3 class="text-[18px] font-extrabold">ⓘ &nbsp; Shelter Assistance</h3>
              <p class="text-[#64748b] text-[12px] ml-8">Submitted on 2026-03-24</p>
              <p class="text-[#334155] mt-5 ml-8">Temporary shelter needed for family</p>
              <p class="text-[#64748b] text-[12px] mt-2 ml-8">Request ID: 3</p>
            </div>
            <div class="text-right">
              <span class="bg-[#fef9c3] border border-[#fde047] text-[#ca8a04] rounded-full px-4 py-1 text-[12px] font-bold">PENDING</span>
              <p class="text-[#ca8a04] text-[12px] font-bold mt-[64px]">⏱ Awaiting review</p>
            </div>
          </div>
        </div>
      </div>

      <div id="page-chat" class="page hidden p-[25px]">
        <div class="flex justify-between items-center">
          <h2 class="text-[26px] font-extrabold">Camp Support Chat</h2>
          <p class="text-[#475569] text-[14px]"><span class="inline-block w-2 h-2 bg-[#22c55e] rounded-full mr-2"></span>Support Available</p>
        </div>

        <div class="mt-[18px] h-[382px] bg-[#f8fafc] border border-[#e5e7eb] rounded-lg p-4 relative">
          <div class="absolute left-4 top-4 w-[258px] bg-white border border-[#e5e7eb] rounded-lg p-4">
            <p class="text-[14px]">Hello! How can we assist you today?</p>
            <p class="text-[#64748b] text-[12px] mt-2">10:30 AM</p>
          </div>

          <div class="absolute right-4 top-[98px] w-[300px] bg-[#0ea5e9] text-white rounded-lg p-4">
            <p class="text-[14px]">I need information about food distribution</p>
            <p class="text-blue-100 text-[12px] mt-2">10:32 AM</p>
          </div>

          <div class="absolute left-4 top-[178px] w-[320px] bg-white border border-[#e5e7eb] rounded-lg p-4">
            <p class="text-[14px]">Food distribution is scheduled for tomorrow<br>at 2 PM at the main hall.</p>
            <p class="text-[#64748b] text-[12px] mt-2">10:35 AM</p>
          </div>
        </div>

        <div class="flex gap-2 mt-[16px]">
          <input class="h-[51px] flex-1 border border-[#cbd5e1] rounded-lg px-4 text-[15px] outline-none" placeholder="Type your message..." />
          <button class="w-[84px] bg-[#0ea5e9] text-white rounded-lg font-bold">Send</button>
        </div>
      </div>
    </section>
  </main>

  <footer class="h-[88px] bg-black text-[#94a3b8] flex items-center justify-center text-[15px]">
    © 2026 ReliefConnect. Supporting communities in need.
  </footer>

  <script>
    function showTab(name) {
      document.querySelectorAll(".page").forEach(p => p.classList.add("hidden"));
      document.querySelectorAll(".tab").forEach(t => {
        t.classList.remove("bg-[#0ea5e9]", "text-white");
        t.classList.add("text-[#475569]");
      });

      document.getElementById("page-" + name).classList.remove("hidden");

      const activeTab = document.getElementById("tab-" + name);
      activeTab.classList.add("bg-[#0ea5e9]", "text-white");
      activeTab.classList.remove("text-[#475569]");
    }
  </script>
</body>
</html>