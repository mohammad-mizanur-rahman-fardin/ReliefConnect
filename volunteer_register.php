<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Volunteer Register</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .input-wrap { position: relative; width: 100%; }
    .input-wrap svg.input-icon {
      position: absolute; left: 13px; top: 50%; transform: translateY(-50%);
      width: 16px; height: 16px; color: #9ca3af; pointer-events: none;
    }
    .input-wrap svg.eye-icon {
      position: absolute; right: 13px; top: 50%; transform: translateY(-50%);
      width: 16px; height: 16px; color: #9ca3af; cursor: pointer;
    }
    .input-wrap input {
      width: 100%; border: 1px solid #d1d5db; border-radius: 10px;
      padding: 12px 13px 12px 38px; font-size: 14px; color: #374151;
      outline: none; background: #fff; transition: border-color 0.15s;
    }
    .input-wrap input::placeholder { color: #9ca3af; }
    .input-wrap input:focus { border-color: #00BFFF; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }

    .tab-btn {
      flex: 1; padding: 10px; font-size: 14px; font-weight: 600;
      border-radius: 8px; border: none; cursor: pointer; transition: all 0.15s;
    }
    .tab-btn.active  { background: #fff; color: #111827; box-shadow: 0 1px 4px rgba(0,0,0,0.1); }
    .tab-btn.inactive { background: transparent; color: #6b7280; }
  </style>
</head>
<body class="bg-slate-100 text-gray-800 flex flex-col min-h-screen">

<!-- ── NAV ── -->
<nav class="bg-black px-8 py-4 flex items-center justify-between">
  <div class="text-xl font-bold">
    <span style="color:#00BFFF;">Relief</span><span class="text-white">Connect</span>
  </div>
  <div class="flex items-center gap-8">
    <a href="#" class="text-sm text-gray-300 hover:text-white">Home</a>
    <a href="#" class="text-sm text-gray-300 hover:text-white">Campaigns</a>
    <a href="#" class="text-sm text-gray-300 hover:text-white">About</a>
    <a href="#" class="text-sm text-gray-300 hover:text-white">Contact</a>
  </div>
  <div class="flex items-center gap-4">
    <a href="#" class="text-sm text-gray-300 hover:text-white">Login</a>
    <button style="background:#00BFFF;" class="text-white text-sm font-semibold px-5 py-2 rounded-lg hover:opacity-90">Register</button>
  </div>
</nav>

<!-- ── MAIN ── -->
<main class="flex-1 flex items-start justify-center py-12 px-4">
  <div class="w-full max-w-md bg-white rounded-2xl shadow-lg overflow-hidden">

    <!-- Card Header -->
    <div style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);" class="px-7 pt-7 pb-6">
      <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 rounded-xl bg-white/20 flex items-center justify-center shrink-0">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
          </svg>
        </div>
        <div>
          <h2 class="text-xl font-bold text-white">Volunteer</h2>
          <p class="text-sm text-white/80">View tasks and update status</p>
        </div>
      </div>
      <a href="role_page.php" class="text-sm text-white/90 hover:text-white hover:underline underline-offset-2">← Change Role</a>
    </div>

    <!-- Card Body -->
    <div class="px-7 py-6">

      <!-- Tabs -->
      <div class="flex gap-1 bg-gray-100 rounded-xl p-1 mb-6">
        <button class="tab-btn inactive" onclick="window.location='volunteer_login.php'">Login</button>
        <button class="tab-btn active">Register</button>
      </div>

      <!-- Full Name -->
      <div class="mb-4">
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Full Name</label>
        <div class="input-wrap">
          <svg class="input-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="8" r="4"/>
            <path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
          </svg>
          <input type="text" placeholder="Enter your full name"/>
        </div>
      </div>

      <!-- Email -->
      <div class="mb-4">
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Email Address</label>
        <div class="input-wrap">
          <svg class="input-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
          </svg>
          <input type="email" placeholder="Enter your email"/>
        </div>
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Password</label>
        <div class="input-wrap">
          <svg class="input-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0110 0v4"/>
          </svg>
          <input type="password" id="password" placeholder="Enter your password"/>
          <svg class="eye-icon" onclick="togglePwd('password')" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
      </div>

      <!-- Confirm Password -->
      <div class="mb-6">
        <label class="block text-sm font-semibold text-gray-700 mb-1.5">Confirm Password</label>
        <div class="input-wrap">
          <svg class="input-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0110 0v4"/>
          </svg>
          <input type="password" id="confirm" placeholder="Confirm your password"/>
        </div>
      </div>

      <!-- Submit -->
      <button style="background:#00BFFF;" class="w-full text-white font-semibold text-sm py-3.5 rounded-xl hover:opacity-90 transition-opacity mb-5">
        Create Account
      </button>

      <!-- Note -->
      <div style="background:#e0f7ff; border:1px solid #bae6fd;" class="rounded-xl px-4 py-3 mb-5">
        <p class="text-sm" style="color:#0369a1;">
          <span class="font-bold">Note:</span> Volunteer accounts require admin approval before activation.
        </p>
      </div>

      <!-- Back -->
      <p class="text-center text-sm text-gray-400">← <a href="index.php" class="hover:text-gray-600">Back to Home</a></p>
    </div>
  </div>
</main>

<!-- ── FOOTER ── -->
<?php include 'footer.php'; ?>

<script>
  function togglePwd(id) {
    const el = document.getElementById(id);
    el.type = el.type === 'password' ? 'text' : 'password';
  }
</script>
</body>
</html>
