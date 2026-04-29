<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assign Task</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">

  <main class="w-[640px] mx-auto pt-[18px]">

    <!-- Header -->
    <div class="flex items-start gap-[20px] mb-[24px]">
      <button class="mt-[18px]">
        <svg width="22" height="22" fill="none" stroke="#0f172a" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 12H5"/>
          <path d="M12 19l-7-7 7-7"/>
        </svg>
      </button>

      <div>
        <h1 class="text-[30px] font-extrabold leading-[36px]">Assign Task</h1>
        <p class="text-[14px] text-[#475569] mt-[4px]">Assign task to volunteer</p>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white border border-[#e2e8f0] rounded-xl shadow-xl px-[30px] pt-[28px] pb-[30px]">

      <!-- Icon -->
      <div class="flex justify-center mb-[26px]">
        <div class="w-[78px] h-[78px] rounded-full bg-[#fff7ed] flex items-center justify-center text-[#f97316]">
          <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="2.6" viewBox="0 0 24 24">
            <path d="M9 2h6"/>
            <path d="M9 6h6"/>
            <rect x="5" y="4" width="14" height="16" rx="2"/>
            <path d="M9 10h6"/>
            <path d="M9 14h6"/>
          </svg>
        </div>
      </div>

      <!-- Form -->
      <form>

        <!-- Volunteer ID -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Volunteer ID
        </label>
        <input class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none mb-[22px]"/>

        <!-- Task Type -->
        <label class="block text-[13px] font-bold text-[#334155]">
          Task Type <span class="text-red-500">*</span>
        </label>
        <select class="mt-[8px] w-full h-[43px] border border-black bg-white px-[12px] text-[12px] outline-none mb-[24px]">
          <option>Select an Option</option>
          <option>Food Distribution</option>
          <option>Medical Assistance</option>
          <option>Registration Desk</option>
        </select>

        <!-- Priority -->
        <label class="block text-[13px] font-bold text-[#334155]">
          Priority <span class="text-red-500">*</span>
        </label>
        <select class="mt-[8px] w-full h-[43px] border border-black bg-white px-[12px] text-[12px] outline-none mb-[24px]">
          <option>Select an Option</option>
          <option>High</option>
          <option>Medium</option>
          <option>Low</option>
        </select>

        <!-- Deadline -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Deadline <span class="text-red-500">*</span>
        </label>
        <input type="date" class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none mb-[22px]"/>

        <!-- Description -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Task Description
        </label>
        <textarea
          class="w-full h-[110px] rounded-lg border border-[#cbd5e1] px-[15px] py-[14px] text-[15px] outline-none resize-none placeholder:text-[#94a3b8] mb-[26px]"
          placeholder="Provide specific instructions or details"
        ></textarea>

        <!-- Buttons -->
        <div class="grid grid-cols-2 gap-[14px]">
          
          <a href="#" class="h-[51px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[15px] flex items-center justify-center bg-white">
            Cancel
          </a>

          <button type="submit" class="h-[51px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-[10px]">
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
              <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
              <path d="M17 21v-8H7v8"/>
              <path d="M7 3v5h8"/>
            </svg>
            Assign Task
          </button>

        </div>

      </form>

    </div>

  </main>

</body>
</html>