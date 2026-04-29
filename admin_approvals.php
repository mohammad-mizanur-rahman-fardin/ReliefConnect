<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Approvals</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }
  </style>
</head>
<body class="bg-white">

<div class="flex min-h-screen">

  <!-- Sidebar -->
  <?php include 'admin_sidebar.php'; ?>

  <!-- Main Content -->
  <main class="flex-1 bg-white">

    <!-- Top bar -->
    <div class="flex items-center justify-between px-8 py-4 border-b border-gray-200">
      <h1 class="text-2xl font-black text-gray-900">Approvals</h1>
      <div class="text-right">
        <div class="text-xs text-gray-500">Today's Date</div>
        <div class="text-sm font-bold text-gray-800">March 20, 2026</div>
      </div>
    </div>

    <!-- Content area -->
    <div class="px-8 py-8">
      <h2 class="text-xl font-bold text-gray-900">Pending Approvals</h2>
      <p class="text-sm text-gray-500 mt-1">Review and approve volunteer and donor applications</p>

      <!-- Filter tabs -->
      <div class="mt-5 bg-gray-50 rounded-xl p-3 inline-flex gap-2">
        <button id="btn-all" onclick="filterCards('all')" class="px-4 py-1.5 rounded-lg text-sm font-medium bg-cyan-500 text-white transition-all">All</button>
        <button id="btn-volunteers" onclick="filterCards('volunteer')" class="px-4 py-1.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-200 transition-all">Volunteers</button>
        <button id="btn-donors" onclick="filterCards('donor')" class="px-4 py-1.5 rounded-lg text-sm font-medium text-gray-600 hover:bg-gray-200 transition-all">Donors</button>
      </div>

      <!-- Applicant Cards -->
      <div id="cards-container" class="mt-5 space-y-3">

        <!-- John Smith -->
        <div class="card bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center justify-between shadow-sm" data-type="volunteer">
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div>
              <div class="text-base font-bold text-gray-900">John Smith</div>
              <div class="text-sm text-gray-500">john.smith@email.com</div>
              <div class="flex items-center gap-2 mt-1.5">
                <span class="text-xs text-blue-600 bg-blue-100 px-2.5 py-0.5 rounded-full font-medium">volunteer</span>
                <span class="text-xs text-gray-500">Applied: 2026-03-18</span>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-2 shrink-0">
            <button onclick="approveCard(this)" class="flex items-center gap-1.5 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Approve
            </button>
            <button onclick="rejectCard(this)" class="flex items-center gap-1.5 bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6M9 9l6 6"/>
              </svg>
              Reject
            </button>
          </div>
        </div>

        <!-- Lisa Anderson -->
        <div class="card bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center justify-between shadow-sm" data-type="donor">
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div>
              <div class="text-base font-bold text-gray-900">Lisa Anderson</div>
              <div class="text-sm text-gray-500">lisa.a@email.com</div>
              <div class="flex items-center gap-2 mt-1.5">
                <span class="text-xs text-blue-600 bg-blue-100 px-2.5 py-0.5 rounded-full font-medium">donor</span>
                <span class="text-xs text-gray-500">Applied: 2026-03-17</span>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-2 shrink-0">
            <button onclick="approveCard(this)" class="flex items-center gap-1.5 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Approve
            </button>
            <button onclick="rejectCard(this)" class="flex items-center gap-1.5 bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6M9 9l6 6"/>
              </svg>
              Reject
            </button>
          </div>
        </div>

        <!-- David Kim -->
        <div class="card bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center justify-between shadow-sm" data-type="volunteer">
          <div class="flex items-center gap-4">
            <div class="w-11 h-11 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
              </svg>
            </div>
            <div>
              <div class="text-base font-bold text-gray-900">David Kim</div>
              <div class="text-sm text-gray-500">david.k@email.com</div>
              <div class="flex items-center gap-2 mt-1.5">
                <span class="text-xs text-blue-600 bg-blue-100 px-2.5 py-0.5 rounded-full font-medium">volunteer</span>
                <span class="text-xs text-gray-500">Applied: 2026-03-16</span>
              </div>
            </div>
          </div>
          <div class="flex items-center gap-2 shrink-0">
            <button onclick="approveCard(this)" class="flex items-center gap-1.5 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
              Approve
            </button>
            <button onclick="rejectCard(this)" class="flex items-center gap-1.5 bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-4 py-2.5 rounded-lg transition-colors">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <circle cx="12" cy="12" r="9"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 9l-6 6M9 9l6 6"/>
              </svg>
              Reject
            </button>
          </div>
        </div>

      </div>
    </div>
  </main>
</div>

<script>
  function filterCards(type) {
    const cards = document.querySelectorAll('.card');
    const btns = { all: document.getElementById('btn-all'), volunteers: document.getElementById('btn-volunteers'), donors: document.getElementById('btn-donors') };
    const active = 'bg-cyan-500 text-white';
    const inactive = 'text-gray-600 hover:bg-gray-200';

    Object.values(btns).forEach(b => { b.className = b.className.replace('bg-cyan-500 text-white', '').trim(); if (!b.className.includes('text-gray-600')) b.className += ' text-gray-600 hover:bg-gray-200'; });

    const activeBtn = type === 'all' ? btns.all : type === 'volunteer' ? btns.volunteers : btns.donors;
    activeBtn.className = activeBtn.className.replace('text-gray-600', '').replace('hover:bg-gray-200', '').trim() + ' bg-cyan-500 text-white';

    cards.forEach(c => {
      const t = c.getAttribute('data-type');
      c.style.display = (type === 'all' || t === type) ? '' : 'none';
    });
  }

  function approveCard(btn) {
    const card = btn.closest('.card');
    card.style.transition = 'opacity 0.3s';
    card.style.opacity = '0';
    setTimeout(() => card.remove(), 300);
  }

  function rejectCard(btn) {
    const card = btn.closest('.card');
    card.style.transition = 'opacity 0.3s';
    card.style.opacity = '0';
    setTimeout(() => card.remove(), 300);
  }
</script>
</body>
</html>