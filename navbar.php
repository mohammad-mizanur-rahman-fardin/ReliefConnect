<?php
  // Get the current page name
  $current_page = basename($_SERVER['PHP_SELF']);
  
?>

<nav class="bg-black text-white px-6 py-3 flex items-center justify-between sticky top-0 z-50">
  <div class="flex items-center gap-8">
    <div class="text-xl font-bold">
      <a href="index.php"><span style="color:#00BCFF">Relief</span><span class="text-white">Connect</span></a>
    </div>
    <ul class="hidden md:flex gap-6 text-sm text-gray-300">
      <li><a href="index.php" class="hover:text-white <?php echo ($current_page == 'index.php') ? ' text-white underline-offset-8 underline' : ''; ?>">Home</a></li>
      <li><a href="campaigns.php" class="hover:text-white <?php echo ($current_page == 'campaigns.php') ? ' text-white underline-offset-8 underline' : ''; ?>">Campaigns</a></li>
      <li><a href="about.php" class="hover:text-white <?php echo ($current_page == 'about.php') ? ' text-white underline-offset-8 underline' : ''; ?>">About</a></li>
      <li><a href="contact.php" class="hover:text-white <?php echo ($current_page == 'contact.php') ? ' text-white underline-offset-8 underline' : ''; ?>">Contact</a></li>
      <li><a href="how_it_works.php" class="hover:text-white <?php echo ($current_page == 'how_it_works.php') ? ' text-white underline-offset-8 underline' : ''; ?>">How It Works</a></li>
    </ul>
  </div>
  <div class="flex items-center gap-3">
    <a href="role_page.php" class="text-sm text-white hover:text-gray-300">Login</a>
    <a href="role_page.php" class="text-white text-sm font-semibold px-4 py-2 rounded-md hover:opacity-90" style="background:#00BFFF">Register</a>
  </div>
</nav>