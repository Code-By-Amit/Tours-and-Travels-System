<?= $this->extend('layouts/main') ?>

<?= $this->section('Explore Tours') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="bg-gray-50 w-full min-h-screen py-10">

    <!-- Page Header -->
    <section class="max-w-7xl mx-auto px-6 mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Explore Tours</h1>
        <p class="text-gray-500 text-lg">Find your next adventure from our curated selection of tours.</p>
    </section>

    <!-- Search & Sort -->
    <section class="max-w-7xl mx-auto px-6 mb-10">
        <form action="<?= base_url('explore') ?>" method="get" class="flex flex-col md:flex-row gap-4">
            <input type="text" name="search" placeholder="Search destination or tour..." value="<?= esc($_GET['search'] ?? '') ?>"
                class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" />
            <button type="submit"
                class="px-5 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Search</button>
        </form>
    </section>

    <!-- Tour Cards -->
    <section class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (!empty($tours)): ?>
                <?php foreach ($tours as $tour): ?>
                    <a href="<?= base_url('tour/' . ($tour['tour_id'] ?? '')) ?>" class="block bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transform hover:-translate-y-1 transition">
                        <img src="<?= base_url('uploads/tours/' . $tour['image']) ?>" 
                             alt="<?= esc($tour['title'] ?? 'Tour') ?>" 
                             class="w-full h-56 object-cover" />
                        <div class="p-5">
                            <h2 class="text-lg font-semibold text-gray-800 truncate"><?= esc($tour['title'] ?? 'Untitled Tour') ?></h2>
                            <p class="text-gray-500 text-sm mt-1 mb-2 truncate">
                                <?= esc($tour['from_location'] ?? 'Unknown') ?> → <?= esc($tour['to_location'] ?? 'Unknown') ?>
                            </p>
                            <div class="flex justify-between items-center text-sm text-gray-400">
                                <span><?= esc($tour['departure_date'] ?? 'N/A') ?></span>
                                <span>₹<?= esc($tour['price_per_person'] ?? '-') ?></span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-gray-500 col-span-full">No tours available right now.</p>
            <?php endif; ?>
        </div>
    </section>
</div>

<?= $this->endSection() ?>