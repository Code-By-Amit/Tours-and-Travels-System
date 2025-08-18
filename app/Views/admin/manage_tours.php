<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('Manage Tours') ?>
Manage Tours
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-indigo-700">All Tours</h2>
        <a href="<?= base_url('/dashboard/admin/manage-tours/create') ?>" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded shadow">+ Add Tour</a>
    </div>

    <?php if (empty($tours)): ?>
        <p class="text-gray-600">No tours found.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border">Image</th>
                        <th class="px-4 py-2 border">Title</th>
                        <th class="px-4 py-2 border">From</th>
                        <th class="px-4 py-2 border">To</th>
                        <th class="px-4 py-2 border">Start</th>
                        <th class="px-4 py-2 border">End</th>
                        <th class="px-4 py-2 border">Price</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tours as $tour): ?>
                        <tr class="border-t">
                            <td class="px-4 py-2">
                                <div class="w-12 h-12">
                                    <img class="w-full h-full object-cover" src="<?= base_url('uploads/tours/').$tour['image']?>" alt="">
                                </div>
                            </td>
                            <td class="px-4 py-2"><?= esc($tour['title']) ?></td>
                            <td class="px-4 py-2"><?= esc($tour['from_location']) ?></td>
                            <td class="px-4 py-2"><?= esc($tour['to_location']) ?></td>
                            <td class="px-4 py-2"><?= esc($tour['departure_date']) ?></td>
                            <td class="px-4 py-2"><?= esc($tour['return_date']) ?></td>
                            <td class="px-4 py-2">₹<?= esc($tour['price_per_person']) ?></td>
                            <td class="px-4 py-2 capitalize"><?= esc($tour['status']) ?></td>
                            <td class="px-4 py-2 flex justify-center items-center flex-col">
                                <a href="<?= base_url('/dashboard/admin/manage-tours/edit/' . $tour['tour_id']) ?>" class="text-blue-600 hover:underline">Edit</a>
                                <form action="<?= base_url('/dashboard/admin/manage-tours/delete/' . $tour['tour_id']) ?>" method="post" class="inline">
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 ml-2 hover:underline">Delete</button>
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
