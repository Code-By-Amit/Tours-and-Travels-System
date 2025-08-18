<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>

<div class="flex">

    <!-- Main content -->
    <main class="flex-1 p-8">
        <div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
            <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/dashboard/updateprofile') ?>" method="post" enctype="multipart/form-data"
                class="space-y-3">
                <div>
                    <label class="block font-semibold mb-1">Name</label>
                    <input type="text" name="name" value="<?= esc($user['name']) ?>"
                        class="w-full border border-gray-300 rounded px-3 py-2" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Email</label>
                    <input type="email" name="email" value="<?= esc($user['email']) ?>"
                        class="w-full border border-gray-300 rounded px-3 py-2" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Phone</label>
                    <input type="text" name="phone_number" value="<?= esc($user['phone_number']) ?>"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <div>
                    <label class="block font-semibold mb-1">Location</label>
                    <input type="text" name="location" value="<?= esc($user['location']) ?>"
                        class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <div>
                    <label class="block font-semibold mb-1">Profile Image</label>
                    <?php if ($user['profile_pic']): ?>
                        <img src="<?= base_url('uploads/profile/' . $user['profile_pic']) ?>"
                            class="h-20 w-20 rounded-full mb-2" alt="Profile Image">
                    <?php endif; ?>
                    <input type="file" name="profile_pic" class="w-full border border-gray-300 rounded px-3 py-2">
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Profile
                </button>
            </form>
        </div>

    </main>
</div>


<?= $this->endSection() ?>