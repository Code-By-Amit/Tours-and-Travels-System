<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('Manage Users') ?>
Manage Users
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">

    <?php if (session()->getFlashdata('success')): ?>
        <div id="flash-message" class="mb-4 px-4 py-3 rounded bg-green-100 text-green-800 border border-green-300">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div id="flash-message" class="mb-4 px-4 py-3 rounded bg-red-100 text-red-800 border border-red-300">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <h2 class="text-3xl font-bold mb-6 text-indigo-700">All Registered Users</h2>

    <?php if (empty($users)): ?>
        <p class="text-gray-600">No users found.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-2 border">Profile</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Role</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="border-t">
                            <td class="py-2 w-16">
                                <div class="w-10 h-10 mx-auto border rounded-full overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        src="<?= base_url('uploads/profile/') . $user['profile_pic'] ?>" alt="">
                                </div>
                            </td>
                            <td class="px-4 py-2"><?= $user['name'] ?></td>
                            <td class="px-4 py-2"><?= $user['email'] ?></td>
                            <td class="px-4 py-2 capitalize">
                                <form class="flex items-center space-x-2 w-full"
                                    action="<?= base_url('dashboard/admin/manage-users/role/' . $user['user_id']) ?>" method="POST">
                                    <select name="role" class="w-full border rounded px-2 py-1">
                                        <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        <option value="manager" <?= $user['role'] == 'manager' ? 'selected' : '' ?>>Manager
                                        </option>
                                        <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                                    </select>
                                    <button type="submit"
                                        class="bg-blue-500 text-white px-2 py-1 rounded shrink-0">Save</button>
                                </form>
                            </td>

                            <td class="px-4 py-2"><?= date('d-m-Y', strtotime($user['created_at'])) ?></td>
                            <td class="px-4 py-2">
                                <form action="<?= base_url('admin/manage-users/delete/' . $user['user_id']) ?>" method="POST"
                                    class="inline">
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="text-red-600 ml-2 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>