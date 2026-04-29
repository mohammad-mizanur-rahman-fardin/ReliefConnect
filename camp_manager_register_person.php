<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register Person</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <main class="w-[640px] mx-auto pt-[16px] pb-[16px]">
    <!-- Header -->
    <header class="flex items-start gap-[23px] mb-[28px]">
      <button class="mt-[21px] text-[#0f172a]">
        <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 12H5"></path>
          <path d="M12 19l-7-7 7-7"></path>
        </svg>
      </button>

      <div>
        <h1 class="text-[30px] leading-[36px] font-extrabold text-black">Register Person</h1>
        <p class="text-[15px] text-[#475569] mt-[4px]">Add affected individual or family</p>
      </div>
    </header>

    <!-- Card -->
    <section class="bg-white rounded-xl border border-[#e2e8f0] shadow-xl px-[30px] pt-[30px] pb-[32px]">
      <div class="flex justify-center">
        <div class="w-[79px] h-[79px] rounded-full bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center">
          <svg width="43" height="43" fill="none" stroke="currentColor" stroke-width="2.6" viewBox="0 0 24 24">
            <circle cx="10" cy="7" r="4"></circle>
            <path d="M3 21v-2a6 6 0 0 1 12 0v2"></path>
            <path d="M19 8v6"></path>
            <path d="M16 11h6"></path>
          </svg>
        </div>
      </div>

      <form class="mt-[33px]">
        <label class="block text-[13px] font-bold text-[#334155]">
          Number of Members <span class="text-red-500">*</span>
        </label>
        <input
          class="mt-[10px] h-[49px] w-full rounded-lg border border-[#cbd5e1] px-[15px] text-[16px] outline-none placeholder:text-[#8b8b8b]"
          placeholder="Enter number"
        />

        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Full Name / Family Name <span class="text-red-500">*</span>
        </label>
        <input
          class="mt-[10px] h-[49px] w-full rounded-lg border border-[#cbd5e1] px-[15px] text-[16px] outline-none placeholder:text-[#8b8b8b]"
          placeholder="Enter name"
        />

        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Registration Type <span class="text-red-500">*</span>
        </label>
        <select
          class="mt-[10px] h-[43px] w-full border border-black bg-white px-[12px] text-[12px] text-black outline-none"
        >
          <option>Select an Option</option>
          <option>Individual</option>
          <option>Family</option>
        </select>

        <label class="block mt-[43px] text-[13px] font-bold text-[#334155]">
          Contact Number <span class="text-red-500">*</span>
        </label>
        <input
          class="mt-[10px] h-[49px] w-full rounded-lg border border-[#cbd5e1] px-[15px] text-[16px] outline-none placeholder:text-[#8b8b8b]"
          placeholder="Enter phone number"
        />

        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Primary Needs <span class="text-red-500">*</span>
        </label>
        <select
          class="mt-[10px] h-[43px] w-full border border-black bg-white px-[12px] text-[12px] text-black outline-none"
        >
          <option>Select an Option</option>
          <option>Food</option>
          <option>Shelter</option>
          <option>Medical</option>
          <option>Clothing</option>
        </select>

        <label class="block mt-[43px] text-[13px] font-bold text-[#334155]">
          Medical Conditions
        </label>
        <textarea
          class="mt-[10px] h-[101px] w-full rounded-lg border border-[#cbd5e1] px-[15px] py-[14px] text-[16px] outline-none resize-none placeholder:text-[#8b8b8b]"
          placeholder="Any medical conditions or medications needed"
        ></textarea>

        <label class="block mt-[25px] text-[13px] font-bold text-[#334155]">
          Special Needs / Notes
        </label>
        <textarea
          class="mt-[10px] h-[97px] w-full rounded-lg border border-[#cbd5e1] px-[15px] py-[14px] text-[16px] outline-none resize-none placeholder:text-[#8b8b8b]"
          placeholder="Children, elderly, disabilities, etc."
        ></textarea>

        <div class="grid grid-cols-2 gap-[13px] mt-[28px]">
          <a
            href="#"
            class="h-[51px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[15px] bg-white flex items-center justify-center"
          >
            Cancel
          </a>

          <a href="javascript:void(0)"
             onclick="goToRegister(this)"
             class="h-[51px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-[10px]">

            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
              <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
              <path d="M17 21v-8H7v8"></path>
              <path d="M7 3v5h8"></path>
            </svg>

            Register Person
          </a>
        </div>
      </form>
    </section>
  </main>
  <script>
    function goToRegister(btn) {
      // disable clicking
      btn.style.pointerEvents = "none";

      // animate (scale + loading)
      btn.classList.add("scale-95");

      btn.innerHTML = `
        <span class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
        Processing...
      `;

      // redirect after animation
      setTimeout(() => {
        window.location.href = "camp_manager_register_person_success.php";
      }, 900);
    }
  </script>
</body>
</html>