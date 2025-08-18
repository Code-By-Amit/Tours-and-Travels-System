<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->renderSection('title') ?: 'Tours & Travels' ?></title>

  <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-grey-200 text-gray-800">


  <?= $this->include('layouts/navbar') ?>

  <!-- Page Content -->
  <main class="p-6">
    <?= $this->renderSection('content') ?>
  </main>

  <!-- 🌐 Modern Footer -->
  <footer class="bg-gray-700 text-white py-14 px-8 md:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

      <!-- Brand -->
      <div>
        <h3 class="text-2xl font-bold mb-3 text-orange-400">Tours & Travels</h3>
        <p class="text-sm text-indigo-200">Plan your journey with joy, ease, and unforgettable moments.</p>
        <!-- Optional: Socials -->
        <div class="flex gap-4 mt-4">
          <a href="#" class="text-indigo-300 hover:text-orange-400 transition"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-indigo-300 hover:text-orange-400 transition"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-indigo-300 hover:text-orange-400 transition"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Company -->
      <div>
        <h4 class="text-lg font-semibold mb-3">Company</h4>
        <ul class="space-y-2 text-indigo-300 text-sm">
          <li><a href="#" class="hover:text-orange-400 transition">About</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Careers</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Mobile App</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 class="text-lg font-semibold mb-3">Support</h4>
        <ul class="space-y-2 text-indigo-300 text-sm">
          <li><a href="#" class="hover:text-orange-400 transition">Help Center</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Press</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Affiliates</a></li>
        </ul>
      </div>

      <!-- More -->
      <div>
        <h4 class="text-lg font-semibold mb-3">Explore</h4>
        <ul class="space-y-2 text-indigo-300 text-sm">
          <li><a href="#" class="hover:text-orange-400 transition">Airline Fees</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Airline Info</a></li>
          <li><a href="#" class="hover:text-orange-400 transition">Low Fare Tips</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Text -->
    <div class="mt-10 border-t border-indigo-800 pt-6 text-center text-sm text-indigo-400">
      © 2025 Tours & Travels. All rights reserved.
    </div>
  </footer>

  <!-- Dropdown Toggle Script -->
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const dropdownMenu = document.getElementById('dropdownMenu');
    if (profileBtn) {
      profileBtn.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
      });
    }

    // Automatically fade out flash message after 5 seconds
    setTimeout(() => {
      const flash = document.getElementById('flash-message');
      if (flash) {
        flash.style.transition = 'opacity 0.5s ease-out';
        flash.style.opacity = '0';

        // Optional: Remove from DOM after fade
        setTimeout(() => flash.remove(), 300);
      }
    }, 5000);
  </script>

</body>

</html>