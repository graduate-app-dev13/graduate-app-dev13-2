<x-admin-app-layout>
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
    </ul>

    <!-- ヘッダー部分をスタイリング -->
    <div class="bg-white">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight p-4">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
    </div>

    <!--admin用のメニュー画面-->
    <!-- Icon Blocks -->
    <div class="text-gray-800 font-semibold bg-white max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_home_white_48dp.png') }}" alt="home">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-lg font-semibold text-black-800 dark:text-black-200">
                        {{ __('TOP') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_import_contacts_white_48dp.png') }}" alt="home">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :href="route('admin.lesson.lessonmenu')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('授業登録管理') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_add_business_white_48dp.png') }}" alt="Image Description">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :href="route('admin.company.registar')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('会社登録管理') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_person_add_white_48dp.png') }}" alt="Image Description">
                </div>
                <!-- End Icon -->

                <div class="mt-3">
                    <x-nav-link :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('admin登録管理') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->

            <!-- Icon Block -->
            <div class="h-36 sm:h-56 flex flex-col justify-center border border-gray-200 rounded-xl text-center p-4 md:p-5 dark:border-gray-700">
                <!-- Icon -->
                <div class="flex justify-center items-center w-12 h-12 bg-gradient-to-br from-blue-600 to-violet-600 rounded-md mx-auto">
                    <img class="ww-7 h-7 text-white" src="{{ asset('images/outline_free_cancellation_white_48dp.png') }}" alt="Image Description">
                </div>
                <!-- End Icon -->
                <div class="mt-3">
                    <x-nav-link :href="route('admin.reserve.index')"  :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('予約管理') }}
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
                    <x-nav-link :href="route('inquiry.index')" :active="request()->routeIs('dashboard')" class="text-blue-500">
                        <h3 class="text-sm sm:text-base font-semibold text-gray-800 dark:text-black-200">
                        {{ __('問い合わせ管理') }}
                        </h3>
                    </x-nav-link>
                </div>
            </div>
            <!-- End Icon Block -->
        </div>
        <!-- End Grid -->
    </div>
    <!--admin用のメニュー画面-->
    <!-- End Icon Blocks -->
</x-admin-app-layout>