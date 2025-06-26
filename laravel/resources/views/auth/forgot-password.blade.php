<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Reset Password</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/forgot-password" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">New Password</label>
                <input type="password" name="password" class="w-full border rounded px-3 py-2" required>
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Reset Password
            </button>
            <p class="text-sm text-center mt-4">
                <a href="/login" class="text-blue-600 hover:underline">Back to login</a>
            </p>
        </form>
    </div>
</body>
</html>
