<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Assigned Successfully</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] flex items-center justify-center min-h-screen font-sans">

  <div class="w-[600px] text-center">

    <!-- Top Icon -->
    <div class="flex justify-center mb-[24px]">
      <div class="w-[96px] h-[96px] rounded-full bg-[#22c55e] flex items-center justify-center">
        <svg width="48" height="48" fill="none" stroke="white" stroke-width="3" viewBox="0 0 24 24">
          <path d="M9 12l2 2 4-4"/>
          <circle cx="12" cy="12" r="10"/>
        </svg>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-[14px] shadow-lg overflow-hidden">

      <!-- Header -->
      <div class="bg-gradient-to-r from-[#16a34a] to-[#16a34a] py-[32px]">
        <h1 class="text-white text-[28px] font-extrabold leading-none mb-[8px]">
          Assigned Successfully
        </h1>
        <p class="text-white text-[14px] opacity-90">
          The task has been assigned to the volunteer successfully !
        </p>
      </div>

      <!-- Actions -->
      <div class="flex justify-center gap-[24px] py-[40px]">

        <!-- Back Button -->
        <a href="#"
          class="w-[210px] h-[52px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[15px] flex items-center justify-center gap-2 shadow-sm">

          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M3 9.5L12 4l9 5.5V20a2 2 0 0 1-2 2h-4v-6H9v6H5a2 2 0 0 1-2-2z"/>
          </svg>

          Back to Dashboard
        </a>

        <!-- Add Another -->
        <a href="#"
          class="w-[210px] h-[52px] rounded-lg border-2 border-[#0ea5e9] text-[#0ea5e9] font-bold text-[15px] flex items-center justify-center gap-2 bg-white">

          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <path d="M14 2v6h6"/>
            <path d="M12 11v6"/>
            <path d="M9 14h6"/>
          </svg>

          Add Another
        </a>

      </div>

    </div>

  </div>

</body>
</html>