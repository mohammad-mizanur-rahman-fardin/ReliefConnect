<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Success</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f5f9] font-sans text-[#0f172a] flex items-center justify-center min-h-screen py-12">

  <div class="w-[650px] text-center">
    
    <!-- Top Icon -->
    <div class="flex justify-center mb-[-40px] z-10 relative">
      <div class="w-[100px] h-[100px] bg-[#16a34a] rounded-full flex items-center justify-center shadow-lg">
        <svg width="50" height="50" fill="none" stroke="white" stroke-width="3" viewBox="0 0 24 24">
          <path d="M20 6L9 17l-5-5"/>
        </svg>
      </div>
    </div>

    <!-- Card -->
    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
      
      <!-- Header -->
      <div class="bg-gradient-to-r from-[#16a34a] to-[#15803d] text-white pt-[60px] pb-[30px] px-[40px]">
        <h1 class="text-[26px] font-extrabold">Request Submitted Successfully!</h1>
        <p class="text-[14px] mt-[10px] opacity-90">
          Your help request has been received and is being reviewed by our camp staff
        </p>
      </div>

      <!-- Body -->
      <div class="px-[40px] py-[30px] text-left">

        <div class="text-center">
          <p class="text-[14px] text-[#475569]">Your Request ID</p>
          <p class="text-[#0ea5e9] text-[24px] font-extrabold mt-[5px]">REQ-61163575</p>
          <p class="text-[12px] text-[#64748b] mt-[6px]">Please save this ID for future reference</p>
        </div>

        <hr class="my-[25px] border-[#e2e8f0]">

        <h3 class="text-[18px] font-extrabold mb-[15px]">What Happens Next?</h3>

        <div class="space-y-[18px]">
          <div class="flex gap-4">
            <div class="w-[30px] h-[30px] rounded-full bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center font-bold">1</div>
            <div>
              <p class="font-extrabold text-[15px]">Review & Assessment</p>
              <p class="text-[13px] text-[#475569] mt-[3px]">Our camp staff will review your request and assess the urgency</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="w-[30px] h-[30px] rounded-full bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center font-bold">2</div>
            <div>
              <p class="font-extrabold text-[15px]">Contact & Confirmation</p>
              <p class="text-[13px] text-[#475569] mt-[3px]">You will be contacted via your preferred method to confirm details</p>
            </div>
          </div>

          <div class="flex gap-4">
            <div class="w-[30px] h-[30px] rounded-full bg-[#e0f2fe] text-[#0284c7] flex items-center justify-center font-bold">3</div>
            <div>
              <p class="font-extrabold text-[15px]">Assistance Delivery</p>
              <p class="text-[13px] text-[#475569] mt-[3px]">We will provide the requested assistance based on availability</p>
            </div>
          </div>
        </div>

        <!-- Expected Response -->
        <div class="mt-[25px] border border-[#bae6fd] bg-[#f0f9ff] rounded-lg p-[16px] flex items-center gap-4">
          <svg width="22" height="22" fill="none" stroke="#0284c7" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
          <div>
            <p class="text-[13px] font-bold">Expected Response Time</p>
            <p class="text-[#0284c7] font-extrabold text-[15px] mt-[2px]">Soon</p>
          </div>
        </div>

        <!-- Emergency -->
        <div class="mt-[18px] border border-[#fecaca] bg-[#fef2f2] rounded-lg p-[16px] flex gap-4">
          <svg width="22" height="22" fill="none" stroke="#ef4444" stroke-width="2" viewBox="0 0 24 24">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2A19.79 19.79 0 0 1 3 5.18 2 2 0 0 1 5 3h3a2 2 0 0 1 2 1.72c.12.9.35 1.77.68 2.6a2 2 0 0 1-.45 2.11L9 10a16 16 0 0 0 6 6l.57-1.23a2 2 0 0 1 2.11-.45c.83.33 1.7.56 2.6.68A2 2 0 0 1 22 16.92z"/>
          </svg>

          <div>
            <p class="font-extrabold text-[14px]">Emergency Assistance</p>
            <p class="text-[12px] text-[#475569] mt-[3px]">
              If this is a life-threatening emergency, please call immediately:
            </p>
            <p class="text-[#ef4444] font-extrabold mt-[8px]">+880 1712-345678</p>
          </div>
        </div>

        <!-- Buttons -->
        <div class="grid grid-cols-3 gap-[12px] mt-[28px]">
          
          <a href="victim_dashboard.php" class="h-[48px] bg-[#0ea5e9] text-white rounded-lg font-bold text-[14px] flex items-center justify-center gap-2">
            ⌂ Back to Dashboard
          </a>

          <a href="victim_new_request.php" class="h-[48px] border border-[#0ea5e9] text-[#0ea5e9] rounded-lg font-bold text-[14px] flex items-center justify-center gap-2">
            📄 New Request
          </a>

          <a href="victim_chat.php" class="h-[48px] border border-[#22c55e] text-[#16a34a] rounded-lg font-bold text-[14px] flex items-center justify-center gap-2">
            💬 Chat Support
          </a>
        </div>

      </div>
    </div>

    <!-- Footer -->
    <p class="text-[13px] text-[#64748b] mt-[20px]">
      You can track the status of your request from your dashboard
    </p>

  </div>
</body>
</html>