<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?: 'Tours & Travels' ?></title>
 
  <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">

</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-md px-6 py-4 pr-8 flex justify-between items-center">
    <a href="<?= base_url('/') ?>" class="text-2xl font-bold text-blue-500 ">Tours&Travels</a>
  
    <?php if (!session('logged_in')): ?>
      <!-- If NOT logged in -->
      <div class="space-x-4">
        <a href="<?= base_url('login') ?>" class="text-sm font-medium hover:underline">Login</a>
        <a href="<?= base_url('register') ?>" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">Sign Up</a>
      </div>

    <?php else: ?>
      <!-- If logged in -->
      <div class="relative">
        <button id="profileBtn" class="flex items-center gap-2 hover:bg-gray-100 ring-2 ring-offset-4 rounded-full bg-blue-100 overflow-hidden">
          <img src="<?= session('profile_pic') ?>" alt="Profile" class="w-9 h-9  ">
        </button>

        <!-- Dropdown -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 p-1 bg-white border rounded-md shadow-md z-50">
          <a href="<?= base_url('profile') ?>" class="block px-4 rounded-md py-2 hover:bg-gray-100 text-sm">View Profile</a>
          <?php if (session('role') === 'admin'): ?>
            <a href="<?= base_url('admin/dashboard') ?>" class="block rounded-md px-4 py-2 hover:bg-gray-100 text-sm">Dashboard</a>
          <?php endif; ?>
          <a href="<?= base_url('logout') ?>" class="block px-4 py-2 rounded-md text-red-600 hover:bg-gray-100 text-sm">Logout</a>
        </div>
      </div>
    <?php endif; ?>
  </nav>

  <!-- Page Content -->
  <main class="p-6">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- Dropdown Toggle Script -->
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    if (profileBtn) {
      profileBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
      });
    }
  </script>

</body>
</html>
