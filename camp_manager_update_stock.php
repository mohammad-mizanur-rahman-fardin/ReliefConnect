<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update Camp Stock</title>
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
        <h1 class="text-[30px] font-extrabold leading-[36px]">Update Camp Stock</h1>
        <p class="text-[14px] text-[#475569] mt-[4px]">Update inventory levels</p>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white border border-[#e2e8f0] rounded-xl shadow-xl px-[30px] pt-[28px] pb-[30px]">

      <!-- Icon -->
      <div class="flex justify-center mb-[26px]">
        <div class="w-[78px] h-[78px] rounded-full bg-[#dcfce7] flex items-center justify-center text-[#22c55e]">
          <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="2.6" viewBox="0 0 24 24">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            <path d="M3.3 7l8.7 5 8.7-5"/>
            <path d="M12 22V12"/>
          </svg>
        </div>
      </div>

      <!-- Form -->
      <form>

        <!-- Category -->
        <label class="block text-[13px] font-bold text-[#334155]">
          Category <span class="text-red-500">*</span>
        </label>
        <select class="mt-[8px] w-full h-[43px] border border-black bg-white px-[12px] text-[12px] outline-none mb-[24px]">
          <option>Select an Option</option>
          <option>Food</option>
          <option>Medicine</option>
          <option>Shelter</option>
        </select>

        <!-- Item -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Item <span class="text-red-500">*</span>
        </label>
        <input
          class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none mb-[22px]"
        />

        <!-- Current Stock -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Current Stock Quantity <span class="text-red-500">*</span>
        </label>
        <input
          class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none mb-[22px] placeholder:text-[#94a3b8]"
          placeholder="Enter current quantity"
        />

        <!-- Unit -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Unit <span class="text-red-500">*</span>
        </label>
        <input
          class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none mb-[22px] placeholder:text-[#94a3b8]"
          placeholder="Enter units added"
        />

        <!-- Threshold -->
        <label class="block text-[13px] font-bold text-[#334155] mb-[6px]">
          Minimum Threshold <span class="text-red-500">*</span>
        </label>
        <input
          class="w-full h-[49px] rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none placeholder:text-[#94a3b8]"
          placeholder="Alert threshold quantity"
        />
        <p class="text-[12px] text-[#64748b] mt-[6px] mb-[24px]">
          Alert when stock falls below this level
        </p>

        <!-- Buttons -->
        <div class="grid grid-cols-2 gap-[14px]">
          
          <a href="#" class="h-[51px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[15px] flex items-center justify-center bg-white">
            Cancel
          </a>

          <button
            type="button"
            onclick="goToUpdateStock(this)"
            class="h-[51px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-[10px] disabled:opacity-80 disabled:cursor-not-allowed"
          >
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
              <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"/>
              <path d="M17 21v-8H7v8"/>
              <path d="M7 3v5h8"/>
            </svg>
            Update Stock
          </button>

        </div>

      </form>

    </div>

  </main>

  <script>
    function goToUpdateStock(button) {
      button.disabled = true;

      button.innerHTML = `
        <span class="w-5 h-5 border-2 border-white border-t-transparent rounded-full animate-spin"></span>
        Updating...
      `;

      setTimeout(() => {
        window.location.href = "camp_manager_update_stock_success.php";
      }, 800);
    }
  </script>

</body>
</html>