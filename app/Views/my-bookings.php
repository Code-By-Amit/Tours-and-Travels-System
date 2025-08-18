<?= $this->extend('layouts/dashboard') ?>

<?= $this->section('Explore Tours') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="max-w-5xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-3xl font-bold mb-6 text-indigo-700">My Bookings</h2>

    <?php if (empty($bookings)): ?>
        <p class="text-gray-600">You have no bookings yet.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border border-gray-300">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="px-4 py-2 border">Tour</th>
                        <th class="px-4 py-2 border">From</th>
                        <th class="px-4 py-2 border">To</th>
                        <th class="px-4 py-2 border">Start Date</th>
                        <th class="px-4 py-2 border">End Date</th>
                        <th class="px-4 py-2 border">Booked On</th>
                        <th class="px-4 py-2 border">Persons</th>
                        <th class="px-4 py-2 border">Amount</th>
                        <th class="px-4 py-2 border">Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookings as $booking): ?>
                        <tr class="border-t">
                            <td class="px-4 py-2">
                                <div class="w-15 h-7 overflow-hidden">
                                    <img src="<?= base_url('uploads/tours/' . $booking['image']) ?>" alt="<?= $booking['title'] ?>"
                                        class="w-full h-full object-cover" />
                                   
                                </div>
                            </td>
                            <td class="px-4 py-2"><?= esc($booking['from_location']) ?></td>
                            <td class="px-4 py-2"><?= esc($booking['to_location']) ?></td>
                            <td class="px-4 py-2"><?= esc($booking['departure_date']) ?></td>
                            <td class="px-4 py-2"><?= esc($booking['return_date']) ?></td>

                            <td class="px-4 py-2"><?= esc($booking['booking_date']) ?></td>
                            <td class="px-4 py-2"><?= esc($booking['number_of_persons']) ?></td>
                            <td class="px-4 py-2">₹<?= esc($booking['total_amount']) ?></td>
                            <td class="px-4 py-2"> 
                                <form action="<?= base_url('/dashboard/user/cancel-booking/' . $booking['booking_id']) ?>" method="post">
                                    <button type="submit" class="text-red-600 hover:underline">Cancel</button>
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