<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assigned Successfully</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] flex items-start justify-center min-h-screen pt-[60px] font-sans">

  <div class="w-[620px]">

    <!-- Top Icon -->
    <div class="flex justify-center mb-[22px]">
      <div class="w-[96px] h-[96px] rounded-full bg-[#16a34a] flex items-center justify-center text-white">
        <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
          <path d="M20 6L9 17l-5-5"/>
        </svg>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-xl shadow-xl overflow-hidden">

      <!-- Green Header -->
      <div class="bg-gradient-to-r from-[#16a34a] to-[#16a34a] text-center py-[30px] px-[20px]">
        <h1 class="text-[28px] font-extrabold text-white">Assigned Successfully</h1>
        <p class="text-[15px] text-white mt-[10px]">
          The task has been assigned to the volunteer successfully !
        </p>
      </div>

      <!-- Bottom Section -->
      <div class="flex justify-center gap-[40px] py-[40px] bg-[#f8fafc]">

        <!-- Back Button -->
        <a href="#" class="w-[210px] h-[52px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-[10px]">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M3 12l9-9 9 9"/>
            <path d="M9 21V9h6v12"/>
          </svg>
          Back to Dashboard
        </a>

        <!-- Add Another -->
        <a href="#" class="w-[210px] h-[52px] rounded-lg border border-[#0ea5e9] text-[#0ea5e9] font-bold text-[15px] flex items-center justify-center gap-[10px] bg-white">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <path d="M14 2v6h6"/>
            <path d="M9 13h6"/>
            <path d="M9 17h6"/>
          </svg>
          Add Another
        </a>

      </div>

    </div>

  </div>

</body>
</html>