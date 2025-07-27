<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="<?= base_url('css/tailwind.css') ?>" rel="stylesheet">
</head>

<body class="bg-gray-100 w-full flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold text-center mb-6">Create an Account</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('register') ?>" method="post" class="space-y-4">
            <div>
                <label class="block mb-1 text-gray-600">Full Name</label>
                <input type="text" name="name"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required />
            </div>
            <div>
                <label class="block mb-1 text-gray-600">Email</label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required />
            </div>
            <div>
                <label class="block mb-1 text-gray-600">Password</label>
                <input type="password" name="password"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300"
                    required />
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
                Register
            </button>
            <p class="text-sm text-center mt-4">
                Already have an account? <a href="<?= base_url('login') ?>" class="text-blue-600 hover:underline">Login</a>
            </p>
        </form>
    </div>
</body>

</html>