  <!-- Navbar -->
  <header class="flex justify-between sticky top-0 items-center px-6 z-50 py-3 shadow-md bg-white">
  <!-- Logo -->
<a href="<?= base_url('/') ?>" class="flex items-center gap-3 group hover:opacity-95 transition-opacity duration-200">
  
  <!-- Brand Text -->
  <div class="leading-tight ml-4">
    <h1 class="text-xl md:text-2xl font-extrabold tracking-tight text-gray-900">
      <span class="text-blue-700">Muskan</span>
      <span class="text-gray-800 font-mono">Yatra<span class="text-blue-700">.</span></span>
    </h1>
    <p class="text-xs md:text-xs font-medium text-gray-500">
      Pvt. Ltd. &nbsp;•&nbsp; Tours & Travels Co.
    </p>
  </div>

</a>



    <!-- Navigation -->
    <nav class="flex items-center gap-12">
      <!-- Main Links -->
      <ul class="hidden md:flex space-x-7 text-sm font-medium text-gray-700">
        <li><a href="<?= base_url('/') ?>" class="hover:text-indigo-600">Home</a></li>
        <?= session('logged_in') ? '<li><a href="' . base_url('explore') . '" class="hover:text-indigo-600">Explore</a></li>' : '' ?>
        <?= session('logged_in') ? '<li><a href="' . base_url('dashboard/my-bookings') . '" class="hover:text-indigo-600">My Bookings</a></li>' : '' ?>
      </ul> 

      <!-- Auth Section -->
      <?php if (!session('logged_in')): ?>
        <div class="flex items-center space-x-3">
          <a href="<?= base_url('login') ?>" class="text-sm font-medium text-gray-700 hover:text-blue-600">Login</a>
          <a href="<?= base_url('register') ?>"
            class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-full transition duration-150">Sign
            Up</a>
        </div>
      <?php else: ?>
        <!-- Profile Dropdown -->
        <div class="relative group">
          <button
            class="flex items-center space-x-2 bg-blue-100 hover:bg-blue-200 p-1 rounded-md ring-2 ring-offset-2 ring-blue-300 transition">
            <div class="w-7 h-7 overflow-hidden rounded-full">
              <img src="<?= base_url('uploads/profile/').session('profile_pic') ?>" alt="Profile" class="w-full h-full  object-cover">
            </div>
            <p><?= session('name') ?></p>
          </button>
          <div
            class="hidden group-hover:block absolute right-0 w-48 p-1 gap-1 bg-white border border-gray-200 rounded-lg shadow-lg z-50 overflow-hidden   transition-opacity duration-150">
            <a href="<?= base_url('profile') ?>" class="block px-4 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">View
              Profile</a>
            <a href="<?= base_url('dashboard/my-bookings') ?>"
              class="block px-4 py-2 text-sm text-gray-700 rounded-md hover:bg-gray-100">Dashboard</a>
            <div class="w-full border my-1 border-gray-600"></div>
            <a href="<?= base_url('logout') ?>" class="block px-4 py-2 text-sm text-red-600 rounded-md hover:bg-gray-100">Logout</a>
          </div>
        </div>
      <?php endif; ?>
    </nav>
  </header>