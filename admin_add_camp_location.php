<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Add Camp Location</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    input[type="text"], input[type="email"], input[type="tel"],
    input[type="date"], input[type="number"], input[type="url"], textarea, select {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 7px;
      padding: 10px 13px;
      font-size: 13.5px;
      color: #374151;
      outline: none;
      background: #fff;
      transition: border-color 0.15s;
    }
    input::placeholder, textarea::placeholder { color: #9ca3af; }
    input:focus, textarea:focus, select:focus {
      border-color: #00BFFF;
      box-shadow: 0 0 0 2px rgba(0,191,255,0.1);
    }
    select { appearance: none; cursor: pointer; color: #6b7280; }

    .icon-input { position: relative; }
    .icon-input .i-icon {
      position: absolute; left: 11px; top: 50%;
      transform: translateY(-50%); color: #9ca3af;
      width: 15px; height: 15px; pointer-events: none;
    }
    .icon-input input { padding-left: 34px; }

    .select-wrap { position: relative; }
    .select-wrap .chevron {
      position: absolute; right: 12px; top: 50%;
      transform: translateY(-50%); pointer-events: none;
      color: #6b7280; width: 16px; height: 16px;
    }
    .select-wrap .sel-icon {
      position: absolute; left: 11px; top: 50%;
      transform: translateY(-50%); pointer-events: none;
      color: #6b7280; width: 15px; height: 15px;
    }
    .select-wrap select { padding-left: 13px; }
    .select-wrap.with-icon select { padding-left: 34px; }

    .section-card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 12px;
      padding: 24px;
    }

    .section-icon {
      width: 36px; height: 36px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }

    label.field-label {
      display: block; font-size: 13px; font-weight: 600;
      color: #374151; margin-bottom: 6px;
    }

    /* Facility toggle buttons */
    .facility-btn {
      border: 1px solid #d1d5db;
      border-radius: 7px;
      padding: 10px 14px;
      font-size: 13px;
      color: #374151;
      background: #fff;
      cursor: pointer;
      transition: all 0.15s;
      text-align: left;
      width: 100%;
    }
    .facility-btn:hover { border-color: #00BFFF; color: #00BFFF; }
    .facility-btn.selected { border-color: #00BFFF; background: #e0f7ff; color: #0369a1; font-weight: 600; }

    .drop-zone {
      border: 1.5px dashed #d1d5db;
      border-radius: 8px;
      padding: 40px 16px;
      text-align: center;
      cursor: pointer;
      transition: border-color 0.15s, background 0.15s;
    }
    .drop-zone:hover { border-color: #00BFFF; background: #f0fbff; }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex">

  <?php include 'admin_sidebar.php'; ?>

  <div class="w-[100%]">
    <!-- ══════════════════════════════
         TOP BAR
    ══════════════════════════════ -->
    <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between sticky top-0 z-10">
      <div class="flex items-center gap-3">
        <a href="admin_camp_location.php">
          <button class="text-gray-500 hover:text-gray-800 p-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
        </a>
        <div>
          <h1 class="text-lg font-bold text-gray-900 leading-tight">Add Camp Location</h1>
          <p class="text-xs text-gray-400">Create a new disaster relief camp location</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <a href="admin_camp_location.php">
          <button class="text-sm font-semibold text-gray-600 border border-gray-300 px-5 py-2 rounded-lg hover:bg-gray-50 transition-colors">
            Cancel
          </button>
        </a>
        <button style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-2 rounded-lg hover:opacity-90 transition-opacity">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
          </svg>
          Save Location
        </button>
      </div>
    </header>
    
    <!-- ══════════════════════════════
         CONTENT
    ══════════════════════════════ -->
    <main class="max-w-3xl mx-auto py-8 px-4 flex flex-col gap-5">
    
      <!-- ── Location Image ── -->
      <div class="section-card">
        <h2 class="text-sm font-bold text-gray-800 mb-4">Location Image</h2>
        <div class="flex items-center gap-6">
          <!-- Preview box -->
          <div class="w-28 h-20 rounded-xl flex items-center justify-center shrink-0" style="background:#22c55e;">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 4l9 5.75V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.75z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"/>
            </svg>
          </div>
          <!-- Upload info -->
          <div>
            <p class="text-sm font-semibold text-gray-800 mb-1">Upload Location Image</p>
            <p class="text-xs text-gray-400 mb-3">JPG, PNG or GIF. Max size 10MB. Recommended 800x600px.</p>
            <button class="flex items-center gap-2 border border-gray-300 text-gray-600 text-xs font-semibold px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
              </svg>
              Choose File
            </button>
          </div>
        </div>
      </div>
    
      <!-- ── Basic Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#e0fff4;">
            <svg class="w-5 h-5" style="color:#10b981;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/>
              <circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Basic Information</h2>
            <p class="text-xs text-gray-400">Essential details about the camp</p>
          </div>
        </div>
    
        <!-- Camp Name -->
        <div class="mb-4">
          <label class="field-label">Camp Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="e.g., Eastern Relief Camp, Northern Emergency Center"/>
        </div>
    
        <!-- Category + Max Capacity -->
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">Category <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
              <select style="padding-left:13px;">
                <option value="" disabled selected>Select an Option</option>
                <option>Emergency Relief</option>
                <option>Medical Camp</option>
                <option>Food Distribution</option>
                <option>Shelter</option>
              </select>
            </div>
          </div>
          <div>
            <label class="field-label">Maximum Capacity <span class="text-red-500">*</span></label>
            <div class="icon-input">
              <svg class="i-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
              </svg>
              <input type="number" placeholder="Maximum number of people"/>
            </div>
            <p class="text-xs text-gray-400 mt-1">Occupancy will be tracked separately</p>
          </div>
        </div>
    
        <!-- Opening Date + Status -->
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="field-label">Opening Date <span class="text-red-500">*</span></label>
            <div class="icon-input">
              <svg class="i-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              <input type="date"/>
            </div>
          </div>
          <div>
            <label class="field-label">Status <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
              <select style="padding-left:13px;">
                <option value="" disabled selected>Select an Option</option>
                <option>Active</option>
                <option>Inactive</option>
                <option>Standby</option>
                <option>Full</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    
      <!-- ── Address Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#f0fdf4;">
            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 4l9 5.75V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.75z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Address Information</h2>
            <p class="text-xs text-gray-400">Physical location details</p>
          </div>
        </div>
        <div>
          <label class="field-label">Street Address <span class="text-red-500">*</span></label>
          <input type="text" placeholder="123 Main Street, Building A"/>
        </div>
      </div>
    
      <!-- ── Map ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#ede9fe;">
            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9"/>
              <line x1="2" y1="12" x2="22" y2="12"/>
              <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Map</h2>
            <p class="text-xs text-gray-400">Provide location mapping information</p>
          </div>
        </div>
        <div>
          <label class="field-label">Google Maps Link <span class="text-red-500">*</span></label>
          <div class="icon-input">
            <svg class="i-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9"/>
              <line x1="2" y1="12" x2="22" y2="12"/>
              <path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
            </svg>
            <input type="url" placeholder="https://maps.google.com/?q=..."/>
          </div>
          <p class="text-xs text-gray-400 mt-1.5">Paste the Google Maps share link for this location. If google maps is not available, use decimal degree system and submit here.</p>
        </div>
      </div>
    
      <!-- ── Contact Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#fff7ed;">
            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Contact Information</h2>
            <p class="text-xs text-gray-400">Primary contact for this location</p>
          </div>
        </div>
    
        <div class="mb-4">
          <label class="field-label">Contact Person Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Full name of site coordinator"/>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="field-label">Contact Email <span class="text-red-500">*</span></label>
            <input type="email" placeholder="contact@reliefconnect.org"/>
          </div>
          <div>
            <label class="field-label">Contact Phone <span class="text-red-500">*</span></label>
            <input type="tel" placeholder="+1 234-567-8900"/>
          </div>
        </div>
      </div>
    
      <!-- ── Facilities & Amenities ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#eff6ff;">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Facilities & Amenities</h2>
            <p class="text-xs text-gray-400">Available services and facilities</p>
          </div>
        </div>
    
        <div class="grid grid-cols-4 gap-3">
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Medical Facility</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Food Service</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Clean Water</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Sanitation</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Power Supply</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Wifi</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Security</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Storage</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Transportation</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Counseling service</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Education Center</button>
          <button class="facility-btn" onclick="this.classList.toggle('selected')">Recreation Area</button>
        </div>
      </div>
    
      <!-- ── Additional Details ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#eff6ff;">
            <svg class="w-5 h-5 text-blue-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Additional Details</h2>
            <p class="text-xs text-gray-400">Description and notes</p>
          </div>
        </div>
    
        <div>
          <label class="field-label">Description / Notes</label>
          <textarea rows="5" placeholder="Provide detailed information about this camp location, including special considerations, nearby landmarks, accessibility information, or any other relevant details..."></textarea>
        </div>
      </div>
    
      <!-- ── Supporting Documents ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#fefce8;">
            <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Supporting Documents</h2>
            <p class="text-xs text-gray-400">Upload permits, floor plans, or other documents</p>
          </div>
        </div>
    
        <div class="drop-zone">
          <div class="flex justify-center mb-3">
            <svg class="w-9 h-9 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
            </svg>
          </div>
          <p class="text-sm text-gray-500">
            <span style="color:#00BFFF;" class="font-semibold cursor-pointer hover:underline">Click to upload</span>
            <span class="text-gray-400"> or drag and drop</span>
          </p>
          <p class="text-xs text-gray-400 mt-1">PDF, JPG, PNG, or DOCX (max. 20MB per file)</p>
        </div>
      </div>
    
      <!-- ── Bottom Action Bar ── -->
      <div class="bg-white border border-gray-200 rounded-xl px-6 py-4 flex items-center justify-between">
        <p class="text-xs text-gray-400">* Required fields</p>
        <div class="flex items-center gap-3">
          <a href="admin_camp_location.php">
            <button class="text-sm font-semibold text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg hover:bg-gray-50 transition-colors">
              Cancel
            </button>
          </a>
          <button style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-opacity">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
            </svg>
            Add Location
          </button>
        </div>
      </div>
    
    </main>

  </div>

</body>
</html>