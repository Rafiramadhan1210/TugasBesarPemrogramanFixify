<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Fixify</title>

    <!-- Tailwind dari Vite -->
    @vite('resources/css/app.css')

    <!-- Jika Tailwind tidak jalan di hosting, buka komentar di bawah -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>

<body class="min-h-screen bg-gradient-to-br from-indigo-600 to-purple-700 flex items-center justify-center px-4">

    <!-- CARD -->
    <div class="bg-white w-full max-w-md rounded-2xl shadow-2xl p-8">

        <!-- HEADER + LOGO -->
        <div class="text-center mb-6">
            <img
                src="{{ asset('images/logo.png') }}"
                alt="Fixify Logo"
                class="mx-auto h-20 w-20 rounded-full shadow-md mb-4 bg-white p-2"
            >

            <h1 class="text-3xl font-bold text-gray-800">
                Login Admin
            </h1>

            <p class="text-gray-500 text-sm mt-1">
                Masuk ke dashboard Fixify
            </p>
        </div>

        <!-- FORM -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Email
                </label>
                <input
                    type="email"
                    name="email"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="email@gmail.com"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Password
                </label>
                <input
                    type="password"
                    name="password"
                    required
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    placeholder="••••••••"
                >
            </div>

            <!-- Remember -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-600">
                    <input type="checkbox" class="rounded text-indigo-600">
                    Ingat saya
                </label>

                <a href="#" class="text-indigo-600 hover:underline">
                    Lupa password?
                </a>
            </div>

            <!-- Button -->
            <button
                type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-xl transition duration-200"
            >
                Login
            </button>
        </form>

    </div>

</body>
</html>
         <!-- <script src="https://cdn.tailwindcss.com"></script> -->
         <script src="https://cdn.tailwindcss.com"></script>

         


