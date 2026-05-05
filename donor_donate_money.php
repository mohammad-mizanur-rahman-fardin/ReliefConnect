<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donate Money</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Bar -->
  <?php include 'donor_top_bar.php'; ?>

<div class="flex">
  
  <!-- sidebar -->
  <?php include 'donor_sidebar.php'; ?>
  <main class="w-[1000px] mx-auto pt-[24px] px-3">
  
    <!-- Header -->
    <div class="flex items-start gap-[20px] mb-[28px]">
      <a href="donor_history.php" class="mt-[18px]">
        <svg width="22" height="22" fill="none" stroke="#0f172a" stroke-width="2" viewBox="0 0 24 24">
          <path d="M19 12H5"/>
          <path d="M12 19l-7-7 7-7"/>
        </svg>
      </a>
  
      <div>
        <h1 class="text-[30px] font-extrabold leading-[36px]">Donate Money</h1>
        <p class="text-[14px] text-[#475569] mt-[4px]">
          Choose a payment method and submit your donation details
        </p>
      </div>
    </div>
  
    <!-- GRID -->
    <div class="grid grid-cols-2 gap-[24px] mb-[28px]">
  
      <!-- LEFT SIDE -->
      <div class="space-y-[18px]">
  
        <!-- Mobile Banking -->
        <div class="bg-white border border-[#e2e8f0] rounded-xl shadow-md p-[18px]">
          <div class="flex items-center gap-2 mb-[10px]">
            <span class="text-[#0ea5e9] text-[18px]">📱</span>
            <h3 class="font-bold text-[16px]">Mobile Banking</h3>
          </div>
  
          <p class="text-[13px] text-[#64748b] mb-[16px]">
            Send money to any of the following numbers and submit the transaction details below.
          </p>
  
          <!-- bKash -->
          <div class="flex justify-between items-center border rounded-lg p-[12px] mb-[10px]">
            <div class="flex items-center gap-3">
              <img src="assets\bkash.png" class="ml-7 h-[34px] rounded-md"></img>
            </div>
            <div class="text-right mr-5">
              <p class="font-bold text-[13px]">01712-345678</p>
              <p class="text-[11px] text-[#64748b]">Account Number</p>
            </div>
          </div>
  
          <!-- Nagad -->
          <div class="flex justify-between items-center border rounded-lg p-[12px] mb-[10px]">
            <div class="flex items-center gap-3">
              <img src="assets/nagad.png" class="ml-4 h-[34px] rounded-md"></img>
            </div>
            <div class="text-right mr-5">
              <p class="font-bold text-[13px]">01812-345678</p>
              <p class="text-[11px] text-[#64748b]">Account Number</p>
            </div>
          </div>
  
          <!-- Rocket -->
          <div class="flex justify-between items-center border rounded-lg p-[12px] mb-[14px]">
            <div class="flex items-center gap-3">
              <img src="assets/rocket.png" class="ml-6 h-[34px] rounded-md"></img>
            </div>
            <div class="text-right mr-5">
              <p class="font-bold text-[13px]">01912-345678</p>
              <p class="text-[11px] text-[#64748b]">Account Number</p>
            </div>
          </div>
  
          <!-- Note -->
          <div class="bg-[#e0f2fe] text-[#0369a1] text-[12px] p-[10px] rounded-lg px-[22px]">
            Note: After sending money, please fill out the form with your transaction details.
          </div>
        </div>
  
        <!-- Bank Transfer -->
        <div class="bg-white border border-[#e2e8f0] rounded-xl shadow-md p-[18px]">
          <div class="flex items-center gap-2 mb-[10px]">
            <span class="text-green-500 text-[18px]">🏦</span>
            <h3 class="font-bold text-[16px]">Bank Transfer</h3>
          </div>
  
          <p class="text-[13px] text-[#64748b] mb-[14px]">
            Transfer money to our bank account and submit the transaction proof below.
          </p>
  
          <div class="bg-[#f8fafc] p-[12px] rounded-lg text-[13px] space-y-[6px]">
            <p><strong>Account Name:</strong> ReliefConnect Foundation</p>
            <p><strong>Account Number:</strong> 1234567890</p>
            <p><strong>Bank Name:</strong> Standard Bank</p>
            <p><strong>Branch:</strong> Main Branch</p>
            <p><strong>Routing Number:</strong> 123456789</p>
          </div>
  
          <div class="bg-[#dcfce7] text-[#15803d] text-[12px] p-[10px] rounded-lg mt-[12px] px-[25px]">
            Note: You can upload your bank transfer receipt in the form.
          </div>
        </div>
  
      </div>
  
      <!-- RIGHT SIDE FORM -->
      <div class="bg-white border border-[#e2e8f0] rounded-xl shadow-md px-[22px] py-[24px] h-[fit-content]">
  
        <!-- Icon -->
        <div class="flex justify-center mb-[18px]">
          <div class="w-[70px] h-[70px] bg-[#e0f2fe] rounded-full flex items-center justify-center text-[#0ea5e9] text-[30px]">
            $
          </div>
        </div>
  
        <h3 class="text-center font-bold text-[18px] mb-[18px]">Submit Donation Details</h3>
  
        <!-- Payment Method -->
        <label class="text-[13px] font-bold">
          Payment Method Used <span class="text-red-500">*</span>
        </label>

        <select class="mt-[8px] w-full h-[42px] border rounded-lg px-[12px] text-[13px] mb-[16px] outline-none">
          <option selected disabled>Select payment method</option>
          <option value="bkash">bKash</option>
          <option value="nagad">Nagad</option>
          <option value="rocket">Rocket</option>
          <option value="bank_transfer">Bank Transfer</option>
        </select>
  
        <!-- Amount -->
        <label class="text-[13px] font-bold">
          Amount Sent <span class="text-red-500">*</span>
        </label>
        <input class="mt-[8px] w-full h-[42px] border rounded-lg px-[12px] mb-[16px]" placeholder="$ 0.00" />
  
        <!-- Transaction -->
        <label class="text-[13px] font-bold">
          Transaction ID / Reference Number <span class="text-red-500">*</span>
        </label>
        <input class="mt-[8px] w-full h-[42px] border rounded-lg px-[12px] mb-[16px]" placeholder="Enter transaction ID" />
  
        <!-- Name -->
        <label class="text-[13px] font-bold">
          Your Name <span class="text-red-500">*</span>
        </label>
        <input class="mt-[8px] w-full h-[42px] border rounded-lg px-[12px] mb-[16px]" placeholder="Enter your name" />
  
        <!-- Phone -->
        <label class="text-[13px] font-bold">
          Your Phone Number <span class="text-red-500">*</span>
        </label>
        <input class="mt-[8px] w-full h-[42px] border rounded-lg px-[12px] mb-[16px]" placeholder="Enter contact number" />
  
        <button type="button" id="anonymousBtn"
          class="w-full flex items-center justify-between
                 bg-white border border-[#e2e8f0]
                 px-[14px] py-[11px] rounded-lg mb-[20px]
                 shadow-sm hover:shadow-md transition-all">

          <span class="text-[13px] text-[#334155] font-medium">
            Anonymous Donation
          </span>

          <div id="toggle"
            class="w-[38px] h-[20px] bg-gray-300 rounded-full relative transition-all">
            <div id="dot"
              class="w-[16px] h-[16px] bg-white rounded-full absolute top-[2px] left-[2px] transition-all">
            </div>
          </div>
        </button>
  
        <!-- Buttons -->
        <div class="grid grid-cols-2 gap-[10px]">
          <a href="donor_history.php" class="h-[44px] border rounded-lg flex items-center justify-center font-bold">
            Cancel
          </a>
  
          <button id="submitBtn"
            class="h-[44px] bg-[#0ea5e9] text-white rounded-lg font-bold flex items-center justify-center gap-2 transition-all duration-300">
          
            <span id="btnText" class="flex items-center gap-2">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M8 12l3 3 5-5"></path>
              </svg>
              <span>Submit Details</span>
            </span>
          
            <!-- Loading Spinner -->
            <svg id="loader" class="w-5 h-5 animate-spin hidden" fill="none" viewBox="0 0 24 24">
              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="white" stroke-width="4"></circle>
              <path class="opacity-75" fill="white"
                d="M4 12a8 8 0 018-8v4l3-3-3-3v4a10 10 0 00-10 10h2z">
              </path>
            </svg>
          </button>
        </div>
  
      </div>
  
    </div>
  
  </main>
</div>


  <script>
    document.getElementById("submitBtn").addEventListener("click", function (e) {
      e.preventDefault();
  
      const btn = this;
      const text = document.getElementById("btnText");
      const loader = document.getElementById("loader");
  
      // Disable button
      btn.disabled = true;
  
      // Animate button
      btn.classList.add("scale-95", "opacity-80");
  
      // Hide text, show loader
      text.classList.add("hidden");
      loader.classList.remove("hidden");
  
      // Wait 1s then redirect
      setTimeout(() => {
        window.location.href = "donor_donate_money_success.php";
      }, 1000);
    });

    const btn = document.getElementById("anonymousBtn");
    const toggle = document.getElementById("toggle");
    const dot = document.getElementById("dot");

    let active = false;

    btn.addEventListener("click", () => {
      active = !active;

      if (active) {
        toggle.classList.remove("bg-gray-300");
        toggle.classList.add("bg-[#0ea5e9]");
        dot.style.transform = "translateX(18px)";
      } else {
        toggle.classList.add("bg-gray-300");
        toggle.classList.remove("bg-[#0ea5e9]");
        dot.style.transform = "translateX(0px)";
      }
    });

    </script>

</body>
</html>