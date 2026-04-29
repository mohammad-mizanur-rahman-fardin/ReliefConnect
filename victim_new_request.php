<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Submit Help Request</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-sans text-[#0f172a]">
  <main class="w-[900px] mx-auto min-h-screen pb-12">
    <!-- Header -->
    <header class="h-[82px] flex items-start gap-6 px-3 pt-5">
      <a href="victim_dashboard.php">
          <button class="text-[#1e293b] mt-1">
            <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M19 12H5"></path>
              <path d="M12 19l-7-7 7-7"></path>
            </svg>
          </button>
      </a>

      <div>
        <h1 class="text-[29px] leading-[32px] font-extrabold text-black">Submit Help Request</h1>
        <p class="text-[15px] text-[#475569] mt-[7px]">Tell us what assistance you need</p>
      </div>
    </header>

    <!-- Card -->
    <section class="bg-white rounded-xl border border-[#e2e8f0] shadow-xl px-[33px] pt-[33px] pb-[46px]">
      <div class="flex justify-center">
        <div class="w-[77px] h-[77px] rounded-full bg-[#e0f2fe] flex items-center justify-center text-[#0ea5e9]">
          <svg width="42" height="42" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <path d="M14 2v6h6"/>
            <path d="M9 13h6"/>
            <path d="M9 17h6"/>
            <path d="M9 9h1"/>
          </svg>
        </div>
      </div>

      <!-- Important info -->
      <div class="mt-[32px] bg-[#fefce8] border border-[#fde68a] rounded-lg px-[16px] py-[15px] flex gap-4">
        <div class="text-[#f59e0b] pt-[2px]">
          <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M12 8v5"></path>
            <path d="M12 16h.01"></path>
          </svg>
        </div>
        <div>
          <h3 class="font-extrabold text-[17px] leading-5">Important Information</h3>
          <p class="text-[13px] text-[#334155] mt-[9px] leading-[20px]">
            Your request will be reviewed by camp staff. Critical requests are prioritized and addressed immediately. You will receive<br>
            a response within a short time.
          </p>
        </div>
      </div>

      <form class="mt-[32px]">
        <label class="text-[13px] font-bold text-[#334155]">
          Type of Assistance Needed <span class="text-red-500">*</span>
        </label>

        <div class="grid grid-cols-3 gap-[13px] mt-[14px]">
          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#dcfce7] text-[#22c55e] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"></path>
                <path d="M3.3 7.8L12 13l8.7-5.2"></path>
                <path d="M12 22V13"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Food & Water</span>
          </button>

          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#fee2e2] text-[#ef4444] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M20.8 4.6c-1.8-1.8-4.7-1.7-6.4.1L12 7.2 9.6 4.7c-1.7-1.8-4.6-1.9-6.4-.1-2 2-2.1 5.2-.1 7.3l8.9 8.8 8.9-8.8c2-2.1 1.9-5.3-.1-7.3z"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Medical Assistance</span>
          </button>

          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#f3e8ff] text-[#a855f7] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M3 11l9-7 9 7"></path>
                <path d="M5 10v10h14V10"></path>
                <path d="M9 20v-6h6v6"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Shelter</span>
          </button>

          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#dbeafe] text-[#3b82f6] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M6 7h12l-1 14H7L6 7z"></path>
                <path d="M9 7V4h6v3"></path>
                <path d="M10 11v6"></path>
                <path d="M14 11v6"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Clothing</span>
          </button>

          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#ffedd5] text-[#f97316] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <circle cx="9" cy="7" r="3"></circle>
                <path d="M3 21v-2a4 4 0 0 1 4-4h4"></path>
                <path d="M16 11a3 3 0 1 0 0-6"></path>
                <path d="M21 21v-2a4 4 0 0 0-3-3.8"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Family Support</span>
          </button>

          <button type="button" class="h-[101px] rounded-lg border border-[#cbd5e1] bg-white flex flex-col items-center justify-center  hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <div class="w-[38px] h-[38px] rounded-lg bg-[#f1f5f9] text-[#475569] flex items-center justify-center">
              <svg width="21" height="21" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7z"></path>
                <path d="M14 2v5h5"></path>
                <path d="M9 13h6"></path>
                <path d="M9 17h6"></path>
              </svg>
            </div>
            <span class="mt-[12px] text-[14px] font-extrabold text-black">Other</span>
          </button>
        </div>

        <label class="block text-[13px] font-bold text-[#334155] mt-[25px]">
          Urgency Level <span class="text-red-500">*</span>
        </label>

        <div class="grid grid-cols-2 gap-[13px] mt-[14px]">
          <button type="button" class="h-[74px] rounded-lg border border-[#cbd5e1] bg-white flex items-center px-[17px] text-left gap-4  hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <span class="w-[16px] h-[16px] rounded-full bg-[#ef4444]"></span>
            <span>
              <strong class="block text-[16px] text-black">Critical</strong>
              <span class="text-[12px] text-[#334155]">Life-threatening situation</span>
            </span>
          </button>

          <button type="button" class="h-[74px] rounded-lg border border-[#cbd5e1] bg-white flex items-center px-[17px] text-left gap-4  hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <span class="w-[16px] h-[16px] rounded-full bg-[#f97316]"></span>
            <span>
              <strong class="block text-[16px] text-black">High</strong>
              <span class="text-[12px] text-[#334155]">Urgent need within 24 hours</span>
            </span>
          </button>

          <button type="button" class="h-[74px] rounded-lg border border-[#cbd5e1] bg-white flex items-center px-[17px] text-left gap-4  hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <span class="w-[16px] h-[16px] rounded-full bg-[#eab308]"></span>
            <span>
              <strong class="block text-[16px] text-black">Medium</strong>
              <span class="text-[12px] text-[#334155]">Need within 2-3 days</span>
            </span>
          </button>

          <button type="button" class="h-[74px] rounded-lg border border-[#cbd5e1] bg-white flex items-center px-[17px] text-left gap-4  hover:bg-[#f0f9ff] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0ea5e9]">
            <span class="w-[16px] h-[16px] rounded-full bg-[#22c55e]"></span>
            <span>
              <strong class="block text-[16px] text-black">Low</strong>
              <span class="text-[12px] text-[#334155]">Can wait a few days</span>
            </span>
          </button>
        </div>

        <label class="block mt-[24px] text-[13px] font-bold text-[#334155]">
          Number of Family Members Affected <span class="text-red-500">*</span>
        </label>
        <input class="mt-[12px] h-[49px] w-full rounded-lg border border-[#cbd5e1] px-[16px] text-[16px] outline-none placeholder:text-[#8b8b8b]" placeholder="Enter number of people" />

        <label class="block mt-[24px] text-[13px] font-bold text-[#334155]">
          Detailed Description <span class="text-red-500">*</span>
        </label>
        <textarea class="mt-[12px] h-[142px] w-full rounded-lg border border-[#cbd5e1] px-[16px] py-[15px] text-[16px] outline-none resize-none placeholder:text-[#8b8b8b]" placeholder="Please describe your situation and what help you need in detail..."></textarea>
        <p class="text-[11px] text-[#64748b] mt-[8px]">Be as specific as possible to help us understand your needs better</p>

        <label class="block mt-[22px] text-[13px] font-bold text-[#334155]">
          Specific Items or Services Needed <span class="font-normal">(Optional)</span>
        </label>
        <textarea class="mt-[12px] h-[97px] w-full rounded-lg border border-[#cbd5e1] px-[16px] py-[15px] text-[16px] outline-none resize-none placeholder:text-[#8b8b8b]" placeholder="e.g., Baby formula, medicines, blankets, etc."></textarea>

        
        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Preferred Contact Method <span class="text-red-500">*</span>
        </label>

        <select class="mt-[12px] h-[51px] w-full rounded-md border border-black bg-white px-[22px] text-[16px] text-black outline-none">
          <option selected>Select contact method</option>
          <option>Phone Call</option>
          <option>SMS/Text Message</option>
          <option>In-Person Visit</option>
          <option>Camp Chat System</option>
        </select>
        
        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Preferred Time for Contact
        </label>

        <select class="mt-[12px] h-[51px] w-full rounded-md border border-black bg-white px-[22px] text-[16px] text-black outline-none">
          <option selected>Any time</option>
          <option>Morning (8 AM - 12 PM)</option>
          <option>Afternoon (12 PM - 5 PM)</option>
          <option>Evening (5 PM - 8 PM)</option>
        </select>
        
        <div class="mt-[28px] bg-[#f8fafc] border border-[#e2e8f0] rounded-lg px-[16px] py-[14px] text-[12px] text-[#334155] leading-[17px]">
          <strong class="text-black">Privacy Notice:</strong>
          All information provided will be kept confidential and used only for the purpose of providing relief assistance. Your data will be<br>
          handled according to our privacy policy.
        </div>

        <div class="grid grid-cols-2 gap-[13px] mt-[41px]">
          <a href="victim_dashboard.php"
             class="h-[51px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[15px] bg-white flex items-center justify-center">
            Cancel
          </a>
<button type="button"
  onclick="this.disabled=true; this.innerHTML=`<span class='w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin'></span> Submitting...`; setTimeout(()=>location.href='victim_success.php', 800);"
  class="h-[51px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-3 disabled:opacity-80 disabled:cursor-not-allowed">

  Submit Request
</button>
        </div>
      </form>
    </section>

    <p class="text-center text-[14px] text-[#475569] mt-[25px]">
      Need immediate help? Contact camp emergency line:
      <span class="text-[#0ea5e9] font-extrabold">+880 1712-345678</span>
    </p>
  </main>
</body>
</html>