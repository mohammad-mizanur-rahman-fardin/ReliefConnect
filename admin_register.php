<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Register - ReliefConnect</title>
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
  <nav class="bg-black text-white px-6 py-3 flex items-center justify-between sticky top-0 z-50">
    <div class="flex items-center gap-8">
      <div class="text-xl font-bold">
        <span style="color:#00BCFF">Relief</span><span class="text-white">Connect</span>
      </div>
      <ul class="hidden md:flex gap-6 text-sm text-gray-300">
        <li><a href="index.php" class="hover:text-white">Home</a></li>
        <li><a href="#" class="hover:text-white">Campaigns</a></li>
        <li><a href="about.php" class="hover:text-white">About</a></li>
        <li><a href="contact.php" class="hover:text-white">Contact</a></li>
        <li><a href="how_it_works.php" class="hover:text-white">How It Works</a></li>
      </ul>
    </div>
    <div class="flex items-center gap-3">
      <a href="#" class="text-sm text-white hover:text-gray-300">Login</a>
      <a href="#" class="text-white text-sm font-semibold px-4 py-2 rounded-md hover:opacity-90" style="background:#00BFFF">Register</a>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="py-12 px-4 flex justify-center">
    <div class="w-full max-w-md">

      <!-- Admin Role Banner -->
      <div class="rounded-t-2xl overflow-hidden" style="background:linear-gradient(135deg,#ef4444 0%,#dc2626 100%);">
        <div class="px-6 pt-6 pb-5">
          <div class="flex items-center gap-3 mb-3">
            <div class="w-12 h-12 rounded-xl bg-white bg-opacity-20 flex items-center justify-center flex-shrink-0">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
              </svg>
            </div>
            <div>
              <div class="text-white font-black text-xl leading-tight">Admin</div>
              <div class="text-red-100 text-xs">Manage system, camps, and approvals</div>
            </div>
          </div>
          <a href="role_page.php" class="text-red-100 text-xs hover:text-white flex items-center gap-1">
            <span>←</span> Change Role
          </a>
        </div>
      </div>

      <!-- Form Card -->
      <div class="bg-white rounded-b-2xl shadow-lg px-7 pt-6 pb-7">

        <!-- Tab Toggle -->
        <div class="flex rounded-xl overflow-hidden border border-gray-200 mb-6">
          <a href="admin_login.php" class="flex-1 py-2.5 text-sm font-semibold text-gray-500 bg-gray-50 hover:bg-gray-100 transition-colors text-center">Login</a>
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
        <div class="mb-6">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Confirm Password</label>
          <div class="relative">
            <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
            <input type="password" id="confirm-password" placeholder="Confirm your password" class="w-full border border-gray-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-gray-700 placeholder-gray-400 transition-all" />
          </div>
        </div>

        <!-- Create Account -->
        <button class="w-full text-white text-sm font-bold py-3 rounded-lg hover:opacity-90 transition-opacity mb-5" style="background:#00BFFF">
          Create Account
        </button>

        <!-- Back to Home -->
        <div class="text-center">
          <a href="index.php" class="text-gray-400 text-xs hover:text-gray-600">← Back to Home</a>
        </div>

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
  </script>
</body>
</html>
