<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('title') ?>
Add Tour
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-8 mt-6">

    <div class="mb-4">
        <a href="<?= base_url('/dashboard/admin/manage-tours') ?>"
            class="inline-block text-sm text-indigo-600 hover:underline">&larr; Back to Tours</a>
    </div>

    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Add Tour</h2>

    <form action="<?= base_url('/dashboard/admin/manage-tours/create') ?>" method="post" enctype="multipart/form-data"
        class="space-y-5">

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Tour Title</label>
            <input type="text" name="title" placeholder="Enter tour title"
                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring focus:border-indigo-400"
                required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
            <textarea name="description" rows="4" placeholder="Enter tour description"
                class="w-full border border-gray-300 px-4 py-2 rounded focus:outline-none focus:ring focus:border-indigo-400"
                required></textarea>
        </div>

        <div class="flex w-full gap-3 items-center">
            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">From Location</label>
                <input type="text" name="from_location" placeholder="Enter starting point"
                    class="w-full border px-4 py-2 rounded" required>
            </div>

            <div class="flex-1">
                <label class="block text-sm font-medium text-gray-700 mb-1">To Location</label>
                <input type="text" name="to_location" placeholder="Enter destination"
                    class="w-full border px-4 py-2 rounded" required>
            </div>
        </div>

    
            <div class="flex w-full gap-3 items-center ">
                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Departure Date</label>
                    <input type="date" name="departure_date" class="w-full border px-4 py-2 rounded" required>
                </div>

                <div class="flex-1">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Return Date</label>
                    <input type="date" name="return_date" class="w-full border px-4 py-2 rounded" required>
                </div>
            </div>
      

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Price Per Person (INR)</label>
            <input type="number" name="price_per_person" placeholder="Enter price per person"
                class="w-full border px-4 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Upload Image</label>
            <input type="file" name="image" accept="image/*" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
            <select name="status" class="w-full border px-4 py-2 rounded" required>
                <option value="">Select status</option>
                <option value="active" selected>Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div class="text-right">
            <button type="submit"
                class="bg-indigo-600 text-white font-medium px-6 py-2 rounded hover:bg-indigo-700 transition">
                Add Tour
            </button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>