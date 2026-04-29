<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ReliefConnect – Admin Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }

    .field-box {
      width: 100%; background: #f8fafc; border: 1px solid #e5e7eb;
      border-radius: 8px; padding: 11px 14px; font-size: 14px; color: #374151;
    }
    .field-input {
      width: 100%; background: #fff; border: 1px solid #d1d5db;
      border-radius: 8px; padding: 11px 14px; font-size: 14px; color: #374151;
      outline: none; transition: border-color 0.15s;
    }
    .field-input:focus { border-color: #00BFFF; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }
    textarea.field-input { resize: vertical; min-height: 90px; }

    .pwd-wrap { position: relative; }
    .pwd-wrap input {
      width: 100%; background: #fff; border: 1px solid #d1d5db;
      border-radius: 8px; padding: 11px 42px 11px 14px;
      font-size: 14px; color: #374151; outline: none; transition: border-color 0.15s;
    }
    .pwd-wrap input:focus { border-color: #00BFFF; box-shadow: 0 0 0 2px rgba(0,191,255,0.12); }
    .pwd-wrap input::placeholder { color: #9ca3af; }
    .pwd-wrap .eye-btn {
      position: absolute; right: 12px; top: 50%; transform: translateY(-50%);
      background: none; border: none; cursor: pointer; color: #9ca3af; padding: 0;
    }

    .toggle-wrap { position: relative; display: inline-block; width: 44px; height: 24px; }
    .toggle-wrap input { opacity: 0; width: 0; height: 0; }
    .toggle-slider {
      position: absolute; cursor: pointer; inset: 0;
      background: #d1d5db; border-radius: 9999px; transition: background 0.2s;
    }
    .toggle-slider::before {
      content: ""; position: absolute; width: 18px; height: 18px; border-radius: 50%;
      background: #fff; left: 3px; top: 3px; transition: transform 0.2s;
      box-shadow: 0 1px 3px rgba(0,0,0,0.2);
    }
    .toggle-wrap input:checked + .toggle-slider { background: #00BFFF; }
    .toggle-wrap input:checked + .toggle-slider::before { transform: translateX(20px); }

    .d-none { display: none !important; }
    .d-flex { display: flex !important; }
  </style>
</head>
<body class="bg-gray-100 min-h-screen flex">
    
    <!-- Sidebar -->    
    <?php include 'admin_sidebar.php';?>

    <div class="w-[100%]">
        <!-- TOP BAR -->
        <header class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div>
              <h1 class="text-lg font-bold text-gray-900 leading-tight">Admin Profile</h1>
              <p class="text-xs text-gray-400">Manage your account information and settings</p>
            </div>
          </div>
        </header>

        <main class="max-w-5xl mx-auto py-8 px-6">
          <div class="flex gap-6 items-start">

            <!-- LEFT PROFILE CARD -->
            <div class="w-72 shrink-0">
              <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6 text-center">
                <div class="relative inline-block mb-4">
                  <div class="w-24 h-24 rounded-full bg-red-500 flex items-center justify-center mx-auto">
                    <svg class="w-12 h-12 text-white" fill="white" viewBox="0 0 24 24"><path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z"/></svg>
                  </div>
                  <button class="absolute bottom-0 right-0 w-7 h-7 rounded-full bg-blue-500 flex items-center justify-center border-2 border-white shadow">
                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><circle cx="12" cy="13" r="3"/></svg>
                  </button>
                </div>
                <h2 class="text-xl font-bold text-gray-900">Admin User</h2>
                <p class="text-sm font-semibold mb-0.5" style="color:#00BFFF;">Super Administrator</p>
                <p class="text-sm text-gray-500 mb-5">Administration</p>
                <div class="text-left space-y-2.5 mb-6 border-t border-gray-100 pt-5">
                  <div class="flex items-center gap-2.5 text-sm text-gray-500">
                    <svg class="w-4 h-4 shrink-0 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    admin@reliefconnect.org
                  </div>
                  <div class="flex items-center gap-2.5 text-sm text-gray-500">
                    <svg class="w-4 h-4 shrink-0 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498A1 1 0 0121 15.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    +1 800-RELIEF-1
                  </div>
                  <div class="flex items-center gap-2.5 text-sm text-gray-500">
                    <svg class="w-4 h-4 shrink-0 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/></svg>
                    Headquarters, Main Office
                  </div>
                </div>
                <div class="grid grid-cols-3 gap-2 border-t border-gray-100 pt-5">
                  <div class="text-center"><p class="text-2xl font-bold text-gray-900">3</p><p class="text-xs text-gray-400 mt-0.5">Camps</p></div>
                  <div class="text-center border-x border-gray-100"><p class="text-2xl font-bold text-gray-900">12</p><p class="text-xs text-gray-400 mt-0.5">Managers</p></div>
                  <div class="text-center"><p class="text-2xl font-bold text-gray-900">156</p><p class="text-xs text-gray-400 mt-0.5">Volunteers</p></div>
                </div>
              </div>
            </div>

            <!-- RIGHT PANELS -->
            <div class="flex-1 flex flex-col gap-5">

              <!-- ═══ PERSONAL INFORMATION ═══ -->
              <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex items-start justify-between mb-6">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center" style="background:#e0f7ff;">
                      <svg class="w-5 h-5" style="color:#00BFFF;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path stroke-linecap="round" d="M4 20c0-4 3.582-7 8-7s8 3 8 7"/></svg>
                    </div>
                    <div>
                      <h3 class="text-base font-bold text-gray-900">Personal Information</h3>
                      <p class="text-xs text-gray-400">Update your personal details</p>
                    </div>
                  </div>
                  <!-- Edit Profile btn (view mode) -->
                  <div id="btn-edit-wrap">
                    <button onclick="enableEdit()" style="background:#00BFFF;" class="flex items-center gap-2 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:opacity-90">
                      <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><circle cx="12" cy="12" r="3"/></svg>
                      Edit Profile
                    </button>
                  </div>
                  <!-- Cancel + Save (edit mode) -->
                  <div id="btn-save-wrap" class="d-none items-center gap-2">
                    <button onclick="cancelEdit()" class="flex items-center gap-1.5 border border-gray-300 text-gray-600 text-sm font-semibold px-4 py-2 rounded-lg hover:bg-gray-50">
                      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                      Cancel
                    </button>
                    <button class="flex items-center gap-1.5 bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-4 py-2 rounded-lg">
                      <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
                      Save Changes
                    </button>
                  </div>
                </div>

                <!-- VIEW fields -->
                <div id="pinfo-view">
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">First Name</p><div class="field-box">Admin</div></div>
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Last Name</p><div class="field-box">User</div></div>
                  </div>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Email Address</p><div class="field-box">admin@reliefconnect.org</div></div>
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Phone Number</p><div class="field-box">+1 800-RELIEF-1</div></div>
                  </div>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Role</p><div class="field-box">Super Administrator</div></div>
                    <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Department</p><div class="field-box">Administration</div></div>
                  </div>
                  <div class="mb-4"><p class="text-xs font-semibold text-gray-500 mb-1.5">Location</p><div class="field-box">Headquarters, Main Office</div></div>
                  <div><p class="text-xs font-semibold text-gray-500 mb-1.5">Bio</p>
                    <div class="field-box" style="min-height:72px;line-height:1.6;">Experienced disaster relief coordinator with over 10 years of experience in emergency management and humanitarian aid operations.</div>
                  </div>
                </div>

                <!-- EDIT fields -->
                <div id="pinfo-edit" class="d-none">
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">First Name</label><input class="field-input" type="text" value="Admin"/></div>
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Last Name</label><input class="field-input" type="text" value="User"/></div>
                  </div>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Email Address</label><input class="field-input" type="email" value="admin@reliefconnect.org"/></div>
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Phone Number</label><input class="field-input" type="tel" value="+1 800-RELIEF-1"/></div>
                  </div>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Role</label><input class="field-input" type="text" value="Super Administrator"/></div>
                    <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Department</label><input class="field-input" type="text" value="Administration"/></div>
                  </div>
                  <div class="mb-4"><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Location</label><input class="field-input" type="text" value="Headquarters, Main Office"/></div>
                  <div><label class="text-xs font-semibold text-gray-500 mb-1.5 block">Bio</label><textarea class="field-input"></textarea></div>
                </div>
              </div>

              <!-- ═══ SECURITY SETTINGS ═══ -->
              <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-5">
                  <div class="w-10 h-10 rounded-full flex items-center justify-center bg-red-50">
                    <svg class="w-5 h-5 text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg>
                  </div>
                  <div>
                    <h3 class="text-base font-bold text-gray-900">Security Settings</h3>
                    <p class="text-xs text-gray-400">Manage your password and security preferences</p>
                  </div>
                </div>

                <!-- VIEW: password row -->
                <div id="sec-view">
                  <div class="flex items-center justify-between py-3 border-b border-gray-100">
                    <div>
                      <p class="text-sm font-bold text-gray-800">Password</p>
                      <p class="text-xs text-gray-400 mt-0.5">Last changed 30 days ago</p>
                    </div>
                    <button onclick="enableChangePwd()" class="bg-gray-800 hover:bg-gray-700 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors">
                      Change Password
                    </button>
                  </div>
                  <div class="flex items-center justify-between py-3">
                    <div>
                      <p class="text-sm font-bold text-gray-800">Two-Factor Authentication</p>
                      <p class="text-xs text-gray-400 mt-0.5">Add an extra layer of security</p>
                    </div>
                    <button style="background:#00BFFF;" class="text-white text-sm font-semibold px-5 py-2 rounded-lg hover:opacity-90">Enable</button>
                  </div>
                </div>

                <!-- CHANGE PASSWORD form -->
                <div id="sec-pwd" class="d-none">
                  <div class="mb-4">
                    <label class="text-xs font-semibold text-gray-500 mb-1.5 block">Current Password</label>
                    <div class="pwd-wrap">
                      <input type="password" id="cur-pwd" placeholder="Enter current password"/>
                      <button type="button" class="eye-btn" onclick="togglePwd('cur-pwd')"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
                    </div>
                  </div>
                  <div class="mb-4">
                    <label class="text-xs font-semibold text-gray-500 mb-1.5 block">New Password</label>
                    <div class="pwd-wrap">
                      <input type="password" id="new-pwd" placeholder="Enter new password (min 8 characters)"/>
                      <button type="button" class="eye-btn" onclick="togglePwd('new-pwd')"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
                    </div>
                  </div>
                  <div class="mb-6">
                    <label class="text-xs font-semibold text-gray-500 mb-1.5 block">Confirm New Password</label>
                    <div class="pwd-wrap">
                      <input type="password" id="conf-pwd" placeholder="Confirm new password"/>
                      <button type="button" class="eye-btn" onclick="togglePwd('conf-pwd')"><svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></button>
                    </div>
                  </div>
                  <div class="grid grid-cols-2 gap-3">
                    <button onclick="cancelChangePwd()" class="w-full border border-gray-300 text-gray-700 text-sm font-semibold py-3 rounded-lg hover:bg-gray-50">Cancel</button>
                    <button class="w-full bg-green-500 hover:bg-green-600 text-white text-sm font-semibold py-3 rounded-lg">Update Password</button>
                  </div>
                </div>
              </div>

              <!-- ═══ NOTIFICATION PREFERENCES ═══ -->
              <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-5">
                  <div class="w-10 h-10 rounded-full flex items-center justify-center bg-yellow-50">
                    <svg class="w-5 h-5 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
                  </div>
                  <div>
                    <h3 class="text-base font-bold text-gray-900">Notification Preferences</h3>
                    <p class="text-xs text-gray-400">Choose how you want to be notified</p>
                  </div>
                </div>
                <div class="space-y-4">
                  <div class="flex items-center justify-between">
                    <div><p class="text-sm font-semibold text-gray-800">Email Notifications</p><p class="text-xs text-gray-400 mt-0.5">Receive updates via email</p></div>
                    <label class="toggle-wrap"><input type="checkbox" checked/><span class="toggle-slider"></span></label>
                  </div>
                  <div class="flex items-center justify-between">
                    <div><p class="text-sm font-semibold text-gray-800">SMS Notifications</p><p class="text-xs text-gray-400 mt-0.5">Receive urgent alerts via SMS</p></div>
                    <label class="toggle-wrap"><input type="checkbox" checked/><span class="toggle-slider"></span></label>
                  </div>
                  <div class="flex items-center justify-between">
                    <div><p class="text-sm font-semibold text-gray-800">Push Notifications</p><p class="text-xs text-gray-400 mt-0.5">Receive in-app notifications</p></div>
                    <label class="toggle-wrap"><input type="checkbox"/><span class="toggle-slider"></span></label>
                  </div>
                </div>
              </div>

              <!-- ═══ DANGER ZONE ═══ -->
              <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex items-center gap-3 mb-5">
                  <div class="w-10 h-10 rounded-full flex items-center justify-center bg-red-50">
                    <svg class="w-5 h-5 text-red-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L4 6v6c0 5.25 3.5 10.15 8 11.35C16.5 22.15 20 17.25 20 12V6L12 2z" fill="none" stroke="currentColor"/></svg>
                  </div>
                  <div>
                    <h3 class="text-base font-bold text-red-500">Danger Zone</h3>
                    <p class="text-xs text-gray-400">Irreversible actions</p>
                  </div>
                </div>
                <div class="bg-red-50 border border-red-100 rounded-xl px-5 py-4 flex items-center justify-between">
                  <div>
                    <p class="text-sm font-bold text-gray-800">Deactivate Account</p>
                    <p class="text-xs text-red-500 mt-0.5">Temporarily disable your account</p>
                  </div>
                  <button class="bg-red-500 hover:bg-red-600 text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-colors">Deactivate</button>
                </div>
              </div>

            </div>
          </div>
        </main>

        <script>
          /* Edit Profile */
          function enableEdit() {
            document.getElementById('pinfo-view').classList.add('d-none');
            document.getElementById('pinfo-edit').classList.remove('d-none');
            document.getElementById('btn-edit-wrap').classList.add('d-none');
            const s = document.getElementById('btn-save-wrap');
            s.classList.remove('d-none');
            s.style.display = 'flex';
          }
          function cancelEdit() {
            document.getElementById('pinfo-view').classList.remove('d-none');
            document.getElementById('pinfo-edit').classList.add('d-none');
            document.getElementById('btn-edit-wrap').classList.remove('d-none');
            document.getElementById('btn-save-wrap').classList.add('d-none');
          }

          /* Change Password */
          function enableChangePwd() {
            document.getElementById('sec-view').classList.add('d-none');
            document.getElementById('sec-pwd').classList.remove('d-none');
          }
          function cancelChangePwd() {
            document.getElementById('sec-pwd').classList.add('d-none');
            document.getElementById('sec-view').classList.remove('d-none');
          }

          /* Eye toggle */
          function togglePwd(id) {
            const el = document.getElementById(id);
            el.type = el.type === 'password' ? 'text' : 'password';
          }
        </script>
    </div>

</body>
</html>