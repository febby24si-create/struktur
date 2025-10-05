<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tambahan CSS untuk mempercantik */
        body {
            animation: gradientBG 10s ease infinite;
            background-size: 400% 400%;
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .login-card {
            animation: fadeInUp 0.8s ease forwards;
            transform: translateY(30px);
            opacity: 0;
        }

        @keyframes fadeInUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .login-card:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .login-btn {
            position: relative;
            overflow: hidden;
        }

        .login-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transform: skewX(-20deg);
            transition: left 0.5s;
        }

        .login-btn:hover::before {
            left: 100%;
        }
    </style>
</head>

<body class="bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600 flex items-center justify-center min-h-screen">

    <div class="login-card bg-white/90 backdrop-blur-md rounded-2xl shadow-2xl w-full max-w-md p-10">
        <div class="flex flex-col items-center mb-6">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-full flex items-center justify-center shadow-md mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2 .896-2 2-2 2 .896 2 2z M12 15c2.209 0 4-1.791 4-4s-1.791-4-4-4-4 1.791-4 4 1.791 4 4 4z" />
                </svg>
            </div>
            <h2 class="text-3xl font-extrabold text-gray-800">Login Aplikasi</h2>
            <p class="text-gray-500 text-sm mt-1">Silakan masuk untuk melanjutkan</p>
        </div>

        <!-- Pesan error -->
        @if(session('error'))
        <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4 text-sm border border-red-200">
            {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-100 text-red-600 p-3 rounded-lg mb-4 text-sm border border-red-200">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Form login -->
        <form action="/auth/login" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="username" class="block text-gray-700 font-semibold mb-1">Username</label>
                <input type="text" name="username" id="username"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                    placeholder="Masukkan username" required>
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                    placeholder="Masukkan password" required>
            </div>

            <button type="submit"
                class="login-btn w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-3 px-4 rounded-lg font-semibold shadow-md hover:shadow-lg hover:from-blue-700 hover:to-indigo-700 transition duration-300">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            Belum punya akun? <a href="#" class="text-blue-600 hover:underline">Daftar sekarang</a>
        </p>
    </div>
</body>

</html>