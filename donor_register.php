<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Donor Register - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    input { outline: none; }
    input:focus { border-color: #00BFFF !important; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }
  </style>
</head>
<body class="text-gray-900" style="background:#eef4f8; min-height:100vh;">

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- MAIN CONTENT -->
  <main class="py-12 px-4 flex justify-center">
    <div class="w-full max-w-md">

      <!-- Donor Role Banner -->
      <div class="rounded-t-2xl overflow-hidden" style="background:linear-gradient(135deg,#22c55e 0%,#16a34a 100%);">
        <div class="px-6 pt-6 pb-5">
          <div class="flex items-center gap-3 mb-3">
            <div class="w-12 h-12 rounded-xl bg-white bg-opacity-20 flex items-center justify-center flex-shrink-0">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <div>
              <div class="text-white font-black text-xl leading-tight">Donor</div>
              <div class="text-green-100 text-xs">Donate and track contributions</div>
            </div>
          </div>
          <a href="role_page.php" class="text-green-100 text-xs hover:text-white flex items-center gap-1">
            <span>←</span> Change Role
          </a>
        </div>
      </div>

      <!-- REGISTER FORM CARD -->
      <div id="register-card" class="bg-white rounded-b-2xl shadow-lg px-7 pt-6 pb-7">

        <!-- Tab Toggle -->
        <div class="flex rounded-xl overflow-hidden border border-gray-200 mb-6">
          <button onclick="goToLogin()" class="flex-1 py-2.5 text-sm font-semibold text-gray-500 bg-gray-50 hover:bg-gray-100 transition-colors">Login</button>
          <button class="flex-1 py-2.5 text-sm font-bold text-gray-900 bg-white border-l border-gray-200">Register</button>
        </div>

        <!-- Full Name -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name</label>
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
            <input type="text" placeholder="Enter your full name" class="w-full border border-gray-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
          </div>
        </div>

        <!-- Email Address -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address</label>
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <input type="email" placeholder="Enter your email" class="w-full border border-gray-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
          </div>
        </div>

        <!-- Password -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Password</label>
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            <input type="password" id="password" placeholder="Enter your password" class="w-full border border-gray-200 rounded-lg pl-9 pr-10 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
            <button onclick="togglePwd('password')" class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
              </svg>
            </button>
          </div>
        </div>

        <!-- Confirm Password -->
        <div class="mb-5">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Confirm Password</label>
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            <input type="password" placeholder="Confirm your password" class="w-full border border-gray-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
          </div>
        </div>

        <!-- Create Account Button -->
        <button onclick="showSuccess()" class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity mb-4" style="background:#00BFFF">
          Create Account
        </button>

        <!-- Note -->
        <div class="rounded-lg px-4 py-3 mb-5" style="background:#eff9ff; border:1px solid #bae6fd;">
          <p class="text-xs leading-relaxed" style="color:#0284c7;">
            <span class="font-bold">Note:</span> Donor accounts require admin approval before activation.
          </p>
        </div>

        <!-- Back to Home -->
        <div class="text-center">
          <a href="index.php" class="text-gray-400 text-xs hover:text-gray-600">← Back to Home</a>
        </div>

      </div>

      <!-- SUCCESS CARD (hidden by default) -->
      <div id="success-card" class="hidden bg-white rounded-b-2xl shadow-lg px-7 pt-8 pb-8">
        <h2 class="text-3xl font-black text-gray-900 leading-tight mb-8">
          Your request has been sent to admin for approval
        </h2>
        <button onclick="goToLogin()" class="w-full text-white text-sm font-bold py-3.5 rounded-lg hover:opacity-90 transition-opacity" style="background:linear-gradient(135deg,#22c55e 0%,#16a34a 100%);">
          Go Back to login
        </button>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

  <script>
    function togglePwd(id) {
      const f = document.getElementById(id);
      f.type = f.type === 'password' ? 'text' : 'password';
    }

    function showSuccess() {
      document.getElementById('register-card').classList.add('hidden');
      document.getElementById('success-card').classList.remove('hidden');
    }

    function goToLogin() {
      window.location.href = 'donor_login.php';
    }
  </script>
</body>
</html>