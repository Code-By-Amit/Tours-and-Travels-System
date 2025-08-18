<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Profile</title>
  <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
  <!-- Optional Navbar -->
  <?= $this->include('layouts/navbar') ?>

  <main class="bg-gray-100 min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-3xl bg-white shadow-xl rounded-2xl overflow-hidden">

      <!-- Profile Banner -->
      <div class="bg-gradient-to-r from-indigo-600 to-purple-600 h-36 relative">
        <div class="absolute -bottom-10 left-6">

          <img src="<?= base_url('uploads/profile/' . $profile_pic) ?>" alt="User Avatar"
            class="w-24 h-24 rounded-full border-4 border-white shadow-lg object-cover">

        </div>
      </div>

      <!-- Content -->
      <div class="px-6 pt-16 pb-8">
        <!-- Top section -->
        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6">
          <div>
            <h2 class="text-2xl font-bold text-gray-800"><?= esc($name) ?></h2>
            <p class="text-sm text-gray-500 mt-1"><?= esc($email) ?></p>
          </div>
          <div class="flex gap-7 justify-center items-center">
            <a href="<?=base_url('/dashboard/edit-profile')?>"
              class="mt-4 sm:mt-0 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded-md text-sm font-medium">
              Edit Profile
            </a>
            <form action="<?= base_url('/user/delete-account') ?>" method="post" id="deleteAccountForm">
              <button type="submit"
                onclick="return confirm('Are you sure you want to delete your account? This cannot be undone.')"
                class="mt-4 sm:mt-0 bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-md text-sm font-medium">
                Delete Account
              </button>
            </form>
          </div>
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-700">
          <div>
            <label class="text-gray-500 font-medium">Phone Number</label>
            <p class="mt-1"><?= esc($phone) ?></p>
          </div>
          <div>
            <label class="text-gray-500 font-medium">Location</label>
            <p class="mt-1"><?= esc($location) ?></p>
          </div>
          <div>
            <label class="text-gray-500 font-medium">Account Status</label>
            <span
              class="inline-block mt-1 bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-medium"><?= esc($status) ?></span>
          </div>
          <div>
            <label class="text-gray-500 font-medium">Member Since</label>
            <p class="mt-1"><?= esc($member_since) ?></p>
          </div>
        </div>

        <!-- Booking Stats -->
        <div class="mt-10">
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Booking Summary</h3>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="bg-gray-50 border rounded-lg p-4 text-center">
              <div class="text-2xl font-bold text-indigo-600"><?= esc($bookings) ?></div>
              <p class="text-sm text-gray-600 mt-1">Total Bookings</p>
            </div>
            <div class="bg-gray-50 border rounded-lg p-4 text-center">
              <div class="text-2xl font-bold text-green-600"><?= esc($upcoming) ?></div>
              <p class="text-sm text-gray-600 mt-1">Upcoming Tours</p>
            </div>
            <div class="bg-gray-50 border rounded-lg p-4 text-center">
              <div class="text-2xl font-bold text-gray-800"><?= esc($role) ?></div>
              <p class="text-sm text-gray-600 mt-1">User Role</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>




  <!-- Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>