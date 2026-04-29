<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact - ReliefConnect</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    * { font-family: 'Inter', sans-serif; }
    input, textarea, select {
      outline: none;
    }
    input:focus, textarea:focus, select:focus {
      border-color: #00BFFF !important;
      box-shadow: 0 0 0 2px rgba(0,191,255,0.15);
    }
    .map-placeholder {
      background: linear-gradient(135deg, #e8edf2 0%, #d1dce8 100%);
    }
  </style>
</head>
<body class="bg-white text-gray-900">

  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!-- HERO -->
  <section style="background:linear-gradient(135deg,#00BFFF 0%,#0284c7 100%);" class="py-14 px-6 text-center text-white">
    <div class="flex justify-center mb-4">
      <div class="w-12 h-12 rounded-xl border-2 border-white border-opacity-50 flex items-center justify-center">
        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
      </div>
    </div>
    <h1 class="text-3xl md:text-4xl font-black mb-3">Get in Touch</h1>
    <p class="text-blue-100 text-sm max-w-md mx-auto leading-relaxed">
      We're here to help. Whether you need emergency assistance, want to volunteer, or have questions about our services, we'd love to hear from you.
    </p>
  </section>

  <!-- EMERGENCY BANNER -->
  <div class="bg-red-600 text-white text-center py-2.5 px-4 text-xs font-medium flex items-center justify-center gap-2">
    <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="2"/><path d="M12 8v4m0 4h.01" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
    For life-threatening emergencies, call our 24/7 hotline:&nbsp;<a href="tel:+8801712345678" class="font-bold underline">+880 1712-345678</a>
  </div>

  <!-- CONTACT INFO CARDS -->
  <section class="py-10 px-6 md:px-16 bg-white">
    <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5">
      <!-- Headquarters -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#e0f7ff">
          <svg class="w-5 h-5" style="color:#00BFFF" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-3">Headquarters</h3>
        <p class="text-gray-500 text-xs leading-relaxed">
          123 Relief Avenue<br/>Dhaka 1205<br/>Bangladesh
        </p>
      </div>
      <!-- Phone Numbers -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#dcfce7">
          <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-3">Phone Numbers</h3>
        <p class="text-gray-500 text-xs leading-relaxed">
          Emergency: +880 1712-345678<br/>General: +880 1812-345679<br/>Fax: +880 2-9876543
        </p>
      </div>
      <!-- Email Addresses -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#fce7f3">
          <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-3">Email Addresses</h3>
        <p class="text-gray-500 text-xs leading-relaxed">
          General: info@reliefconnect.org<br/>Support: support@reliefconnect.org<br/>Donations: donate@reliefconnect.org
        </p>
      </div>
      <!-- Working Hours -->
      <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
        <div class="w-10 h-10 rounded-xl flex items-center justify-center mb-4" style="background:#fff7ed">
          <svg class="w-5 h-5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-width="2"/><path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
        </div>
        <h3 class="font-bold text-sm mb-3">Working Hours</h3>
        <p class="text-gray-500 text-xs leading-relaxed">
          Emergency: 24/7 Available<br/>Office: Mon–Fri, 9AM–6PM<br/>Support: Mon–Sun, 8AM–10PM
        </p>
      </div>
    </div>
  </section>

  <!-- FORM + SIDEBAR -->
  <section class="py-6 px-6 md:px-16 bg-white pb-14">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row gap-6 items-start">

      <!-- FORM -->
      <div class="flex-1 border border-gray-200 rounded-xl p-7 shadow-sm">
        <h2 class="text-xl font-black mb-1">Send Us a Message</h2>
        <p class="text-gray-500 text-xs mb-6">Fill out the form below and our team will get back to you within 24 hours.</p>

        <!-- Full Name -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Full Name <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Enter your full name" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 transition-all" />
        </div>

        <!-- Email + Phone -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Email Address <span class="text-red-500">*</span></label>
            <input type="email" placeholder="your@email.com" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 transition-all" />
          </div>
          <div>
            <label class="block text-xs font-semibold text-gray-700 mb-1.5">Phone Number</label>
            <input type="tel" placeholder="+880 1XXX-XXXXXXX" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 transition-all" />
          </div>
        </div>

        <!-- Inquiry Category -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Inquiry Category <span class="text-red-500">*</span></label>
          <select class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-400 transition-all appearance-none bg-white" style="color:#9ca3af">
            <option value="" disabled selected></option>
            <option value="volunteer" class="text-gray-900">Volunteer</option>
            <option value="donation" class="text-gray-900">Donation</option>
            <option value="emergency" class="text-gray-900">Emergency</option>
            <option value="general" class="text-gray-900">General Inquiry</option>
          </select>
        </div>

        <!-- Subject -->
        <div class="mb-4">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Subject <span class="text-red-500">*</span></label>
          <input type="text" placeholder="Brief subject of your message" class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 transition-all" />
        </div>

        <!-- Message -->
        <div class="mb-5">
          <label class="block text-xs font-semibold text-gray-700 mb-1.5">Message <span class="text-red-500">*</span></label>
          <textarea rows="5" placeholder="Please provide details about your inquiry..." class="w-full border border-gray-200 rounded-lg px-3 py-2.5 text-sm text-gray-700 placeholder-gray-300 transition-all resize-none"></textarea>
        </div>

        <!-- Submit -->
        <button class="w-full text-white text-sm font-semibold py-3 rounded-lg flex items-center justify-center gap-2 hover:opacity-90 transition-opacity" style="background:#00BFFF">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
          Send Message
        </button>
        <p class="text-gray-400 text-xs mt-3 text-center">* Required fields. We respect your privacy and will never share your information.</p>
      </div>

      <!-- SIDEBAR -->
      <div class="w-full md:w-64 flex flex-col gap-4 flex-shrink-0">

        <!-- Quick Links -->
        <div class="border border-gray-200 rounded-xl p-5 shadow-sm">
          <h3 class="font-bold text-sm mb-4">Quick Links</h3>
          <div class="space-y-3">
            <a href="#" class="flex items-center justify-between group">
              <div>
                <div class="text-xs font-semibold text-gray-800 group-hover:text-blue-500 transition-colors">Volunteer with Us</div>
                <div class="text-xs text-gray-400">Join our team of dedicated volunteers</div>
              </div>
              <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400 flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <div class="border-t border-gray-100"></div>
            <a href="#" class="flex items-center justify-between group">
              <div>
                <div class="text-xs font-semibold text-gray-800 group-hover:text-blue-500 transition-colors">Make a Donation</div>
                <div class="text-xs text-gray-400">Support our relief efforts</div>
              </div>
              <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400 flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <div class="border-t border-gray-100"></div>
            <a href="#" class="flex items-center justify-between group">
              <div>
                <div class="text-xs font-semibold text-gray-800 group-hover:text-blue-500 transition-colors">View Campaigns</div>
                <div class="text-xs text-gray-400">See our active relief campaigns</div>
              </div>
              <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400 flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
            <div class="border-t border-gray-100"></div>
            <a href="#" class="flex items-center justify-between group">
              <div>
                <div class="text-xs font-semibold text-gray-800 group-hover:text-blue-500 transition-colors">Emergency Hotline</div>
                <div class="text-xs text-gray-400">Get immediate assistance</div>
              </div>
              <svg class="w-4 h-4 text-gray-300 group-hover:text-blue-400 flex-shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Follow Us -->
        <div class="rounded-xl p-5 text-white" style="background:#0ea5e9">
          <h3 class="font-bold text-sm mb-1">Follow Us</h3>
          <p class="text-blue-100 text-xs mb-4">Stay updated with our relief efforts and campaigns on social media.</p>
          <div class="flex gap-2">
            <a href="#" class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition-all">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition-all">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition-all">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-white bg-opacity-20 flex items-center justify-center hover:bg-opacity-30 transition-all">
              <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path fill="none" stroke="white" stroke-width="1.5" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke="white" stroke-width="2" stroke-linecap="round"/></svg>
            </a>
          </div>
        </div>

        <!-- Need Immediate Help -->
        <div class="bg-gray-900 rounded-xl p-5 text-white">
          <h3 class="font-bold text-sm mb-1">Need Immediate Help?</h3>
          <p class="text-gray-400 text-xs mb-4">Our emergency response team is available 24/7 for urgent situations.</p>
          <button class="w-full bg-red-500 hover:bg-red-600 text-white text-xs font-bold py-2.5 rounded-lg transition-colors">
            Call Emergency Hotline
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- VISIT OUR OFFICE -->
  <section class="py-10 px-6 md:px-16 bg-white border-t border-gray-100">
    <div class="max-w-5xl mx-auto">
      <h2 class="text-2xl font-black mb-1">Visit Our Office</h2>
      <p class="text-gray-500 text-sm mb-6">Our headquarters is located in the heart of Dhaka. Feel free to visit us during office hours or schedule an appointment for a detailed discussion.</p>
      <!-- Map Placeholder -->
      <div class="map-placeholder rounded-xl h-64 flex flex-col items-center justify-center border border-gray-200">
        <svg class="w-10 h-10 text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
        <p class="text-gray-500 text-sm font-medium">Interactive Map</p>
        <p class="text-gray-400 text-xs mt-1">123 Relief Avenue, Dhaka 1205, Bangladesh</p>
      </div>
    </div>
  </section>

  <!-- HAVE QUESTIONS -->
  <section class="py-14 px-6 bg-gray-50 text-center">
    <div class="max-w-xl mx-auto">
      <h2 class="text-2xl font-black mb-3">Have Questions?</h2>
      <p class="text-gray-500 text-sm leading-relaxed mb-7">
        Check out our Frequently Asked Questions section for quick answers to common inquiries about our services, volunteer opportunities, and donation processes.
      </p>
      <a href="#" class="inline-block text-white text-sm font-semibold px-6 py-2.5 rounded-lg hover:opacity-90 transition-opacity" style="background:#00BFFF">Learn More About Us</a>
    </div>
  </section>

  <!-- FOOTER -->
  <?php include 'footer.php'; ?>

</body>
</html>