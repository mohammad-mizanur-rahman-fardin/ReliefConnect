<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Add Camp Manager</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    input[type="text"], input[type="email"], input[type="tel"],
    input[type="date"], input[type="number"], textarea, select {
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
    select:focus { color: #374151; }

    .icon-input { position: relative; }
    .icon-input svg {
      position: absolute; left: 11px; top: 50%;
      transform: translateY(-50%); color: #9ca3af;
      width: 15px; height: 15px; pointer-events: none;
    }
    .icon-input input, .icon-input select { padding-left: 34px; }

    .select-wrap { position: relative; }
    .select-wrap .chevron {
      position: absolute; right: 12px; top: 50%;
      transform: translateY(-50%); pointer-events: none;
      color: #6b7280; width: 16px; height: 16px;
    }

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

    .checkbox-item {
      display: flex; align-items: center; gap: 8px;
      font-size: 13px; color: #374151;
    }
    .checkbox-item input[type="checkbox"] {
      width: 15px; height: 15px; border-radius: 3px;
      border: 1px solid #d1d5db; cursor: pointer;
      accent-color: #00BFFF; flex-shrink: 0;
      padding: 0;
    }

    .drop-zone {
      border: 1.5px dashed #d1d5db;
      border-radius: 8px;
      padding: 32px 16px;
      text-align: center;
      cursor: pointer;
      transition: border-color 0.15s, background 0.15s;
    }
    .drop-zone:hover { border-color: #00BFFF; background: #f0fbff; }

    label.field-label {
      display: block; font-size: 13px; font-weight: 600;
      color: #374151; margin-bottom: 6px;
    }
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
        <a href="admin_camp_manager.php">
          <button class="text-gray-500 hover:text-gray-800 p-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
          </button>
        </a>
        <div>
          <h1 class="text-lg font-bold text-gray-900 leading-tight">Add Camp Manager</h1>
          <p class="text-xs text-gray-400">Create a new camp manager account</p>
        </div>
      </div>
      <div class="flex items-center gap-3">
        <a href="admin_camp_manager.php">
          <button class="text-sm font-semibold text-gray-600 border border-gray-300 px-5 py-2 rounded-lg hover:bg-gray-50 transition-colors">
            Cancel
          </button>
        </a>
        <button style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-2 rounded-lg hover:opacity-90 transition-opacity">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
          </svg>
          Save Manager
        </button>
      </div>
    </header>
    
    <!-- ══════════════════════════════
         CONTENT
    ══════════════════════════════ -->
    <main class="max-w-3xl mx-auto py-8 px-4 flex flex-col gap-5">
    
      <!-- ── Profile Picture ── -->
      <div class="section-card">
        <h2 class="text-sm font-bold text-gray-800 mb-4">Profile Picture</h2>
        <div class="flex items-center gap-6">
          <!-- Avatar -->
          <div class="relative shrink-0">
            <div class="w-20 h-20 rounded-full flex items-center justify-center" style="background:#00BFFF;">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="4" fill="white" stroke="none"/>
                <path d="M4 20c0-4 3.582-7 8-7s8 3 8 7" fill="white" stroke="none"/>
              </svg>
            </div>
            <div class="absolute bottom-0 right-0 w-6 h-6 bg-gray-600 rounded-full flex items-center justify-center">
              <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                <circle cx="12" cy="13" r="3"/>
              </svg>
            </div>
          </div>
          <!-- Upload info -->
          <div>
            <p class="text-sm font-semibold text-gray-800 mb-1">Upload Profile Picture</p>
            <p class="text-xs text-gray-400 mb-3">JPG, PNG or GIF. Max size 5MB. Recommended 400x400px.</p>
            <button class="flex items-center gap-2 border border-gray-300 text-gray-600 text-xs font-semibold px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
              </svg>
              Choose File
            </button>
          </div>
        </div>
      </div>
    
      <!-- ── Personal Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#e0f7ff;">
            <svg class="w-5 h-5" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Personal Information</h2>
            <p class="text-xs text-gray-400">Basic details about the camp manager</p>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">First Name <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Enter first name"/>
          </div>
          <div>
            <label class="field-label">Last Name <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Enter last name"/>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">Email Address <span class="text-red-500">*</span></label>
            <div class="icon-input">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              <input type="email" placeholder="manager@reliefconnect.org"/>
            </div>
          </div>
          <div>
            <label class="field-label">Phone Number <span class="text-red-500">*</span></label>
            <div class="icon-input">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              <input type="tel" placeholder="+1 234-567-8900"/>
            </div>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="field-label">Date of Birth <span class="text-red-500">*</span></label>
            <div class="icon-input">
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <input type="date"/>
            </div>
          </div>
          <div>
            <label class="field-label">Gender <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select>
                <option value="" disabled selected>Select Gender</option>
                <option>Male</option><option>Female</option><option>Other</option><option>Prefer not to say</option>
              </select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
        </div>
      </div>
    
      <!-- ── Address Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#e0fff4;">
            <svg class="w-5 h-5" style="color:#10b981;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.686 2 6 4.686 6 8c0 4.5 6 12 6 12s6-7.5 6-12c0-3.314-2.686-6-6-6z"/>
              <circle cx="12" cy="8" r="2" fill="currentColor" stroke="none"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Address Information</h2>
            <p class="text-xs text-gray-400">Residential address details</p>
          </div>
        </div>
        <div>
          <label class="field-label">Street Address <span class="text-red-500">*</span></label>
          <input type="text" placeholder="123 Main Street, Apartment 4B"/>
        </div>
      </div>
    
      <!-- ── Assignment & Role ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#f3e8ff;">
            <svg class="w-5 h-5" style="color:#a855f7;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z" fill="currentColor" stroke="none" opacity="0.2"/>
              <path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z" fill="none" stroke="currentColor" stroke-width="2"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Assignment & Role</h2>
            <p class="text-xs" style="color:#00BFFF;">Camp and department assignment</p>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">Assigned Camp <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select><option value="" disabled selected>Select a Camp</option><option>Camp Alpha</option><option>Camp Beta</option><option>Northern Emergency Center</option><option>Western Support Hub</option></select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
          <div>
            <label class="field-label">Department <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select><option value="" disabled selected>Select Department</option><option>Operations</option><option>Logistics</option><option>Medical</option><option>Administration</option></select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="field-label">Highest Qualification <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select><option value="" disabled selected>Select Qualification</option><option>High School</option><option>Bachelor's Degree</option><option>Master's Degree</option><option>PhD</option></select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
          <div>
            <label class="field-label">Years of Experience <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select><option value="" disabled selected>Select Experience</option><option>Less than 1 year</option><option>1–3 years</option><option>3–5 years</option><option>5–10 years</option><option>10+ years</option></select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
        </div>
      </div>
    
      <!-- ── Emergency Contact ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#fef2f2;">
            <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Emergency Contact</h2>
            <p class="text-xs text-gray-400">In case of emergency</p>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">Contact Name <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Full name"/>
          </div>
          <div>
            <label class="field-label">Contact Phone <span class="text-red-500">*</span></label>
            <input type="tel" placeholder="+1 234-567-8905"/>
          </div>
        </div>
        <div>
          <label class="field-label">Relationship <span class="text-red-500">*</span></label>
          <div class="select-wrap">
            <select><option value="" disabled selected>Select Relationship</option><option>Spouse</option><option>Parent</option><option>Sibling</option><option>Friend</option><option>Other</option></select>
            <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
          </div>
        </div>
      </div>
    
      <!-- ── Identification ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#fff7ed;">
            <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="2" y="5" width="20" height="14" rx="2"/>
              <line x1="2" y1="10" x2="22" y2="10"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Identification</h2>
            <p class="text-xs text-gray-400">Government ID verification</p>
          </div>
        </div>
    
        <div class="grid grid-cols-2 gap-4 mb-4">
          <div>
            <label class="field-label">ID Type <span class="text-red-500">*</span></label>
            <div class="select-wrap">
              <select><option value="" disabled selected>Select ID Type</option><option>Passport</option><option>National ID</option><option>Driver's License</option></select>
              <svg class="chevron" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
            </div>
          </div>
          <div>
            <label class="field-label">ID Number <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Enter ID number"/>
          </div>
        </div>
    
        <div>
          <label class="field-label">Upload ID Document <span class="text-red-500">*</span></label>
          <div class="drop-zone">
            <div class="flex justify-center mb-2">
              <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
              </svg>
            </div>
            <p class="text-sm text-gray-500">
              <span style="color:#00BFFF;" class="font-semibold cursor-pointer hover:underline">Click to upload</span>
              <span class="text-gray-400"> or drag and drop</span>
            </p>
            <p class="text-xs text-gray-400 mt-1">PDF, JPG or PNG (max. 10MB)</p>
          </div>
        </div>
      </div>
    
      <!-- ── Additional Information ── -->
      <div class="section-card">
        <div class="flex items-center gap-3 mb-5">
          <div class="section-icon" style="background:#e0f7ff;">
            <svg class="w-5 h-5" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4"/><path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/>
            </svg>
          </div>
          <div>
            <h2 class="text-sm font-bold text-gray-900">Additional Information</h2>
            <p class="text-xs text-gray-400">Skills and background</p>
          </div>
        </div>
    
        <!-- Bio -->
        <div class="mb-5">
          <label class="field-label">Bio / Background</label>
          <textarea rows="4" placeholder="Provide a brief background about the manager's experience and skills..."></textarea>
        </div>
    
        <!-- Special Skills -->
        <div>
          <label class="field-label">Special Skills</label>
          <div class="grid grid-cols-3 gap-x-6 gap-y-3 mt-1">
            <label class="checkbox-item"><input type="checkbox"/> First Aid/CPR</label>
            <label class="checkbox-item"><input type="checkbox"/> Logistics Management</label>
            <label class="checkbox-item"><input type="checkbox"/> Crisis Communication</label>
            <label class="checkbox-item"><input type="checkbox"/> Team Leadership</label>
            <label class="checkbox-item"><input type="checkbox"/> Medical Training</label>
            <label class="checkbox-item"><input type="checkbox"/> Foreign Languages</label>
            <label class="checkbox-item"><input type="checkbox"/> Heavy Equipment Operation</label>
            <label class="checkbox-item"><input type="checkbox"/> IT/Technology</label>
            <label class="checkbox-item"><input type="checkbox"/> Food Safety</label>
          </div>
        </div>
      </div>
    
      <!-- ── Bottom Action Bar ── -->
      <div class="bg-white border border-gray-200 rounded-xl px-6 py-4 flex items-center justify-between">
        <p class="text-xs text-gray-400">* Required fields</p>
        <div class="flex items-center gap-3">
          <a href="admin_camp_manager.php">
            <button class="text-sm font-semibold text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg hover:bg-gray-50 transition-colors">
              Cancel
            </button>
          </a>
          <button style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-5 py-2.5 rounded-lg hover:opacity-90 transition-opacity">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
            </svg>
            Add Manager
          </button>
        </div>
      </div>
    
    </main>
  </div>
</body>
</html>