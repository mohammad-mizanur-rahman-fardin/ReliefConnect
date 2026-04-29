<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Updated Successfully</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] min-h-screen flex items-start justify-center pt-[24px] font-sans">
  <div class="w-[674px] text-center">

    <!-- Success Icon -->
    <div class="flex justify-center mb-[25px]">
      <div class="w-[96px] h-[96px] rounded-full bg-[#22c55e] flex items-center justify-center">
        <svg width="52" height="52" fill="none" stroke="white" stroke-width="3.2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="M8 12.2l2.6 2.6L16.8 8.5"></path>
        </svg>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
      <div class="h-[132px] bg-gradient-to-r from-[#00c853] to-[#009e3d] text-white flex flex-col items-center justify-center">
        <h1 class="text-[28px] font-extrabold leading-none">Updated Successfully</h1>
        <p class="text-[15px] mt-[17px]">The stock has been updated successfully</p>
      </div>

      <div class="h-[171px] flex items-center justify-center gap-[88px]">
        <a href="camp_manager_dashboard.php"
           class="w-[194px] h-[72px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[14px] flex items-center justify-center gap-[12px]">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M3 11l9-8 9 8"></path>
            <path d="M5 10v10h14V10"></path>
          </svg>
          Back to Dashboard
        </a>

        <a href="camp_manager_update_stock.php"
           class="w-[194px] h-[72px] rounded-lg border-2 border-[#0ea5e9] text-[#0ea5e9] bg-white font-bold text-[15px] flex items-center justify-center gap-[10px]">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
            <path d="M14 2v6h6"></path>
            <path d="M12 11v6"></path>
            <path d="M9 14h6"></path>
          </svg>
          Add Another
        </a>
      </div>
    </div>
  </div>
</body>
</html>