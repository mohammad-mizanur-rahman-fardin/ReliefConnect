<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Donor Profile</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f8fafc] font-sans text-[#0f172a]">
  <header class="h-[68px] bg-white border-b border-[#e5e7eb]">
    <div class="w-[1000px] mx-auto h-full flex items-center justify-between">
      <div class="flex items-start gap-5">
        <button class="mt-1 text-[#0f172a]">
          <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path d="M19 12H5"></path>
            <path d="M12 19l-7-7 7-7"></path>
          </svg>
        </button>

        <div>
          <h1 class="text-[24px] leading-[28px] font-extrabold">Donor Profile</h1>
          <p class="text-[13px] text-[#475569] mt-[2px]">Manage your account information and settings</p>
        </div>
      </div>

      <a href="#" class="text-[#0ea5e9] font-bold text-[14px]">Back to Dashboard</a>
    </div>
  </header>

  <main class="w-[1000px] mx-auto pt-[28px] pb-12 grid grid-cols-[315px_1fr] gap-[26px]">
    <!-- LEFT PROFILE CARD -->
    <aside class="bg-white rounded-xl border border-[#e2e8f0] shadow-md h-[420px] p-[20px]">
      <div class="flex flex-col items-center">
        <div class="relative mt-[4px]">
          <div class="w-[104px] h-[104px] rounded-full bg-[#00c853] shadow-xl flex items-center justify-center">
            <span class="text-white text-[58px] leading-none">$</span>
          </div>

          <button class="absolute right-[-4px] bottom-[5px] w-[31px] h-[31px] rounded-full bg-[#0ea5e9] border-2 border-white shadow flex items-center justify-center text-white">
            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path d="M4 8h4l2-3h4l2 3h4v11H4z"/>
              <circle cx="12" cy="13" r="3"/>
            </svg>
          </button>
        </div>

        <h2 class="text-[22px] font-extrabold mt-[18px] leading-[25px]">Sarah Donor</h2>
        <p class="text-[#00c853] font-bold text-[14px] mt-[3px]">Verified Donor</p>
        <p class="text-[#475569] text-[13px] mt-[10px]">Individual</p>
      </div>

      <hr class="border-[#e5e7eb] mt-[22px] mb-[18px]" />

      <div class="space-y-[11px] text-[13px] text-[#334155] px-[3px]">
        <p class="flex items-center gap-[12px]"><span class="text-[#94a3b8]">✉</span> sarah.donor@email.com</p>
        <p class="flex items-center gap-[12px]"><span class="text-[#94a3b8]">⌕</span> +1 555-GIVE-456</p>
        <p class="flex items-center gap-[12px]"><span class="text-[#94a3b8]">▦</span> Helping Hands Foundation</p>
        <p class="flex items-center gap-[12px]"><span class="text-[#94a3b8]">◎</span> New York, NY</p>
      </div>

      <hr class="border-[#e5e7eb] mt-[18px] mb-[18px]" />

      <div class="grid grid-cols-3 text-center">
        <div>
          <p class="text-[24px] font-extrabold leading-6">15</p>
          <p class="text-[11px] text-[#475569] mt-[3px]">Donations</p>
        </div>
        <div>
          <p class="text-[24px] font-extrabold leading-6">$5.2K</p>
          <p class="text-[11px] text-[#475569] mt-[3px]">Total</p>
        </div>
        <div>
          <p class="text-[24px] font-extrabold leading-6">8</p>
          <p class="text-[11px] text-[#475569] mt-[3px]">Campaigns</p>
        </div>
      </div>
    </aside>

    <!-- RIGHT CONTENT -->
    <section class="space-y-[20px]">
      <!-- PERSONAL INFO -->
      <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-md p-[20px]">
        <div class="flex items-start justify-between mb-[18px]">
          <div class="flex gap-[12px]">
            <div class="w-[36px] h-[36px] rounded-lg bg-[#e0f2fe] text-[#0ea5e9] flex items-center justify-center">
              <svg width="19" height="19" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="8" r="3"/>
                <path d="M5 21c1-4 3.5-6 7-6s6 2 7 6"/>
              </svg>
            </div>
            <div>
              <h2 class="text-[20px] font-extrabold leading-[23px]">Personal Information</h2>
              <p class="text-[13px] text-[#475569]">Update your personal details</p>
            </div>
          </div>

          <button id="editBtn" onclick="setEdit(true)" class="h-[38px] px-[17px] rounded-lg bg-[#0ea5e9] text-white text-[13px] font-bold">
            ⚙ Edit Profile
          </button>

          <div id="editActions" class="hidden flex gap-[8px]">
            <button onclick="setEdit(false)" class="h-[38px] px-[18px] rounded-lg border border-[#cbd5e1] text-[#0f172a] text-[13px] font-bold">× Cancel</button>
            <button onclick="setEdit(false)" class="h-[38px] px-[18px] rounded-lg bg-[#08c553] text-white text-[13px] font-bold">▣ Save Changes</button>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-x-[20px] gap-y-[17px]">
          <label>
            <span class="text-[12px] font-bold text-[#334155]">First Name</span>
            <input readonly value="Sarah" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label>
            <span class="text-[12px] font-bold text-[#334155]">Last Name</span>
            <input readonly value="Donor" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label>
            <span class="text-[12px] font-bold text-[#334155]">Email Address</span>
            <input readonly value="sarah.donor@email.com" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label>
            <span class="text-[12px] font-bold text-[#334155]">Phone Number</span>
            <input readonly value="+1 555-GIVE-456" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label>
            <span class="text-[12px] font-bold text-[#334155]">Donor Type</span>
            <input readonly value="Individual" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label>
            <span class="text-[12px] font-bold text-[#334155]">Organization</span>
            <input readonly value="Helping Hands Foundation" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label class="col-span-2">
            <span class="text-[12px] font-bold text-[#334155]">Location</span>
            <input readonly value="New York, NY" class="profile-field mt-[8px] h-[39px] w-full rounded-lg bg-[#f8fafc] px-[13px] text-[14px] outline-none border border-transparent" />
          </label>

          <label class="col-span-2">
            <span class="text-[12px] font-bold text-[#334155]">Bio</span>
            <textarea id="bioField" readonly class="profile-field mt-[8px] h-[37px] w-full rounded-lg bg-[#f8fafc] px-[13px] py-[9px] text-[14px] outline-none resize-none border border-transparent">Committed to supporting disaster relief efforts and making a positive impact in affected communities.</textarea>
          </label>
        </div>
      </div>

      <!-- SECURITY NORMAL -->
      <div id="securityNormal" class="bg-white rounded-xl border border-[#e2e8f0] shadow-md p-[20px]">
        <div class="flex gap-[12px] mb-[20px]">
          <div class="w-[36px] h-[36px] rounded-lg bg-[#fee2e2] text-[#ef4444] flex items-center justify-center">▢</div>
          <div>
            <h2 class="text-[20px] font-extrabold leading-[23px]">Security Settings</h2>
            <p class="text-[13px] text-[#475569]">Manage your password and security preferences</p>
          </div>
        </div>

        <div class="space-y-[14px]">
          <div class="h-[61px] rounded-lg bg-[#f8fafc] px-[14px] flex items-center justify-between">
            <div>
              <p class="text-[14px] font-extrabold">Password</p>
              <p class="text-[13px] text-[#475569]">Last changed 30 days ago</p>
            </div>
            <button onclick="showPasswordEdit()" class="h-[36px] px-[14px] rounded-lg bg-[#334155] text-white font-bold text-[13px]">Change Password</button>
          </div>

          <div class="h-[61px] rounded-lg bg-[#f8fafc] px-[14px] flex items-center justify-between">
            <div>
              <p class="text-[14px] font-extrabold">Two-Factor Authentication</p>
              <p class="text-[13px] text-[#475569]">Add an extra layer of security</p>
            </div>
            <button class="h-[36px] px-[18px] rounded-lg bg-[#0ea5e9] text-white font-bold text-[13px]">Enable</button>
          </div>
        </div>
      </div>

      <!-- SECURITY EDIT PASSWORD -->
      <div id="securityEdit" class="hidden bg-white rounded-xl border border-[#e2e8f0] shadow-md p-[20px]">
        <div class="flex gap-[12px] mb-[18px]">
          <div class="w-[36px] h-[36px] rounded-lg bg-[#fee2e2] text-[#ef4444] flex items-center justify-center">▢</div>
          <div>
            <h2 class="text-[20px] font-extrabold leading-[23px]">Security Settings</h2>
            <p class="text-[13px] text-[#475569]">Manage your password and security preferences</p>
          </div>
        </div>

        <label class="block text-[12px] font-bold text-[#334155]">Current Password</label>
        <input placeholder="Enter current password" class="mt-[8px] h-[40px] w-full rounded-lg border border-[#cbd5e1] px-[13px] text-[14px] outline-none" />

        <label class="block mt-[16px] text-[12px] font-bold text-[#334155]">New Password</label>
        <input placeholder="Enter new password (min 8 characters)" class="mt-[8px] h-[40px] w-full rounded-lg border border-[#cbd5e1] px-[13px] text-[14px] outline-none" />

        <label class="block mt-[16px] text-[12px] font-bold text-[#334155]">Confirm New Password</label>
        <input placeholder="Confirm new password" class="mt-[8px] h-[40px] w-full rounded-lg border border-[#cbd5e1] px-[13px] text-[14px] outline-none" />

        <div class="grid grid-cols-2 gap-[10px] mt-[26px]">
          <button onclick="hidePasswordEdit()" class="h-[41px] rounded-lg border border-[#94a3b8] text-[#334155] font-bold text-[14px]">Cancel</button>
          <button onclick="hidePasswordEdit()" class="h-[41px] rounded-lg bg-[#08c553] text-white font-bold text-[14px]">Update Password</button>
        </div>
      </div>

      <!-- NOTIFICATIONS -->
      <div class="bg-white rounded-xl border border-[#e2e8f0] shadow-md p-[20px]">
        <div class="flex gap-[12px] mb-[20px]">
          <div class="w-[36px] h-[36px] rounded-lg bg-[#ffedd5] text-[#f97316] flex items-center justify-center">♧</div>
          <div>
            <h2 class="text-[20px] font-extrabold leading-[23px]">Notification Preferences</h2>
            <p class="text-[13px] text-[#475569]">Choose how you want to be notified</p>
          </div>
        </div>

        <div class="space-y-[13px]">
          <div class="h-[60px] bg-[#f8fafc] rounded-lg px-[14px] flex items-center justify-between">
            <div>
              <p class="text-[14px] font-extrabold">Email Notifications</p>
              <p class="text-[13px] text-[#475569]">Receive updates via email</p>
            </div>
            <div class="w-[35px] h-[19px] rounded-full bg-[#0ea5e9] relative">
              <div class="w-[16px] h-[16px] bg-white rounded-full absolute right-[2px] top-[1.5px]"></div>
            </div>
          </div>

          <div class="h-[60px] bg-[#f8fafc] rounded-lg px-[14px] flex items-center justify-between">
            <div>
              <p class="text-[14px] font-extrabold">Donation Receipts</p>
              <p class="text-[13px] text-[#475569]">Receive tax receipts via email</p>
            </div>
            <div class="w-[35px] h-[19px] rounded-full bg-[#0ea5e9] relative">
              <div class="w-[16px] h-[16px] bg-white rounded-full absolute right-[2px] top-[1.5px]"></div>
            </div>
          </div>

          <div class="h-[60px] bg-[#f8fafc] rounded-lg px-[14px] flex items-center justify-between">
            <div>
              <p class="text-[14px] font-extrabold">Impact Updates</p>
              <p class="text-[13px] text-[#475569]">Receive updates on how donations are used</p>
            </div>
            <div class="w-[35px] h-[19px] rounded-full bg-[#0ea5e9] relative">
              <div class="w-[16px] h-[16px] bg-white rounded-full absolute right-[2px] top-[1.5px]"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    function setEdit(editing) {
      document.getElementById("editBtn").classList.toggle("hidden", editing);
      document.getElementById("editActions").classList.toggle("hidden", !editing);

      document.querySelectorAll(".profile-field").forEach(el => {
        el.readOnly = !editing;
        el.classList.toggle("border-[#cbd5e1]", editing);
        el.classList.toggle("border-transparent", !editing);
        el.classList.toggle("bg-white", editing);
        el.classList.toggle("bg-[#f8fafc]", !editing);
      });

      if (editing) {
        document.getElementById("bioField").value = "";
      } else {
        document.getElementById("bioField").value =
          "Committed to supporting disaster relief efforts and making a positive impact in affected communities.";
      }
    }

    function showPasswordEdit() {
      document.getElementById("securityNormal").classList.add("hidden");
      document.getElementById("securityEdit").classList.remove("hidden");
    }

    function hidePasswordEdit() {
      document.getElementById("securityEdit").classList.add("hidden");
      document.getElementById("securityNormal").classList.remove("hidden");
    }
  </script>
</body>
</html>