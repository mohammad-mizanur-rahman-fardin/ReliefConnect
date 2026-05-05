<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate Supplies</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white font-sans text-[#0f172a]">

  <!-- Top Bar -->
  <?php include 'donor_top_bar.php'; ?>

  <div class="flex">
    <!-- Sidebar -->
    <?php include 'donor_sidebar.php'; ?>
    
    <main class="w-[1000px] mx-auto bg-[#f8fafc] min-h-screen pt-[14px] pb-[28px]">
      
      <!-- Header -->
      <header class="w-full mx-auto flex items-start gap-[22px] mb-[44px] mt-[15px] px-[20px]">
        <a href="donor_history.php" class="mt-[9px] text-[#0f172a]">
          <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M19 12H5"></path>
            <path d="M12 19l-7-7 7-7"></path>
          </svg>
        </a>
  
        <div>
          <h1 class="text-[30px] leading-[36px] font-extrabold text-black">Donate Supplies</h1>
          <p class="text-[15px] text-[#475569] mt-[4px]">Donate food, medicine, or shelter items</p>
        </div>
      </header>
  
      <!-- Card -->
      <section class="w-[620px] mx-auto bg-white rounded-xl border border-[#e2e8f0] shadow-xl px-[30px] pt-[28px] pb-[28px]">
        
        <!-- Icon -->
        <div class="flex justify-center mb-[28px]">
          <div class="w-[78px] h-[78px] rounded-full bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center">
            <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="2.6" viewBox="0 0 24 24">
              <path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"></path>
              <path d="M3.3 7.8L12 13l8.7-5.2"></path>
              <path d="M12 22V13"></path>
            </svg>
          </div>
        </div>
  
        <form>
          <div class="flex items-center justify-between mb-[12px]">
            <label class="text-[13px] font-bold text-[#334155]">
              Supply Items <span class="text-red-500">*</span>
            </label>
  
            <button
              type="button"
              onclick="addSupplyItem()"
              class="h-[30px] px-[13px] rounded-lg bg-[#0ea5e9] text-white text-[12px] font-bold flex items-center gap-[5px]"
            >
              <span class="text-[17px] mt-[-3px] leading-none">+</span>
              Add Item
            </button>
          </div>
  
          <div id="supplyItemsWrapper" class="mb-[24px]">
            <!-- Item rows will be here -->
          </div>
  
  
          <label class="block text-[13px] font-bold text-[#334155]">
            Select Camp <span class="text-red-500">*</span>
          </label>
          <select class="mt-[10px] h-[43px] w-full rounded-lg border border-[#cbd5e1] bg-white px-[14px] text-[13px] outline-none mb-[23px]">
            <option>Select a Camp</option>
            <option>Eastern Relief Camp</option>
            <option>Northern Emergency Center</option>
            <option>Western Support Hub</option>
          </select>
  
          <label class="block text-[13px] font-bold text-[#334155]">
            Pickup Address <span class="text-red-500">*</span>
          </label>
          <textarea
            class="mt-[10px] h-[77px] w-full rounded-lg border border-[#cbd5e1] px-[15px] py-[13px] text-[15px] outline-none resize-none placeholder:text-[#8b8b8b] mb-[23px]"
            placeholder="Enter full address for pickup"
          ></textarea>
  
          <label class="block text-[13px] font-bold text-[#334155]">
            Preferred Pickup Date <span class="text-red-500">*</span>
          </label>
          <input
            type="date"
            class="mt-[10px] h-[43px] w-full rounded-lg border border-[#cbd5e1] px-[15px] text-[14px] outline-none mb-[23px]"
          />
  
          <label class="block text-[13px] font-bold text-[#334155]">
            Contact Number <span class="text-red-500">*</span>
          </label>
          <input
            class="mt-[10px] h-[43px] w-full rounded-lg border border-[#cbd5e1] px-[15px] text-[15px] outline-none placeholder:text-[#8b8b8b] mb-[23px]"
            placeholder="Enter phone number"
          />
  
          <label class="block text-[13px] font-bold text-[#334155]">
            Additional Notes
          </label>
          <textarea
            class="mt-[10px] h-[77px] w-full rounded-lg border border-[#cbd5e1] px-[15px] py-[13px] text-[15px] outline-none resize-none placeholder:text-[#8b8b8b] mb-[27px]"
            placeholder="Any special instructions or information"
          ></textarea>
  
          <div class="grid grid-cols-2 gap-[10px]">
            <a href="#" class="h-[45px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[14px] bg-white flex items-center justify-center">
              Cancel
            </a>
  
            <button onclick="goToTrackDonation(event)" type="button" class="h-[45px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[14px] flex items-center justify-center gap-[9px]">
              <svg width="17" height="17" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                <path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"></path>
                <path d="M3.3 7.8L12 13l8.7-5.2"></path>
              </svg>
              Schedule Pickup
            </button>
          </div>
        </form>
      </section>
    </main>
  </div>

  <script>
    let itemCount = 0;

    function createSupplyItem() {
      itemCount++;

      const row = document.createElement("div");
      row.className = "supply-item bg-[#f8fafc] rounded-lg px-[13px] py-[14px] mb-[13px] relative";

      row.innerHTML = `
        <div class="grid grid-cols-[160px_1fr_1fr] gap-[12px] items-end">
          <div>
            <label class="item-label block text-[12px] font-bold text-[#334155] mb-[8px]">
              Item ${itemCount} Type
            </label>
            <select
              name="item_type[]"
              class="h-[38px] w-full border border-black bg-white rounded-lg px-[10px] text-[12px] outline-none"
            >
              <option>Select an Option</option>
              <option>Food</option>
              <option>Medicine</option>
              <option>Shelter</option>
            </select>
          </div>

          <input
            name="item_name[]"
            class="h-[38px] rounded-lg border border-[#cbd5e1] px-[12px] text-[13px] outline-none placeholder:text-[#8b8b8b]"
            placeholder="Item name"
          />

          <input
            name="quantity[]"
            class="h-[38px] rounded-lg border border-[#cbd5e1] px-[12px] text-[13px] outline-none placeholder:text-[#8b8b8b]"
            placeholder="Quantity"
          />
        </div>

        <button
          type="button"
          onclick="removeSupplyItem(this)"
          class="absolute right-[14px] top-[14px] text-[#ef4444]"
        >
          <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M3 6h18"></path>
            <path d="M8 6V4h8v2"></path>
            <path d="M6 6l1 15h10l1-15"></path>
          </svg>
        </button>
      `;

      document.getElementById("supplyItemsWrapper").appendChild(row);
      updateItemLabels();
    }

    function addSupplyItem() {
      createSupplyItem();
    }

    function goToTrackDonation(e) {
      e.preventDefault();

      const btn = event.currentTarget;
      btn.classList.add("scale-95", "opacity-80");

      setTimeout(() => {
        window.location.href = "donor_track_donation.php";
      }, 300);
    }

    function removeSupplyItem(button) {
      button.closest(".supply-item").remove();
      updateItemLabels();
    }

    function updateItemLabels() {
      const rows = document.querySelectorAll(".supply-item");

      rows.forEach((row, index) => {
        row.querySelector(".item-label").textContent = `Item ${index + 1} Type`;
      });

      itemCount = rows.length;
    }

    // Start with 2 rows like your Figma design
    createSupplyItem();
    createSupplyItem();
  </script>
</body>
</html>