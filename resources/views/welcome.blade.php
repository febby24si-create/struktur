<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-green-400 to-emerald-600 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-2xl shadow-lg p-8 text-center max-w-md">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Selamat Datang 🎉</h1>
        <p class="text-gray-600 text-lg">Halo, <span class="font-semibold text-blue-600">{{ $username }}</span>!</p>
        <p class="text-gray-500 mt-2">Kamu berhasil login ke aplikasi ini.</p>
    </div>
</body>

</html>