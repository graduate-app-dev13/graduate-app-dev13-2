<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Tailwind CSSを追加 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">




    <div class="bg-white p-8 rounded-lg shadow-md w-1/3">
        <x-input-label>管理者ログイン画面</x-input-label>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route("admin.login") }}">
            @csrf
            <div class="mb-4">
                <x-input-label for="email" class="block text-gray-700 text-sm font-bold mb-2">登録したアドレス</x-input-label>
                <input type="text" id="email" name="email" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" required autofocus>
            </div>
            <div class="mb-4">
                <x-input-label for="password" class="block text-gray-700 text-sm font-bold mb-2">パスワード</x-input-label>
                <input type="password" id="password" name="password" class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" required autofocus>
            </div>
            <div class="text-center">
                <x-primary-button type="submit" >ログイン</x-primary-button>
            </div>
        </form>
    </div>

</body>
</html>