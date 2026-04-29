<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Reports & Analytics</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .brand-bg   { background-color: #00BFFF; }
    .brand-text { color: #00BFFF; }
    .brand-border { border-color: #00BFFF; }

    .filter-btn {
      padding: 6px 16px;
      border-radius: 6px;
      font-size: 13px;
      font-weight: 500;
      border: 1px solid #d1d5db;
      background: #fff;
      color: #374151;
      cursor: pointer;
      transition: all 0.15s;
    }
    .filter-btn:hover { border-color: #00BFFF; color: #00BFFF; }
    .filter-btn.active { background: #00BFFF; color: #fff; border-color: #00BFFF; }

    .badge {
      display: inline-block;
      padding: 2px 10px;
      border-radius: 9999px;
      font-size: 11px;
      font-weight: 600;
    }
    .badge-ops   { background: #e0f2fe; color: #0284c7; }
    .badge-vol   { background: #dcfce7; color: #16a34a; }
    .badge-log   { background: #fef9c3; color: #ca8a04; }
    .badge-fin   { background: #fce7f3; color: #db2777; }
    .badge-demo  { background: #ede9fe; color: #7c3aed; }

    .dl-btn {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #00BFFF;
      color: #fff;
      font-size: 13px;
      font-weight: 600;
      padding: 8px 18px;
      border-radius: 7px;
      border: none;
      cursor: pointer;
      transition: background 0.15s;
      white-space: nowrap;
    }
    .dl-btn:hover { background: #009FDF; }

    .bullet-dot::before {
      content: "•";
      margin-right: 8px;
      color: #374151;
    }
  </style>
</head>
<body class="bg-white text-gray-800">

<!-- ── NAV ── -->
<?php include 'navbar.php'; ?>

<!-- ── HERO ── -->
<section class="brand-bg text-white text-center py-12 px-4">
  <h1 class="text-3xl font-bold mb-2">Reports & Analytics</h1>
  <p class="text-sm opacity-90">Transparent reporting on our relief operations, impact metrics, and resource utilization.</p>
</section>

<!-- ── STAT CARDS ── -->
<section class="py-10 px-6">
  <div class="max-w-5xl mx-auto grid grid-cols-4 gap-4">

    <!-- Total Reports -->
    <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
      <div class="mb-3">
        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
        </svg>
      </div>
      <p class="text-2xl font-bold text-gray-900">156</p>
      <p class="text-sm text-gray-500 mt-0.5">Total Reports Published</p>
    </div>

    <!-- Reports This Month -->
    <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
      <div class="mb-3">
        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="1.8">
          <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
          <line x1="16" y1="2" x2="16" y2="6"/>
          <line x1="8" y1="2" x2="8" y2="6"/>
          <line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
      </div>
      <p class="text-2xl font-bold text-gray-900">12</p>
      <p class="text-sm text-gray-500 mt-0.5">Reports This Month</p>
    </div>

    <!-- Data Points -->
    <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
      <div class="mb-3">
        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="1.8">
          <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
          <polyline points="16 7 22 7 22 13"/>
        </svg>
      </div>
      <p class="text-2xl font-bold text-gray-900">50K+</p>
      <p class="text-sm text-gray-500 mt-0.5">Data Points Tracked</p>
    </div>

    <!-- Stakeholder Access -->
    <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
      <div class="mb-3">
        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="#f97316" stroke-width="1.8">
          <circle cx="9" cy="7" r="3"/>
          <circle cx="15" cy="7" r="3"/>
          <path stroke-linecap="round" d="M3 19c0-3.314 2.686-6 6-6s6 2.686 6 6"/>
          <path stroke-linecap="round" d="M15 13c2.5 0 5 1.5 5 4.5" opacity="0.7"/>
        </svg>
      </div>
      <p class="text-2xl font-bold text-gray-900">1,200+</p>
      <p class="text-sm text-gray-500 mt-0.5">Stakeholder Access</p>
    </div>

  </div>
</section>

<!-- ── FILTER + REPORTS ── -->
<section class="px-6 pb-14">
  <div class="max-w-5xl mx-auto">

    <!-- Filter row -->
    <div class="flex items-center gap-3 mb-5">
      <div class="flex items-center gap-1.5 text-sm text-gray-500 mr-1">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"/>
        </svg>
        Filter by Category:
      </div>
      <button class="filter-btn active">All Reports</button>
      <button class="filter-btn">Operations</button>
      <button class="filter-btn">Finance</button>
      <button class="filter-btn">Logistics</button>
      <button class="filter-btn">Volunteers</button>
      <button class="filter-btn">Demographics</button>
    </div>

    <h2 class="text-xl font-bold mb-5">Available Reports</h2>

    <!-- Grid of report cards -->
    <div class="grid grid-cols-2 gap-5">

      <!-- 1. Monthly Operations Summary -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Monthly Operations Summary – March 2026</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-ops">Operations</span>
              <span class="text-xs text-gray-400">April 1, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Comprehensive overview of all relief operations, camp activities, and resource utilization for March 2026.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">45 pages • 2.4 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

      <!-- 2. Volunteer Impact Report -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <circle cx="9" cy="7" r="3"/><circle cx="15" cy="7" r="3"/>
              <path stroke-linecap="round" d="M3 19c0-3.314 2.686-6 6-6s6 2.686 6 6"/>
              <path stroke-linecap="round" d="M15 13c2.5 0 5 1.5 5 4.5" opacity="0.6"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Volunteer Impact Report Q1 2026</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-vol">Volunteers</span>
              <span class="text-xs text-gray-400">April 2, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Analysis of volunteer contributions, task completion rates, and community impact metrics.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">32 pages • 1.8 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

      <!-- 3. Supply Chain & Inventory -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Supply Chain & Inventory Report</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-log">Logistics</span>
              <span class="text-xs text-gray-400">April 3, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Detailed tracking of supply donations, inventory levels, and distribution patterns across all camps.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">58 pages • 3.1 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

      <!-- 4. Donation & Funding Analysis -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <circle cx="12" cy="12" r="9"/>
              <text x="8.5" y="16.5" font-size="11" font-weight="bold" fill="#00BFFF" stroke="none" font-family="Inter,sans-serif">$</text>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Donation & Funding Analysis 2026</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-fin">Finance</span>
              <span class="text-xs text-gray-400">March 31, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Financial report covering all monetary and material donations, campaign performance, and fund allocation.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">28 pages • 1.5 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

      <!-- 5. Camp Performance Metrics -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
              <polyline points="16 7 22 7 22 13"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Camp Performance Metrics – March</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-ops">Operations</span>
              <span class="text-xs text-gray-400">March 30, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Individual camp statistics including occupancy rates, resource efficiency, and service delivery metrics.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">38 pages • 2.2 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

      <!-- 6. Affected Population Demographics -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm flex flex-col gap-3">
        <div class="flex items-start gap-3">
          <div class="mt-0.5 shrink-0">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="#00BFFF" stroke-width="1.8">
              <circle cx="12" cy="8" r="4"/>
              <path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
            </svg>
          </div>
          <div>
            <h3 class="font-bold text-base leading-tight mb-1">Affected Population Demographics Report</h3>
            <div class="flex items-center gap-2">
              <span class="badge badge-demo">Demographics</span>
              <span class="text-xs text-gray-400">March 28, 2026</span>
            </div>
          </div>
        </div>
        <p class="text-sm text-gray-500 leading-relaxed">Statistical analysis of individuals served, help requests processed, and demographic information.</p>
        <div class="flex items-center justify-between mt-auto pt-1">
          <span class="text-xs text-gray-400">35 pages • 1.9 MB</span>
          <button class="dl-btn">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
            Download
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── TRANSPARENCY SECTION ── -->
<section class="px-6 pb-16">
  <div class="max-w-5xl mx-auto">
    <div class="border border-gray-200 rounded-xl p-8 shadow-sm bg-white max-w-2xl mx-auto">
      <h2 class="text-xl font-bold mb-3">Our Commitment to Transparency</h2>
      <p class="text-sm text-gray-600 leading-relaxed mb-4">
        At ReliefConnect, we believe in complete transparency in our operations. All reports are regularly audited and made available to stakeholders, donors, and the public. Our reporting covers:
      </p>
      <ul class="text-sm text-gray-600 space-y-2 mb-5">
        <li class="bullet-dot">Detailed financial breakdowns of all donations and expenditures</li>
        <li class="bullet-dot">Real-time operational metrics from all relief camps</li>
        <li class="bullet-dot">Volunteer impact assessments and success stories</li>
        <li class="bullet-dot">Supply chain tracking and distribution analytics</li>
        <li class="bullet-dot">Demographic data and community impact measurements</li>
      </ul>
      <p class="text-sm text-gray-600">
        For access to restricted reports or custom analytics, please
        <a href="#" style="color:#00BFFF;" class="hover:underline">login to your account</a>
        or
        <a href="#" style="color:#00BFFF;" class="hover:underline">contact us</a>.
      </p>
    </div>
  </div>
</section>

<!-- ── SUBSCRIBE CTA ── -->
<section class="bg-white text-white text-center py-14 px-4">
  <h2 class="text-2xl font-bold mb-2 text-[#00BFFF]">Stay Informed About Our Impact</h2>
  <p class="text-sm text-gray-400 mb-7 text-black">Subscribe to receive monthly reports and updates on our relief operations.</p>
  <button class="brand-bg text-white font-semibold text-sm px-8 py-2.5 rounded-lg hover:opacity-90 transition-opacity">Subscribe</button>
</section>

<!-- ── FOOTER ── -->
<?php include 'footer.php'; ?>

<script>
  // Filter button interactivity
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    });
  });
</script>

</body>
</html>