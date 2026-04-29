<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Select Your Role</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .role-card {
      border-radius: 16px;
      border: 2px solid transparent;
      background: #fff;
      box-shadow: 0 2px 12px rgba(0,0,0,0.07);
      padding: 28px 24px;
      cursor: pointer;
      transition: box-shadow 0.2s, transform 0.2s;
      width: 100%;
    }
    .role-card:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.12); }

    .card-admin    { border-color: #ef4444; }
    .card-manager  { border-color: #22aaff; }
    .card-volunteer{ border-color: #6d8ef7; }
    .card-donor    { border-color: #22c55e; }
    .card-affected { border-color: #334155; }

    .icon-wrap {
      width: 56px; height: 56px;
      border-radius: 14px;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 18px;
    }
    .icon-admin     { background: #ef4444; }
    .icon-manager   { background: #2196f3; }
    .icon-volunteer { background: #5b6ef5; }
    .icon-donor     { background: #22c55e; }
    .icon-affected  { background: #475569; }

    /* Modal overlay */
    #modal-overlay {
      display: none;
      position: fixed; inset: 0; z-index: 100;
      background: rgba(0,0,0,0.45);
      align-items: flex-start;
      justify-content: center;
      padding: 40px 16px;
      overflow-y: auto;
    }
    #modal-overlay.active { display: flex; }

    /* Modal box */
    #modal-box {
      background: #fff;
      border-radius: 18px;
      width: 100%;
      max-width: 580px;
      max-height: 80vh;
      display: flex;
      flex-direction: column;
      box-shadow: 0 20px 60px rgba(0,0,0,0.2);
      position: relative;
    }

    /* Sticky header inside modal */
    #modal-header {
      padding: 28px 28px 16px;
      border-bottom: 1px solid #e5e7eb;
      flex-shrink: 0;
    }

    /* Scrollable body */
    #modal-body {
      overflow-y: auto;
      padding: 24px 28px;
      flex: 1;
    }

    /* Sticky footer inside modal */
    #modal-footer {
      padding: 16px 28px;
      border-top: 1px solid #e5e7eb;
      flex-shrink: 0;
    }

    /* Role section in modal */
    .role-section { margin-bottom: 36px; }
    .role-section:last-child { margin-bottom: 0; }

    .role-icon-sm {
      width: 44px; height: 44px;
      border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }

    .resp-item {
      font-size: 13px;
      color: #374151;
      padding: 3px 0 3px 16px;
      position: relative;
    }
    .resp-item::before {
      content: "•";
      position: absolute;
      left: 4px;
      color: #374151;
    }

    .ideal-box {
      background: #eff9ff;
      border: 1px solid #bae6fd;
      border-radius: 10px;
      padding: 12px 16px;
      margin-top: 14px;
    }

    /* Custom scrollbar */
    #modal-body::-webkit-scrollbar { width: 6px; }
    #modal-body::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 99px; }
    #modal-body::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 99px; }
    #modal-body::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
  </style>
</head>
<body class="bg-slate-50 text-gray-800 flex flex-col min-h-screen">

<!-- ── NAV ── -->
<?php include 'navbar.php'; ?>

<!-- ── MAIN ── -->
<main class="flex-1 flex flex-col items-center py-14 px-4">

  <h1 class="text-4xl font-extrabold text-gray-900 mb-2 text-center">
    Welcome to <span style="color:#00BFFF;">ReliefConnect</span>
  </h1>
  <p class="text-gray-500 text-base mb-10 text-center">Select your role to continue</p>

  <!-- cards grid -->
  <div class="w-full max-w-4xl">
    <!-- row 1: 3 cards -->
    <div class="grid grid-cols-3 gap-5 mb-5">

      <!-- Admin -->
      <div class="role-card card-admin">
        <a href="admin_login.php">
          <div class="icon-wrap icon-admin">
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z" fill="white"/>
              <path d="M9 12l2 2 4-4" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <h3 class="font-bold text-lg text-gray-900 mb-1">Admin</h3>
          <p class="text-sm text-gray-500">Manage system, camps, and approvals</p>
        </a>
      </div>

      <!-- Camp Manager -->
      <div class="role-card card-manager">
        <a href="manager_register.php">
          <div class="icon-wrap icon-manager">
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <circle cx="9" cy="7" r="3" fill="white"/>
              <circle cx="15" cy="7" r="3" fill="white" opacity="0.7"/>
              <path d="M3 19c0-3.314 2.686-6 6-6s6 2.686 6 6" stroke="white" stroke-width="2" stroke-linecap="round"/>
              <path d="M15 13c2.5 0 5 1.5 5 4.5" stroke="white" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
            </svg>
          </div>
          <h3 class="font-bold text-lg text-gray-900 mb-1">Camp Manager</h3>
          <p class="text-sm text-gray-500">Manage relief camps and volunteers</p>
        </a>
      </div>

      <!-- Volunteer -->
      <div class="role-card card-volunteer">
        <a href="volunteer_register.php">
          <div class="icon-wrap icon-volunteer">
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <path d="M12 21C12 21 4 14.5 4 8.5C4 5.42 6.42 3 9.5 3C11.04 3 12 4 12 4C12 4 12.96 3 14.5 3C17.58 3 20 5.42 20 8.5C20 14.5 12 21 12 21Z" fill="white"/>
            </svg>
          </div>
          <h3 class="font-bold text-lg text-gray-900 mb-1">Volunteer</h3>
          <p class="text-sm text-gray-500">View tasks and update status</p>
        </a>
      </div>
    </div>

    <!-- row 2: 2 cards -->
    <div class="grid grid-cols-3 gap-5">

      <!-- Donor -->
      <div class="role-card card-donor">
        <a href="donor_register.php">
          <div class="icon-wrap icon-donor">
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <text x="7" y="18" font-size="16" font-weight="bold" fill="white" font-family="Inter,sans-serif">$</text>
            </svg>
          </div>
          <h3 class="font-bold text-lg text-gray-900 mb-1">Donor</h3>
          <p class="text-sm text-gray-500">Donate and track contributions</p>
        </a>
      </div>

      <!-- Affected Person -->
      <div class="role-card card-affected">
        <a href="victim_register.php">
          <div class="icon-wrap icon-affected">
            <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4" fill="white"/>
              <path d="M4 20c0-4 3.582-7 8-7s8 3 8 7" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="font-bold text-lg text-gray-900 mb-1">Affected Person</h3>
          <p class="text-sm text-gray-500">Request help and view relief status</p>
        </a>
      </div>

      <div></div>
    </div>
  </div>

  <!-- helper link -->
  <p class="text-sm text-gray-500 mt-10">
    Don't know which role to choose?
    <a href="#" id="open-modal" style="color:#00BFFF;" class="font-medium hover:underline">Learn more about roles</a>
  </p>
</main>

<!-- ── FOOTER ── -->
<?php include 'footer.php'; ?>

<!-- ═══════════════════════════════════════
     UNDERSTANDING ROLES MODAL
═══════════════════════════════════════ -->
<div id="modal-overlay" onclick="handleOverlayClick(event)">
  <div id="modal-box">

    <!-- Sticky Header -->
    <div id="modal-header">
      <div class="flex items-start justify-between">
        <div>
          <h2 class="text-2xl font-bold text-gray-900">Understanding Roles</h2>
          <p class="text-sm text-gray-500 mt-1">Choose the role that best fits your involvement</p>
        </div>
        <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 mt-1 ml-4 shrink-0">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Scrollable Body -->
    <div id="modal-body">

      <!-- ── Admin ── -->
      <div class="role-section">
        <div class="flex items-center gap-4 mb-4">
          <div class="role-icon-sm" style="background:#ef4444;">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
              <path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z" fill="white"/>
              <path d="M9 12l2 2 4-4" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900">Admin</h3>
            <p class="text-sm text-gray-500">System administrators have full control over the ReliefConnect platform.</p>
          </div>
        </div>

        <div class="flex items-center gap-2 mb-2">
          <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
          <span class="text-sm font-bold text-gray-800">Key Responsibilities:</span>
        </div>
        <div class="resp-item">Approve and manage camp managers</div>
        <div class="resp-item">Create and manage relief camp locations</div>
        <div class="resp-item">Oversee all system operations</div>
        <div class="resp-item">Update central inventory and supplies</div>
        <div class="resp-item">Monitor platform analytics and reports</div>
        <div class="resp-item">Approve volunteer and manager applications</div>

        <div class="ideal-box">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <span class="text-sm font-bold" style="color:#00BFFF;">Ideal For:</span>
          </div>
          <p class="text-sm" style="color:#00BFFF;">Organization leadership, IT administrators, and senior coordinators</p>
        </div>
      </div>

      <hr class="border-gray-100 my-2"/>

      <!-- ── Camp Manager ── -->
      <div class="role-section mt-6">
        <div class="flex items-center gap-4 mb-4">
          <div class="role-icon-sm" style="background:#2196f3;">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
              <circle cx="9" cy="7" r="3" fill="white"/>
              <circle cx="15" cy="7" r="3" fill="white" opacity="0.7"/>
              <path d="M3 19c0-3.314 2.686-6 6-6s6 2.686 6 6" stroke="white" stroke-width="2" stroke-linecap="round"/>
              <path d="M15 13c2.5 0 5 1.5 5 4.5" stroke="white" stroke-width="2" stroke-linecap="round" opacity="0.7"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900">Camp Manager</h3>
            <p class="text-sm text-gray-500">Camp managers oversee day-to-day operations at relief camps.</p>
          </div>
        </div>

        <div class="flex items-center gap-2 mb-2">
          <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
          <span class="text-sm font-bold text-gray-800">Key Responsibilities:</span>
        </div>
        <div class="resp-item">Manage camp-specific inventory and supplies</div>
        <div class="resp-item">Register affected individuals at camps</div>
        <div class="resp-item">Assign tasks to volunteers</div>
        <div class="resp-item">Record supply distributions</div>
        <div class="resp-item">Track camp occupancy and needs</div>
        <div class="resp-item">Coordinate with central administration</div>

        <div class="ideal-box">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <span class="text-sm font-bold" style="color:#00BFFF;">Ideal For:</span>
          </div>
          <p class="text-sm" style="color:#00BFFF;">On-site coordinators, facility managers, and team leads</p>
        </div>
      </div>

      <hr class="border-gray-100 my-2"/>

      <!-- ── Volunteer ── -->
      <div class="role-section mt-6">
        <div class="flex items-center gap-4 mb-4">
          <div class="role-icon-sm" style="background:#5b6ef5;">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
              <path d="M12 21C12 21 4 14.5 4 8.5C4 5.42 6.42 3 9.5 3C11.04 3 12 4 12 4C12 4 12.96 3 14.5 3C17.58 3 20 5.42 20 8.5C20 14.5 12 21 12 21Z" fill="white"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900">Volunteer</h3>
            <p class="text-sm text-gray-500">Volunteers are the backbone of relief operations, providing hands-on support.</p>
          </div>
        </div>

        <div class="flex items-center gap-2 mb-2">
          <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
          <span class="text-sm font-bold text-gray-800">Key Responsibilities:</span>
        </div>
        <div class="resp-item">View assigned tasks and responsibilities</div>
        <div class="resp-item">Update task completion status</div>
        <div class="resp-item">Track volunteer hours and contributions</div>
        <div class="resp-item">Access camp schedules and information</div>
        <div class="resp-item">Communicate with camp managers</div>
        <div class="resp-item">Participate in relief activities</div>

        <div class="ideal-box">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <span class="text-sm font-bold" style="color:#00BFFF;">Ideal For:</span>
          </div>
          <p class="text-sm" style="color:#00BFFF;">Community members, students, and anyone wanting to help</p>
        </div>
      </div>

      <hr class="border-gray-100 my-2"/>

      <!-- ── Donor ── -->
      <div class="role-section mt-6">
        <div class="flex items-center gap-4 mb-4">
          <div class="role-icon-sm" style="background:#22c55e;">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
              <text x="6" y="17" font-size="14" font-weight="bold" fill="white" font-family="Inter,sans-serif">$</text>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900">Donor</h3>
            <p class="text-sm text-gray-500">Donors provide financial and material support to relief efforts.</p>
          </div>
        </div>

        <div class="flex items-center gap-2 mb-2">
          <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
          <span class="text-sm font-bold text-gray-800">Key Responsibilities:</span>
        </div>
        <div class="resp-item">Make monetary donations to campaigns</div>
        <div class="resp-item">Donate physical supplies and resources</div>
        <div class="resp-item">Track donation history and impact</div>
        <div class="resp-item">View how contributions are being used</div>
        <div class="resp-item">Support specific camps or causes</div>
        <div class="resp-item">Receive tax receipts and acknowledgments</div>

        <div class="ideal-box">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <span class="text-sm font-bold" style="color:#00BFFF;">Ideal For:</span>
          </div>
          <p class="text-sm" style="color:#00BFFF;">Individuals, organizations, and businesses wanting to contribute</p>
        </div>
      </div>

      <hr class="border-gray-100 my-2"/>

      <!-- ── Affected Person ── -->
      <div class="role-section mt-6">
        <div class="flex items-center gap-4 mb-4">
          <div class="role-icon-sm" style="background:#475569;">
            <svg width="22" height="22" fill="none" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4" fill="white"/>
              <path d="M4 20c0-4 3.582-7 8-7s8 3 8 7" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-900">Affected Person</h3>
            <p class="text-sm text-gray-500">For individuals and families affected by disasters who need assistance.</p>
          </div>
        </div>

        <div class="flex items-center gap-2 mb-2">
          <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><polyline points="9 12 11 14 15 10"/></svg>
          <span class="text-sm font-bold text-gray-800">Key Responsibilities:</span>
        </div>
        <div class="resp-item">Submit help requests for urgent needs</div>
        <div class="resp-item">Track request status and updates</div>
        <div class="resp-item">View assigned camp information</div>
        <div class="resp-item">Access available relief services</div>
        <div class="resp-item">Receive supply distribution updates</div>
        <div class="resp-item">Communicate with camp staff</div>

        <div class="ideal-box">
          <div class="flex items-center gap-2 mb-1">
            <svg class="w-4 h-4" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <span class="text-sm font-bold" style="color:#00BFFF;">Ideal For:</span>
          </div>
          <p class="text-sm" style="color:#00BFFF;">Disaster-affected individuals and families seeking support</p>
        </div>
      </div>

    </div><!-- /modal-body -->

    <!-- Sticky Footer -->
    <div id="modal-footer">
      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-500">
          Still have questions?
          <a href="contact.php" style="color:#00BFFF;" class="font-semibold hover:underline">Contact us</a>
          for assistance.
        </p>
        <button onclick="closeModal()" style="background:#00BFFF;" class="text-white text-sm font-semibold px-6 py-2.5 rounded-lg hover:opacity-90 transition-opacity whitespace-nowrap">
          Got it, thanks!
        </button>
      </div>
    </div>

  </div><!-- /modal-box -->
</div><!-- /modal-overlay -->

<script>
  const overlay = document.getElementById('modal-overlay');

  document.getElementById('open-modal').addEventListener('click', function(e) {
    e.preventDefault();
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  });

  function closeModal() {
    overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  function handleOverlayClick(e) {
    if (e.target === overlay) closeModal();
  }

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeModal();
  });
</script>
</body>
</html>
