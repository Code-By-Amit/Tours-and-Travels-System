<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>
Edit Tour
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">
     <div class="mb-4">
        <a href="<?= base_url('/dashboard/admin/manage-tours') ?>" class="inline-block text-sm text-indigo-600 hover:underline">&larr; Back to Tours</a>
    </div>
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Tour</h2>

    <form action="<?= base_url('/dashboard/admin/manage-tours/edit/' . $tour['tour_id']) ?>" method="post" enctype="multipart/form-data" class="space-y-5">
        

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tour Title</label>
            <input type="text" name="title" value="<?= esc($tour['title']) ?>" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring focus:border-indigo-400" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="4" class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring focus:border-indigo-400" required><?= esc($tour['description']) ?></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">From Location</label>
                <input type="text" name="from_location" value="<?= esc($tour['from_location']) ?>" class="w-full border px-4 py-2 rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">To Location</label>
                <input type="text" name="to_location" value="<?= esc($tour['to_location']) ?>" class="w-full border px-4 py-2 rounded" required>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Departure Date</label>
                <input type="date" name="departure_date" value="<?= esc($tour['departure_date']) ?>" class="w-full border px-4 py-2 rounded" required>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Return Date</label>
                <input type="date" name="return_date" value="<?= esc($tour['return_date']) ?>" class="w-full border px-4 py-2 rounded" required>
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Price Per Person (INR)</label>
            <input type="number" name="price_per_person" value="<?= esc($tour['price_per_person']) ?>" class="w-full border px-4 py-2 rounded" required>
        </div>

        <?php if (!empty($tour['image'])): ?>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Current Image</label>
                <img src="<?=  $tour['image'] ?>" alt="Tour Image" class="w-40 h-24 object-cover rounded mb-2">
            </div>
        <?php endif; ?>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Upload New Image (Optional)</label>
            <input type="file" name="image" accept="image/*" class="w-full border px-4 py-2 rounded">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status" class="w-full border px-4 py-2 rounded" required>
                <option value="active" <?= $tour['status'] === 'active' ? 'selected' : '' ?>>Active</option>
                <option value="inactive" <?= $tour['status'] === 'inactive' ? 'selected' : '' ?>>Inactive</option>
            </select>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-indigo-600 text-white font-medium px-6 py-2 rounded hover:bg-indigo-700 transition">
                Update Tour
            </button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>

