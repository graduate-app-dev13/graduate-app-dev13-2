<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Tailwind CSSを追加 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- ナビゲーションバー -->
    <div class="bg-blue-500 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="text-white text-2xl">管理者用ログイン</div>
                <div class="space-x-8">
                    <!-- 授業登録リンク -->
                    <a href="{{ route('lesson.create') }}" class="text-white hover:text-blue-300">授業登録</a>
                    <!-- 授業一覧リンク -->
                    <a href="{{ route('admin.lesson.index') }}" class="text-white hover:text-blue-300">授業一覧</a>
                    <!-- 他のナビゲーションリンクを追加 -->
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('admin.dashboard') }}">
     <button class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">adminメニューに戻る</button>
    </a>

    <!-- フォーム -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- ... ここにフォームのコードを追加 ... -->
    </div>

</body>
</html>
