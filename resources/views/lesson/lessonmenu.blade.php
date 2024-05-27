<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Tailwind CSSを追加 -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

        <!-- メニューをTailwind CSSでスタイリング -->
    <ul class="bg-blue-500 p-4">
        <li class="text-white">
            ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefined' }}
        </li>
        <li class="text-white">
            <a href="{{ route('admin.logout') }}">
                ログアウト
            </a>
        </li>
        <a href="{{ route('admin.dashboard') }}">
            <button class="text-left font-bold text-lg text-gray-200 dark:text-gray-200">adminメニューに戻る</button>
        </a>
    </ul>

    {{-- <!-- ナビゲーションバー -->
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
    </div> --}}

    <!--lessonmenuのメニュー画面-->
    <!-- Icon Blocks -->
    <div class="text-gray-800 font-semibold bg-white max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_mark_email_unread_white_48dp.png') }}" alt="Image Description">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :href="route('lesson.create')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                         {{ __('words.lesson_create') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->
            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_mark_email_unread_white_48dp.png') }}" alt="Image Description">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :href="route('admin.lesson.index')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('words.lesson_index') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
    </div>



    <!-- フォーム -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- ... ここにフォームのコードを追加 ... -->
    </div>

</body>
</html>
