<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Supply Monitor - ReliefConnect Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    .sidebar-link {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 16px; border-radius: 8px;
      font-size: 14px; font-weight: 500; color: #9ca3af;
      cursor: pointer; transition: all 0.15s;
      text-decoration: none;
    }
    .sidebar-link:hover { background: #1f2937; color: #f3f4f6; }
    .sidebar-link.active { background: #00BFFF; color: white; }
    input, select { outline: none; }
    input:focus, select:focus { border-color: #00BFFF !important; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }

    /* Custom thin scrollbar for modal */
    #modal-body::-webkit-scrollbar { width: 5px; }
    #modal-body::-webkit-scrollbar-track { background: #f3f4f6; border-radius: 10px; }
    #modal-body::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
    #modal-body::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
  </style>
</head>
<body class="bg-gray-100 text-gray-900 flex" style="min-height:100vh;">

  <!-- SIDEBAR (sticky) -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- MAIN CONTENT -->
  <div class="flex-1 flex flex-col overflow-auto">
    <div class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between flex-shrink-0">
      <h1 class="text-2xl font-black text-gray-900">Supply Monitor</h1>
      <div class="text-right">
        <div class="text-xs text-gray-400">Today's Date</div>
        <div class="text-sm font-bold text-gray-900">March 20, 2026</div>
      </div>
    </div>

    <div class="px-8 py-6">
      <div class="mb-5">
        <div class="text-base font-bold text-gray-900 mb-0.5">Supply Stock Monitor</div>
        <div class="text-sm text-gray-500">Monitor supply levels across all camps</div>
      </div>

      <div class="grid grid-cols-3 gap-4 mb-5">
        <div class="rounded-xl p-5" style="background:#f0fdf4; border:1.5px solid #86efac;">
          <div class="text-3xl font-bold mb-1" style="color:#16a34a;">2</div>
          <div class="text-sm font-medium" style="color:#16a34a;">Good Stock</div>
        </div>
        <div class="rounded-xl p-5" style="background:#fefce8; border:1.5px solid #fde047;">
          <div class="text-3xl font-bold mb-1" style="color:#ca8a04;">2</div>
          <div class="text-sm font-medium" style="color:#ca8a04;">Low Stock</div>
        </div>
        <div class="rounded-xl p-5" style="background:#fff1f2; border:1.5px solid #fca5a5;">
          <div class="text-3xl font-bold mb-1" style="color:#dc2626;">2</div>
          <div class="text-sm font-medium" style="color:#dc2626;">Critical</div>
        </div>
      </div>

      <div class="bg-white border border-gray-200 rounded-xl overflow-hidden">
        <table class="w-full border-collapse text-sm">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-700">Item</th>
              <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-700">Camp</th>
              <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-700">Current Stock</th>
              <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-700">Min Threshold</th>
              <th class="text-left px-5 py-3.5 text-xs font-semibold text-gray-700">Status</th>
              <th class="text-right px-5 py-3.5 text-xs font-semibold text-gray-700">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-50">
              <td class="px-5 py-4 font-bold text-gray-900">Food Packages</td>
              <td class="px-5 py-4 text-gray-500">Eastern Relief Camp</td>
              <td class="px-5 py-4 font-bold text-gray-900">450</td>
              <td class="px-5 py-4 text-gray-500">500</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#fefce8;color:#a16207;border:1px solid #fde047;">low</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Food Packages','Eastern Relief Camp','450','500')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
            <tr class="border-b border-gray-50">
              <td class="px-5 py-4 font-bold text-gray-900">Medical Kits</td>
              <td class="px-5 py-4 text-gray-500">Eastern Relief Camp</td>
              <td class="px-5 py-4 font-bold text-gray-900">89</td>
              <td class="px-5 py-4 text-gray-500">200</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#fff1f2;color:#dc2626;border:1px solid #fca5a5;">critical</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Medical Kits','Eastern Relief Camp','89','200')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
            <tr class="border-b border-gray-50">
              <td class="px-5 py-4 font-bold text-gray-900">Water Bottles</td>
              <td class="px-5 py-4 text-gray-500">Northern Emergency Center</td>
              <td class="px-5 py-4 font-bold text-gray-900">2400</td>
              <td class="px-5 py-4 text-gray-500">1000</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#f0fdf4;color:#16a34a;border:1px solid #86efac;">good</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Water Bottles','Northern Emergency Center','2400','1000')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
            <tr class="border-b border-gray-50">
              <td class="px-5 py-4 font-bold text-gray-900">Blankets</td>
              <td class="px-5 py-4 text-gray-500">Northern Emergency Center</td>
              <td class="px-5 py-4 font-bold text-gray-900">180</td>
              <td class="px-5 py-4 text-gray-500">300</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#fefce8;color:#a16207;border:1px solid #fde047;">low</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Blankets','Northern Emergency Center','180','300')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
            <tr class="border-b border-gray-50">
              <td class="px-5 py-4 font-bold text-gray-900">Tents</td>
              <td class="px-5 py-4 text-gray-500">Western Support Hub</td>
              <td class="px-5 py-4 font-bold text-gray-900">45</td>
              <td class="px-5 py-4 text-gray-500">100</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#fff1f2;color:#dc2626;border:1px solid #fca5a5;">critical</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Tents','Western Support Hub','45','100')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
            <tr>
              <td class="px-5 py-4 font-bold text-gray-900">Hygiene Kits</td>
              <td class="px-5 py-4 text-gray-500">Western Support Hub</td>
              <td class="px-5 py-4 font-bold text-gray-900">890</td>
              <td class="px-5 py-4 text-gray-500">400</td>
              <td class="px-5 py-4"><span class="rounded-full px-3 py-1 text-xs font-semibold" style="background:#f0fdf4;color:#16a34a;border:1px solid #86efac;">good</span></td>
              <td class="px-5 py-4 text-right"><button onclick="openModal('Hygiene Kits','Western Support Hub','890','400')" class="text-white text-xs font-medium px-3.5 py-1.5 rounded-lg hover:opacity-90" style="background:#06b6d4;">Update Stock</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- ===== UPDATE STOCK MODAL ===== -->
  <div id="modal-overlay" onclick="closeModal(event)" class="hidden fixed inset-0 z-50 flex items-center justify-center px-4" style="background:rgba(0,0,0,0.3);">

    <!-- Modal container: max height + scrollable body -->
    <div id="modal-box" class="bg-white rounded-2xl shadow-2xl w-full flex flex-col" style="max-width:460px; max-height:90vh;" onclick="event.stopPropagation()">

      <!-- Sticky header (never scrolls) -->
      <div class="flex items-start gap-3 px-6 pt-5 pb-4 border-b border-gray-100 flex-shrink-0">
        <button onclick="closeModalBtn()" class="text-gray-400 hover:text-gray-700 mt-0.5 flex-shrink-0">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
        </button>
        <div>
          <h2 class="text-lg font-black text-gray-900 leading-tight">Update Stock</h2>
          <p class="text-gray-400 text-xs mt-0.5">Update supply inventory levels</p>
        </div>
      </div>

      <!-- Scrollable body -->
      <div id="modal-body" class="overflow-y-auto flex-1 px-6 py-5" style="scrollbar-width: thin; scrollbar-color: #d1d5db #f3f4f6;">

        <!-- Box icon -->
        <div class="flex justify-center mb-5">
          <div class="w-16 h-16 rounded-full flex items-center justify-center" style="background:#e0f7ff;">
            <svg class="w-8 h-8" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
            </svg>
          </div>
        </div>

        <!-- Minimum Threshold -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Minimum Threshold <span class="text-red-500">*</span></label>
          <input id="modal-threshold" type="number" placeholder="Alert threshold quantity" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
          <p class="text-xs text-gray-400 mt-1">Alert when stock falls below this level</p>
        </div>

        <!-- Current Stock Quantity -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Current Stock Quantity <span class="text-red-500">*</span></label>
          <input id="modal-stock" type="number" placeholder="Enter current quantity" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
        </div>

        <!-- Supply Item Name -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Supply Item name <span class="text-red-500">*</span></label>
          <input id="modal-item" type="text" placeholder="Ex: Rice" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
        </div>

        <!-- Camp -->
        <div class="mb-5">
          <label class="block text-xs font-semibold text-gray-800 mb-1.5">Camp <span class="text-red-500">*</span></label>
          <div class="relative">
            <select id="modal-camp" class="w-full border border-gray-200 rounded-lg px-3.5 py-2.5 text-sm text-gray-500 bg-white appearance-none transition-all">
              <option value="" disabled selected>Select an Option</option>
              <option>Eastern Relief Camp</option>
              <option>Northern Emergency Center</option>
              <option>Western Support Hub</option>
            </select>
            <svg class="absolute right-3.5 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </div>
        </div>

      </div>

      <!-- Sticky footer buttons (never scrolls) -->
      <div class="flex gap-3 px-6 py-4 border-t border-gray-100 flex-shrink-0">
        <button onclick="closeModalBtn()" class="flex-1 py-2.5 rounded-lg border border-gray-200 text-sm font-bold text-gray-700 hover:bg-gray-50 transition-colors">
          Cancel
        </button>
        <button class="flex-1 py-2.5 rounded-lg text-white text-sm font-bold hover:opacity-90 transition-opacity flex items-center justify-center gap-2" style="background:#00BFFF;">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
          Update Stock
        </button>
      </div>

    </div>
  </div>

  <script>
    function openModal(item, camp, stock, threshold) {
      document.getElementById('modal-item').value = item || '';
      document.getElementById('modal-stock').value = stock || '';
      document.getElementById('modal-threshold').value = threshold || '';
      const campSelect = document.getElementById('modal-camp');
      for (let i = 0; i < campSelect.options.length; i++) {
        if (campSelect.options[i].text === camp) { campSelect.selectedIndex = i; break; }
      }
      // Reset scroll position
      document.getElementById('modal-body').scrollTop = 0;
      document.getElementById('modal-overlay').classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }

    function closeModalBtn() {
      document.getElementById('modal-overlay').classList.add('hidden');
      document.body.style.overflow = '';
    }

    function closeModal(e) {
      if (e.target === document.getElementById('modal-overlay')) closeModalBtn();
    }

    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') closeModalBtn();
    });
  </script>

</body>
</html>