<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<main class="bg-gray-50 py-12 min-h-screen">
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
   
    
        <!-- Tour Header -->
        <div class="mb-10">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900"><?= esc($tour['title'] ?? 'Tour Details') ?></h1>
                    <p class="mt-1 text-gray-600 text-lg">
                        <?= esc($tour['from_location']) ?> → <?= esc($tour['to_location']) ?>
                    </p>
                </div>
                <a href="<?= base_url('/explore') ?>"
                    class="text-white px-4 py-2 bg-indigo-400 hover:bg-indigo-500 rounded-full text-sm">
                    <i class="fa fa-arrow-left mr-1"></i> Back to Tours
                </a>
            </div>
        </div>

        <!-- Main Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <div class="lg:col-span-2 space-y-6">
                <!-- Image -->
                <div class="overflow-hidden rounded-lg shadow">
                    <img src="<?= base_url( "/uploads/tours/". $tour['image'] ?? 'https://via.placeholder.com/600x400?text=No+Image') ?>"
                        alt="<?= esc($tour['title']) ?>" class="w-full h-96 object-cover" />
                </div>

                <!-- Description and Details -->
                <div class="bg-white rounded-lg shadow p-6">
                    <p class="text-gray-700 text-base leading-relaxed mb-6"><?= esc($tour['description']) ?></p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">
                        <p><strong>Departure:</strong> <?= esc($tour['departure_date']) ?></p>
                        <p><strong>Return:</strong> <?= esc($tour['return_date']) ?></p>
                        <p><strong>Price per Person:</strong> ₹<?= esc($tour['price_per_person']) ?></p>
                        <p><strong>Status:</strong> <?= esc(ucfirst($tour['status'])) ?></p>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="rounded-lg overflow-hidden h-64 border shadow">
                    <iframe width="100%" height="100%" frameborder="0" style="border:0"
                        src="https://www.google.com/maps?q=<?= urlencode($tour['to_location']) ?>&output=embed"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>

            <!-- Booking Form (1/3 Width) -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-4">Book This Tour</h2>

                <?php if (session()->getFlashdata('success')): ?>
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="<?= base_url('book-tour') . '/'.$tour['tour_id'] ?>"
                    oninput="totalPrice.value = '₹' + (no_of_persons.value * pricePerPerson.value)">
                    <input type="hidden" name="tour_id" value="<?= esc($tour['tour_id']) ?>" />
                    <input type="hidden" id="pricePerPerson" value="<?= esc($tour['price_per_person']) ?>" />

                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Number of Persons</label>
                        <input type="number" name="no_of_persons" min="1" value="1" required
                            class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                    </div>

                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Total Price</label>
                        <input type="text" name="total" value="₹<?= esc($tour['price_per_person']) ?>" readonly
                            id="totalPrice" class="w-full px-4 py-2 border border-gray-200 bg-gray-100 rounded" />
                    </div>

                    <button type="submit"
                        class="w-full py-3 bg-indigo-500 text-white rounded-lg hover:bg-indigo-500 transition">
                        Book Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>


<?= $this->endSection() ?>