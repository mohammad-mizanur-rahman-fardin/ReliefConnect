<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Track Donations</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <!-- Top Bar -->
  <?php include 'donor_top_bar.php'; ?>

  <div class="flex min-h-[calc(100vh-49px)]">
    <!-- Sidebar -->
    <?php include 'donor_sidebar.php'; ?>

    <!-- Main -->
    <main class="flex-1 px-[21px] pt-[18px] pb-[20px]">
      <h2 class="text-[28px] font-extrabold mb-[20px] mt-[10px]">Track Your Donations</h2>

      <div class="space-y-[15px] max-w-[950px] px-[10px]">
        <!-- Donation 1 -->
        <section class="bg-white rounded-lg border border-[#e2e8f0] shadow-md px-[16px] py-[14px]">
          <div class="flex items-start justify-between pb-[13px] border-b border-[#e5e7eb]">
            <div class="flex gap-[10px]">
              <div class="w-[31px] h-[31px] rounded-md bg-[#dcfce7] text-[#22c55e] flex items-center justify-center text-[20px] font-bold">$</div>
              <div>
                <h2 class="text-[12px] font-extrabold text-black">$500 Donation</h2>
                <p class="text-[8px] text-[#64748b] mt-[3px]">Donation ID: 1 · 2026-03-20</p>
              </div>
            </div>
            <div class="text-right">
              <p class="text-[8px] text-[#94a3b8]">Destination</p>
              <p class="text-[9px] font-extrabold text-black mt-[5px]">Eastern Relief Camp</p>
            </div>
          </div>

          <div class="relative pt-[15px] pb-[8px]">
            <div class="absolute left-[15px] top-[28px] bottom-[35px] w-[2px] bg-[#22c55e]"></div>

            <div class="space-y-[14px]">
              <div class="flex gap-[13px] relative">
                <div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">
                  <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24"><path d="M8 12l2.5 2.5L16 9"/><circle cx="12" cy="12" r="9"/></svg>
                </div>
                <div>
                  <h3 class="text-[11px] font-extrabold">Donation Received <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3>
                  <p class="text-[9px] text-[#475569] mt-[5px]">Your donation has been successfully received</p>
                  <p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-20</p>
                </div>
              </div>

              <div class="flex gap-[13px] relative">
                <div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">
                  <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"/><path d="M3.3 7.8L12 13l8.7-5.2"/></svg>
                </div>
                <div>
                  <h3 class="text-[11px] font-extrabold">Processing <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3>
                  <p class="text-[9px] text-[#475569] mt-[5px]">Payment is being processed</p>
                  <p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-20</p>
                </div>
              </div>

              <div class="flex gap-[13px] relative">
                <div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">
                  <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M12 21s7-5.4 7-12a7 7 0 0 0-14 0c0 6.6 7 12 7 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                </div>
                <div>
                  <h3 class="text-[11px] font-extrabold">In Transit <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3>
                  <p class="text-[9px] text-[#475569] mt-[5px]">On the way to Eastern Relief Camp</p>
                  <p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-20</p>
                </div>
              </div>

              <div class="flex gap-[13px] relative">
                <div class="w-[31px] h-[31px] rounded-full bg-[#7dd3fc] text-white flex items-center justify-center z-10">
                  <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M8 12l2.5 2.5L16 9"/><circle cx="12" cy="12" r="9"/></svg>
                </div>
                <div>
                  <h3 class="text-[11px] font-extrabold">Delivered to Camp <span class="ml-[8px] bg-[#e0f2fe] text-[#0284c7] text-[7px] px-[6px] py-[2px] rounded">In Progress</span></h3>
                  <p class="text-[9px] text-[#475569] mt-[5px]">Received by John Manager</p>
                </div>
              </div>
            </div>
          </div>

          <div class="border-t border-[#e5e7eb] pt-[9px] flex justify-between text-[9px]">
            <p><span class="font-extrabold">4</span> of 4 steps completed</p>
            <p class="text-[#16a34a] font-extrabold">✓ Delivery Complete</p>
          </div>
        </section>

        <!-- Donation 2 -->
        <section class="bg-white rounded-lg border border-[#e2e8f0] shadow-md px-[16px] py-[14px]">
          <div class="flex items-start justify-between pb-[13px] border-b border-[#e5e7eb]">
            <div class="flex gap-[10px]">
              <div class="w-[31px] h-[31px] rounded-md bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"/><path d="M3.3 7.8L12 13l8.7-5.2"/></svg>
              </div>
              <div>
                <h2 class="text-[12px] font-extrabold text-black">Supply Donation</h2>
                <p class="text-[9px] text-[#475569] mt-[3px]">Blankets (50), Water Bottles (100)</p>
                <p class="text-[8px] text-[#64748b] mt-[2px]">Donation ID: 2 · 2026-03-18</p>
              </div>
            </div>
            <div class="text-right">
              <p class="text-[8px] text-[#94a3b8]">Destination</p>
              <p class="text-[9px] font-extrabold text-black mt-[5px]">Northern Emergency Center</p>
            </div>
          </div>

          <div class="relative pt-[15px] pb-[8px]">
            <div class="absolute left-[15px] top-[28px] bottom-[35px] w-[2px] bg-[#22c55e]"></div>

            <div class="space-y-[14px]">
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Donation Received <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Your donation has been successfully received</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-18</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">▧</div><div><h3 class="text-[11px] font-extrabold">Processing <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Items are being collected and packaged</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-18</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#7dd3fc] text-white flex items-center justify-center z-10">⌖</div><div><h3 class="text-[11px] font-extrabold">In Transit <span class="ml-[8px] bg-[#e0f2fe] text-[#0284c7] text-[7px] px-[6px] py-[2px] rounded">In Progress</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">On the way to Northern Emergency Center</p></div></div>
              <div class="flex gap-[13px] opacity-45"><div class="w-[31px] h-[31px] rounded-full bg-white border border-[#94a3b8] text-[#94a3b8] flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Delivered to Camp</h3><p class="text-[9px] text-[#475569] mt-[5px]">Received by Sarah Johnson</p></div></div>
            </div>
          </div>

          <div class="border-t border-[#e5e7eb] pt-[9px] text-[9px]">
            <p><span class="font-extrabold">3</span> of 4 steps completed</p>
          </div>
        </section>

        <!-- Donation 3 -->
        <section class="bg-white rounded-lg border border-[#e2e8f0] shadow-md px-[16px] py-[14px]">
          <div class="flex items-start justify-between pb-[13px] border-b border-[#e5e7eb]">
            <div class="flex gap-[10px]">
              <div class="w-[31px] h-[31px] rounded-md bg-[#dcfce7] text-[#22c55e] flex items-center justify-center text-[20px] font-bold">$</div>
              <div>
                <h2 class="text-[12px] font-extrabold text-black">$250 Donation</h2>
                <p class="text-[8px] text-[#64748b] mt-[3px]">Donation ID: 3 · 2026-03-15</p>
              </div>
            </div>
            <div class="text-right">
              <p class="text-[8px] text-[#94a3b8]">Destination</p>
              <p class="text-[9px] font-extrabold text-black mt-[5px]">Western Support Hub</p>
            </div>
          </div>

          <div class="relative pt-[15px] pb-[8px]">
            <div class="absolute left-[15px] top-[28px] bottom-[35px] w-[2px] bg-[#22c55e]"></div>
            <div class="space-y-[14px]">
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Donation Received <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Your donation has been successfully received</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-15</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">▧</div><div><h3 class="text-[11px] font-extrabold">Processing <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Payment is being processed</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-15</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">⌖</div><div><h3 class="text-[11px] font-extrabold">In Transit <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">On the way to Western Support Hub</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-15</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#7dd3fc] text-white flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Delivered to Camp <span class="ml-[8px] bg-[#e0f2fe] text-[#0284c7] text-[7px] px-[6px] py-[2px] rounded">In Progress</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Received by Mike Chen</p></div></div>
            </div>
          </div>

          <div class="border-t border-[#e5e7eb] pt-[9px] flex justify-between text-[9px]">
            <p><span class="font-extrabold">4</span> of 4 steps completed</p>
            <p class="text-[#16a34a] font-extrabold">✓ Delivery Complete</p>
          </div>
        </section>

        <!-- Donation 4 -->
        <section class="bg-white rounded-lg border border-[#e2e8f0] shadow-md px-[16px] py-[14px]">
          <div class="flex items-start justify-between pb-[13px] border-b border-[#e5e7eb]">
            <div class="flex gap-[10px]">
              <div class="w-[31px] h-[31px] rounded-md bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M21 16V8l-9-5-9 5v8l9 5 9-5z"/><path d="M3.3 7.8L12 13l8.7-5.2"/></svg>
              </div>
              <div>
                <h2 class="text-[12px] font-extrabold text-black">Supply Donation</h2>
                <p class="text-[9px] text-[#475569] mt-[3px]">Medical Kits (20), First Aid Supplies</p>
                <p class="text-[8px] text-[#64748b] mt-[2px]">Donation ID: 4 · 2026-03-10</p>
              </div>
            </div>
            <div class="text-right">
              <p class="text-[8px] text-[#94a3b8]">Destination</p>
              <p class="text-[9px] font-extrabold text-black mt-[5px]">Eastern Relief Camp</p>
            </div>
          </div>

          <div class="relative pt-[15px] pb-[8px]">
            <div class="absolute left-[15px] top-[28px] bottom-[35px] w-[2px] bg-[#22c55e]"></div>
            <div class="space-y-[14px]">
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#22c55e] text-white flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Donation Received <span class="ml-[8px] bg-[#dcfce7] text-[#16a34a] text-[7px] px-[6px] py-[2px] rounded">Completed</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Your donation has been successfully received</p><p class="text-[8px] text-[#16a34a] font-bold mt-[3px]">✓ Completed on 2026-03-10</p></div></div>
              <div class="flex gap-[13px]"><div class="w-[31px] h-[31px] rounded-full bg-[#7dd3fc] text-white flex items-center justify-center z-10">▧</div><div><h3 class="text-[11px] font-extrabold">Processing <span class="ml-[8px] bg-[#e0f2fe] text-[#0284c7] text-[7px] px-[6px] py-[2px] rounded">In Progress</span></h3><p class="text-[9px] text-[#475569] mt-[5px]">Items are being collected and packaged</p></div></div>
              <div class="flex gap-[13px] opacity-45"><div class="w-[31px] h-[31px] rounded-full bg-white border border-[#94a3b8] text-[#94a3b8] flex items-center justify-center z-10">⌖</div><div><h3 class="text-[11px] font-extrabold">In Transit</h3><p class="text-[9px] text-[#475569] mt-[5px]">On the way to Eastern Relief Camp</p></div></div>
              <div class="flex gap-[13px] opacity-45"><div class="w-[31px] h-[31px] rounded-full bg-white border border-[#94a3b8] text-[#94a3b8] flex items-center justify-center z-10">✓</div><div><h3 class="text-[11px] font-extrabold">Delivered to Camp</h3><p class="text-[9px] text-[#475569] mt-[5px]">Received by John Manager</p></div></div>
            </div>
          </div>

          <div class="border-t border-[#e5e7eb] pt-[9px] text-[9px]">
            <p><span class="font-extrabold">2</span> of 4 steps completed</p>
          </div>
        </section>
      </div>
    </main>
  </div>
</body>
</html>