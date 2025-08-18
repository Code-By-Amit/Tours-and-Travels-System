<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>
Home
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section
  class="flex flex-col-reverse md:flex-row items-center px-8 md:px-20 py-20 gap-12 bg-gradient-to-r from-blue-50 to-indigo-100">
  <!-- Text Content -->
  <div class="md:w-1/2 text-center md:text-left">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
      Discover the World with Trusted Travel Experts
    </h1>
    <p class="text-base md:text-lg text-gray-600 mb-8 max-w-md md:max-w-none mx-auto md:mx-0">
      Premium tour packages, seamless planning, and personalized experiences —
      everything you need for a journey to remember.
    </p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
      <button
        class="bg-indigo-600 text-white px-6 py-3 rounded-full font-medium hover:bg-indigo-700 transition duration-300 shadow-md">
        Plan Your Trip
      </button>
      <a href="#services" class="text-indigo-600 hover:underline font-medium py-3">
        View Services
      </a>
    </div>
  </div>

  <!-- Hero Image -->
  <div class="md:w-1/2">
    <img
      src="https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
      alt="Professional Travel Agency Banner" class="w-full rounded-xl shadow-xl object-cover" />
  </div>
</section>

<!-- Services Section -->
<section class="text-center py-20 px-6 md:px-20 bg-white min-h-[70vh] flex items-center justify-center flex-col">
  <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-14">
    Our Premium Services
  </h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

    <!-- Service Card -->
    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
      <div
        class="w-14 h-14 mx-auto mb-5 bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full text-2xl">
        <i class="fas fa-cloud-sun"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Weather Planning</h3>
      <p class="text-sm text-gray-600 leading-relaxed">
        Plan ahead with accurate, destination-based weather insights.
      </p>
    </div>

    <!-- Service Card -->
    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
      <div
        class="w-14 h-14 mx-auto mb-5 bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full text-2xl">
        <i class="fas fa-plane-departure"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Best Flight Deals</h3>
      <p class="text-sm text-gray-600 leading-relaxed">
        Compare and book top airline offers at the best available prices.
      </p>
    </div>

    <!-- Service Card -->
    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
      <div
        class="w-14 h-14 mx-auto mb-5 bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full text-2xl">
        <i class="fas fa-map-marked-alt"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Local Experiences</h3>
      <p class="text-sm text-gray-600 leading-relaxed">
        Immerse yourself in authentic local events, food, and culture.
      </p>
    </div>

    <!-- Service Card -->
    <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
      <div
        class="w-14 h-14 mx-auto mb-5 bg-indigo-100 text-indigo-600 flex items-center justify-center rounded-full text-2xl">
        <i class="fas fa-sliders-h"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Custom Itineraries</h3>
      <p class="text-sm text-gray-600 leading-relaxed">
        Build your perfect trip with flexible, personalized travel plans.
      </p>
    </div>

  </div>
</section>


<!-- Top Destinations -->
<section class="py-20 px-8 bg-gray-50">
  <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Top Trending Destinations</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">
      <img
        src="https://images.unsplash.com/photo-1738069128560-26889348f785?q=80&w=1492&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="Rome" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg mb-1">Rome, Italy</h3>
        <p class="text-sm text-gray-600">Starting from ₹55,000</p>
      </div>
    </div>
    <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">
      <img
        src="https://images.unsplash.com/photo-1533929736458-ca588d08c8be?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="London" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg mb-1">London, UK</h3>
        <p class="text-sm text-gray-600">Starting from ₹72,000</p>
      </div>
    </div>
    <div class="bg-white rounded-xl shadow hover:shadow-md transition overflow-hidden">
      <img
        src="https://images.unsplash.com/photo-1546412414-8035e1776c9a?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8ZHViYWl8ZW58MHwwfDB8fHww"
        alt="Dubai" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="font-semibold text-lg mb-1">Dubai, UAE</h3>
        <p class="text-sm text-gray-600">Starting from ₹60,000</p>
      </div>
    </div>
  </div>
</section>

<!-- Booking Process -->
<!-- Booking Steps -->
<section class="py-20 px-6 bg-gray-50 text-center">
  <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-14">
    Book Your Trip in 3 Easy Steps
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
      <div class="text-3xl text-orange-500 mb-4">
        <i class="fas fa-map-marked-alt"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Choose Destination</h3>
      <p class="text-sm text-gray-600">Browse our handpicked destinations and find your perfect getaway.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
      <div class="text-3xl text-orange-500 mb-4">
        <i class="fas fa-credit-card"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Secure Booking</h3>
      <p class="text-sm text-gray-600">Easily confirm your trip with safe and flexible payment options.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition">
      <div class="text-3xl text-orange-500 mb-4">
        <i class="fas fa-suitcase-rolling"></i>
      </div>
      <h3 class="text-lg font-semibold text-gray-800 mb-2">Travel & Explore</h3>
      <p class="text-sm text-gray-600">Pack your bags and enjoy unforgettable travel experiences.</p>
    </div>

  </div>
</section>


<!-- Testimonials -->
<!-- Testimonials Section -->
<section class="bg-white py-20 px-6">
  <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-800 mb-14">
    What Our Travellers Say
  </h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

    <!-- Testimonial 1 -->
    <div class="bg-gray-50 p-6 rounded-xl shadow">
      <p class="text-gray-700 italic mb-4">
        “Booking with them was a breeze. Great service and amazing destinations!”
      </p>
      <div class="flex items-center gap-4">
        <img src="https://i.pravatar.cc/100?img=3" alt="user" class="w-12 h-12 rounded-full">
        <div>
          <p class="font-semibold text-gray-800">Ankit Sharma</p>
          <p class="text-sm text-gray-500">Frequent Flyer</p>
        </div>
      </div>
    </div>

    <!-- Testimonial 2 -->
    <div class="bg-gray-50 p-6 rounded-xl shadow">
      <p class="text-gray-700 italic mb-4">
        “I loved how smooth the entire booking process was. Highly recommended!”
      </p>
      <div class="flex items-center gap-4">
        <img src="https://i.pravatar.cc/100?img=5" alt="user" class="w-12 h-12 rounded-full">
        <div>
          <p class="font-semibold text-gray-800">Muskan Dubey </p>
          <p class="text-sm text-gray-500">Adventure Seeker</p>
        </div>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="bg-gray-50 p-6 rounded-xl shadow">
      <p class="text-gray-700 italic mb-4">
        “From destination guides to custom plans — they do it all with class.”
      </p>
      <div class="flex items-center gap-4">
        <img src="https://i.pravatar.cc/100?img=7" alt="user" class="w-12 h-12 rounded-full">
        <div>
          <p class="font-semibold text-gray-800">Amit saini</p>
          <p class="text-sm text-gray-500">Solo Traveller</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Newsletter -->
<!-- Newsletter Section -->
<section class="py-20 px-6 bg-gray-50 text-center">
  <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
    Stay Updated on Travel Deals
  </h2>
  <p class="text-sm text-gray-600 mb-8 max-w-xl mx-auto">
    Join our newsletter and get curated offers, seasonal updates, and hidden gems – directly to your inbox.
  </p>

  <form class="flex flex-col md:flex-row justify-center items-center gap-4 max-w-xl mx-auto">
    <input type="email" placeholder="Your email address"
      class="w-full md:w-2/3 px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400 shadow-sm transition"
      required>
    <button type="submit"
      class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition">
      Subscribe
    </button>
  </form>
</section>


<?= $this->endSection() ?>