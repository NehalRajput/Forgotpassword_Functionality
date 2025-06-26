<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- ✅ Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Welcome, {{ Auth::user()->name }}</h1>
        <a href="/logout" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</a>
    </nav>

    <main class="p-8">
        <div class="bg-white rounded shadow p-6 text-gray-700">
            <h2 class="text-2xl font-semibold mb-4">Dashboard</h2>
            <p>You are successfully logged in to your dashboard.</p>
        </div>
    </main>
</body>
</html>
