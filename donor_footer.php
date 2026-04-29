<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Make a Donation - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    input { outline: none; }
    input:focus { border-color: #00BFFF !important; box-shadow: 0 0 0 2px rgba(0,191,255,0.15); }
    .amount-btn {
      border: 1px solid #e5e7eb;
      border-radius: 8px;
      padding: 10px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      background: white;
      color: #111827;
      width: 100%;
      transition: all 0.15s;
    }
    .amount-btn:hover, .amount-btn.active {
      border-color: #00BFFF;
      background: #f0fbff;
      color: #0284c7;
    }
    .tab-btn {
      display: flex; align-items: center; gap: 7px;
      padding: 9px 22px; border-radius: 8px;
      font-size: 13px; font-weight: 600; cursor: pointer;
      transition: all 0.15s;
    }
    .tab-btn.active { background: #00BFFF; color: white; border: none; }
    .tab-btn.inactive { background: white; color: #374151; border: 1px solid #e5e7eb; }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- HERO -->
  <section style="background:linear-gradient(135deg,#00BFFF 0%,#0284c7 100%);" class="py-14 px-6 text-center text-white">
    <h1 class="text-3xl md:text-4xl font-black mb-3">Make a Donation</h1>
    <p class="text-blue-100 text-sm max-w-md mx-auto leading-relaxed">
      Your generosity provides immediate relief and long-term support to disaster-affected communities.
    </p>
  </section>

  <!-- STATS ROW -->
  <section class="py-8 px-6 md:px-16 bg-white">
    <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-5">
      <div class="border border-gray-100 rounded-xl p-5 shadow-sm text-center">
        <div class="text-2xl font-black mb-1" style="color:#00BFFF">$2.4M</div>
        <div class="text-gray-500 text-xs">Total Donations</div>
      </div>
      <div class="border border-gray-100 rounded-xl p-5 shadow-sm text-center">
        <div class="text-2xl font-black mb-1 text-green-500">3,500+</div>
        <div class="text-gray-500 text-xs">Donors</div>
      </div>
      <div class="border border-gray-100 rounded-xl p-5 shadow-sm text-center">
        <div class="text-2xl font-black mb-1 text-violet-500">95%</div>
        <div class="text-gray-500 text-xs">Direct Impact</div>
      </div>
      <div class="border border-gray-100 rounded-xl p-5 shadow-sm text-center">
        <div class="text-2xl font-black mb-1 text-orange-500">12K+</div>
        <div class="text-gray-500 text-xs">Lives Impacted</div>
      </div>
    </div>
  </section>

  <!-- TAB TOGGLE + FORM -->
  <section class="py-6 px-6 md:px-16 bg-white">
    <div class="max-w-xl mx-auto">

      <!-- Tabs -->
      <div class="flex justify-center gap-3 mb-7">
        <button class="tab-btn active" id="tab-money" onclick="switchTab('money')">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          Donate Money
        </button>
        <button class="tab-btn inactive" id="tab-supplies" onclick="switchTab('supplies')">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
          Donate Supplies
        </button>
      </div>

      <!-- MONEY FORM -->
      <div id="form-money" class="border border-gray-200 rounded-2xl p-7 shadow-sm">
        <h2 class="text-lg font-black mb-5">Make a Monetary Donation</h2>

        <!-- Amount Grid -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-3">Select Amount</label>
          <div class="grid grid-cols-3 gap-2.5 mb-2.5">
            <button class="amount-btn" onclick="selectAmount(this, 25)">$25</button>
            <button class="amount-btn" onclick="selectAmount(this, 50)">$50</button>
            <button class="amount-btn active" onclick="selectAmount(this, 100)">$100</button>
            <button class="amount-btn" onclick="selectAmount(this, 250)">$250</button>
            <button class="amount-btn" onclick="selectAmount(this, 500)">$500</button>
            <button class="amount-btn" onclick="selectAmount(this, 1000)">$1000</button>
          </div>
          <!-- Custom Amount -->
          <div class="relative mt-1">
            <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm font-medium">$</span>
            <input type="number" id="custom-amount" placeholder="Enter custom amount" class="w-full border border-gray-200 rounded-lg pl-7 pr-4 py-2.5 text-sm text-gray-700 placeholder-gray-400" oninput="clearAmountSelection()" />
          </div>
        </div>

        <!-- Full Name + Email -->
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
            <input type="text" placeholder="John Doe" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
            <input type="email" placeholder="john@example.com" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
        </div>

        <!-- Card Number -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Card Number <span class="text-red-500">*</span></label>
          <input type="text" placeholder="1234 5678 9012 3456" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
        </div>

        <!-- Expiry + CVV -->
        <div class="grid grid-cols-2 gap-4 mb-5">
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Expiry Date <span class="text-red-500">*</span></label>
            <input type="text" placeholder="MM/YY" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">CVV <span class="text-red-500">*</span></label>
            <input type="text" placeholder="123" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
        </div>

        <!-- Donate Button -->
        <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity" style="background:#00BFFF">
          Donate Now
        </button>
      </div>

      <!-- SUPPLIES FORM (hidden) -->
      <div id="form-supplies" class="hidden border border-gray-200 rounded-2xl p-7 shadow-sm">
        <h2 class="text-lg font-black mb-5">Donate Supplies</h2>
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Supply Type <span class="text-red-500">*</span></label>
          <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-500">
            <option value="" disabled selected>Select supply type</option>
            <option>Food & Water</option>
            <option>Medical Supplies</option>
            <option>Clothing & Blankets</option>
            <option>Building Materials</option>
            <option>Other</option>
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
            <input type="text" placeholder="John Doe" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
            <input type="email" placeholder="john@example.com" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300" />
          </div>
        </div>
        <div class="mb-5">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Description</label>
          <textarea rows="3" placeholder="Describe the supplies you wish to donate..." class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 resize-none outline-none focus:border-blue-400"></textarea>
        </div>
        <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity" style="background:#00BFFF">
          Submit Supply Donation
        </button>
      </div>

    </div>
  </section>

  <!-- YOUR IMPACT -->
  <section class="py-14 px-6 md:px-16 bg-white">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-2xl font-black text-center mb-10">Your Impact</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">

        <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
          <div class="w-9 h-9 rounded-lg flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
          </div>
          <div class="text-xl font-black mb-2" style="color:#00BFFF">$25</div>
          <p class="text-gray-500 text-xs leading-relaxed">Provides emergency food supplies for a family of 4 for one day</p>
        </div>

        <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
          <div class="w-9 h-9 rounded-lg flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
          </div>
          <div class="text-xl font-black mb-2" style="color:#00BFFF">$50</div>
          <p class="text-gray-500 text-xs leading-relaxed">Supplies medical first aid kits for 10 individuals</p>
        </div>

        <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
          <div class="w-9 h-9 rounded-lg flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
          </div>
          <div class="text-xl font-black mb-2" style="color:#00BFFF">$100</div>
          <p class="text-gray-500 text-xs leading-relaxed">Provides temporary shelter materials for one family</p>
        </div>

        <div class="border border-gray-100 rounded-xl p-5 shadow-sm">
          <div class="w-9 h-9 rounded-lg flex items-center justify-center mb-4" style="background:#e0f7ff">
            <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
          </div>
          <div class="text-xl font-black mb-2" style="color:#00BFFF">$250</div>
          <p class="text-gray-500 text-xs leading-relaxed">Supports camp operations for one day including utilities and supplies</p>
        </div>

      </div>
    </div>
  </section>

  <!-- TAX DEDUCTIBLE NOTICE -->
  <section class="py-8 px-6 md:px-16 bg-white pb-14">
    <div class="max-w-2xl mx-auto rounded-xl border border-blue-100 p-6 text-center" style="background:#f0f9ff">
      <h3 class="font-black text-sm mb-2">Tax-Deductible Donations</h3>
      <p class="text-gray-500 text-xs leading-relaxed">
        ReliefConnect is a registered 501(c)(3) nonprofit organization. All donations are tax-deductible to the fullest extent allowed by law. You will receive a receipt for your records via email.
      </p>
    </div>
  </section>

  <!-- MINIMAL FOOTER -->
  <?php include 'footer.php'; ?>

  <script>
    function switchTab(tab) {
      const tabMoney = document.getElementById('tab-money');
      const tabSupplies = document.getElementById('tab-supplies');
      const formMoney = document.getElementById('form-money');
      const formSupplies = document.getElementById('form-supplies');
      if (tab === 'money') {
        tabMoney.className = 'tab-btn active';
        tabSupplies.className = 'tab-btn inactive';
        formMoney.classList.remove('hidden');
        formSupplies.classList.add('hidden');
      } else {
        tabSupplies.className = 'tab-btn active';
        tabMoney.className = 'tab-btn inactive';
        formSupplies.classList.remove('hidden');
        formMoney.classList.add('hidden');
      }
    }

    function selectAmount(btn, amount) {
      document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('custom-amount').value = '';
    }

    function clearAmountSelection() {
      document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
    }
  </script>
</body>
</html>