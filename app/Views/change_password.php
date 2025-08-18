<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('content') ?>

<div class="flex">

    <!-- Main content -->
    <main class="flex-1 p-8">
        <div class="max-w-2xl mx-auto p-6 bg-white rounded shadow">
            <h2 class="text-2xl font-bold mb-4">Edit Profile</h2>



            <form action="<?= base_url('dashboard/user/change-password') ?>" method="post" enctype="multipart/form-data"
                class="space-y-3">
                <div>
                    <label class="block font-semibold mb-1">Current Password</label>
                    <input type="text" placeholder="Current Password"
                     name="current_password" class="w-full border border-gray-300 rounded px-3 py-2"
                        required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">New Password</label>
                    <input type="text" name="new_password" placeholder="New Password"
                     class="w-full border border-gray-300 rounded px-3 py-2"
                        required>
                </div>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="bg-red-200 text-red-700 p-2 rounded mb-4">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>



                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Password
                </button>
            </form>
        </div>

    </main>
</div>


<?= $this->endSection() ?>