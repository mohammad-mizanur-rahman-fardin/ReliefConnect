<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>ReliefConnect – Supply Records</title>
<script src="https://cdn.tailwindcss.com"></script>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; }
</style>
</head>
<body class="flex h-screen bg-gray-100 overflow-hidden">

  <!-- Sidebar -->
  <?php include 'volunteer_sidebar.php' ?>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col overflow-auto">

    <!-- Top Header -->
    <?php include 'volunteer_top_bar.php'; ?>

    <!-- Page Body -->
    <main class="flex-1 p-7 bg-gray-100 overflow-auto">

      <!-- Record Supply Delivery Card -->
      <div class="bg-white rounded-xl border border-gray-200 px-7 py-6 mb-5">
        <h2 class="text-[17px] font-bold text-gray-900 mb-5">Record Supply Delivery</h2>

        <!-- Row 1: Supply Item + Quantity -->
        <div class="grid grid-cols-2 gap-5 mb-5">
          <div>
            <label class="block text-[12.5px] font-bold text-gray-800 mb-1.5">Supply Item</label>
            <input
              type="text"
              placeholder="e.g., Food Packages"
              class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-[13px] placeholder-gray-300 text-gray-400 focus:outline-none focus:border-gray-300 bg-white"
            />
          </div>
          <div>
            <label class="block text-[12.5px] font-bold text-gray-800 mb-1.5">Quantity</label>
            <input
              type="text"
              placeholder="Enter quantity"
              class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-[13px] placeholder-gray-300 text-gray-400 focus:outline-none focus:border-gray-300 bg-white"
            />
          </div>
        </div>

        <!-- Row 2: Delivered To + Location -->
        <div class="grid grid-cols-2 gap-5 mb-6">
          <div>
            <label class="block text-[12.5px] font-bold text-gray-800 mb-1.5">Delivered To</label>
            <input
              type="text"
              placeholder="e.g., Sector A Families"
              class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-[13px] placeholder-gray-300 text-gray-400 focus:outline-none focus:border-gray-300 bg-white"
            />
          </div>
          <div>
            <label class="block text-[12.5px] font-bold text-gray-800 mb-1.5">Location</label>
            <input
              type="text"
              placeholder="e.g., Main Camp"
              class="w-full border border-gray-200 rounded-lg px-4 py-2.5 text-[13px] placeholder-gray-300 text-gray-400 focus:outline-none focus:border-gray-300 bg-white"
            />
          </div>
        </div>

        <!-- Record Delivery Button -->
        <button class="bg-sky-400 hover:bg-sky-500 text-white font-semibold text-[13.5px] px-7 py-2.5 rounded-lg transition-colors">
          Record Delivery
        </button>
      </div>

      <!-- Delivery History Card -->
      <div class="bg-white rounded-xl border border-gray-200 px-7 py-6">
        <h2 class="text-[17px] font-bold text-gray-900 mb-4">Delivery History</h2>

        <table class="w-full">
          <!-- Table Header -->
          <thead>
            <tr class="bg-gray-50 border-y border-gray-100">
              <th class="text-left text-[12.5px] font-semibold text-gray-600 px-4 py-3 w-[28%]">Item</th>
              <th class="text-left text-[12.5px] font-semibold text-gray-600 px-4 py-3 w-[14%]">Quantity</th>
              <th class="text-left text-[12.5px] font-semibold text-gray-600 px-4 py-3 w-[24%]">Delivered To</th>
              <th class="text-left text-[12.5px] font-semibold text-gray-600 px-4 py-3 w-[18%]">Location</th>
              <th class="text-left text-[12.5px] font-semibold text-gray-600 px-4 py-3 w-[16%]">Date</th>
            </tr>
          </thead>
          <tbody>
            <!-- Row 1 -->
            <tr class="border-b border-gray-100">
              <td class="px-4 py-4 text-[13.5px] font-bold text-gray-900">Food Packages</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">30</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">Sector A Families</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">Sector A</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">2026-03-19</td>
            </tr>
            <!-- Row 2 -->
            <tr>
              <td class="px-4 py-4 text-[13.5px] font-bold text-gray-900">Water Bottles</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">100</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">Distribution Center</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">Main Camp</td>
              <td class="px-4 py-4 text-[13.5px] text-gray-500">2026-03-18</td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>