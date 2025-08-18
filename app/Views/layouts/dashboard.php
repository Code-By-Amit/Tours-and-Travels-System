<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    <?= $this->include('layouts/navbar') ?>

    <div class="flex min-h-[91vh]">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r shadow-sm">
            <div class="p-5 text-xl font-bold border-b">Dashboard</div>
            <nav class="p-4 text-sm space-y-2">
                <a href="<?= base_url('dashboard/my-bookings') ?>"
                    class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-200 transition <?= str_starts_with(uri_string(), 'dashboard/bookings') ? 'bg-indigo-500 text-white' : 'text-gray-700' ?>">
                    <i class="fa-solid fa-suitcase-rolling w-4"></i>
                    <span>My Bookings</span>
                </a>

                <a href="<?= base_url('dashboard/edit-profile') ?>"
                    class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-200 transition <?= str_starts_with(uri_string(), 'dashboard/edit-profile') ? 'bg-indigo-500 text-white' : 'text-gray-700' ?>">
                    <i class="fa-solid fa-user w-4"></i>
                    <span>Edit Profile</span>
                </a>

                <a href="<?= base_url('dashboard/user/change-password') ?>"
                    class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-200 transition <?= str_starts_with(uri_string(), 'dashboard/password') ? 'bg-indigo-500 text-white' : 'text-gray-700' ?>">
                    <i class="fa-solid fa-key w-4"></i>
                    <span>Change Password</span>
                </a>
<?php if (in_array(session('role'), ['admin', 'manager'])): ?>
    <hr class="my-4 border-gray-200">
    <p class="px-3 text-xs text-gray-500 uppercase">Admin Panel</p>

    <?php if (session('role') === 'admin'): ?>
        <a href="<?= base_url('dashboard/admin/manage-users') ?>"
            class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-200 transition <?= str_starts_with(uri_string(), 'dashboard/admin/manage-users') ? 'bg-indigo-500 text-white' : 'text-gray-700' ?>">
            <i class="fa-solid fa-users w-4"></i>
            <span>Manage Users</span>
        </a>
    <?php endif; ?>

    <a href="<?= base_url('dashboard/admin/manage-tours') ?>"
        class="flex items-center space-x-2 px-3 py-2 rounded-md hover:bg-gray-200 transition <?= str_starts_with(uri_string(), 'dashboard/admin/manage-tours') ? 'bg-indigo-500 text-white' : 'text-gray-700' ?>">
        <i class="fa-solid fa-map-location-dot w-4"></i>
        <span>Manage Tours</span>
    </a>
<?php endif; ?>

            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-gray-50">
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <script>
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