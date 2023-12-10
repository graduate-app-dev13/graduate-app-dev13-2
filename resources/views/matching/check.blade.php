<x-admin-app-layout>
    <ul class="bg-blue-500 p-4">
        <li class="text-white">
            ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefined' }}
        </li>
        <li class="text-white">
            <a href="{{ route('admin.logout') }}" class="py-2 px-4 hover:bg-blue-700 transition duration-300 ease-in-out">
                ログアウト
            </a>
        </li>
    </ul> 
    @csrf
    <!-- 以下は、レスポンシブなグリッドレイアウトの改善例です -->
    <div class="container mx-auto my-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-4xl font-semibold leading-tight text-gray-800">予約処理の最終確認</h2>
        </div>

        <!-- ボタンのサイズを大きくしてタッチフレンドリーにする -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- 日程調整ボタン -->
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <a href="https://app.aitemasu.me/add-event" target="_blank" class="inline-block w-full">
                    <button class="w-full text-lg py-4 bg-green-500 hover:bg-green-600 text-white font-bold rounded-lg transition duration-300 ease-in-out">
                        日程調整表の確認
                    </button>
                </a>
            </div>
            <!-- 予約確定ボタン -->
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <a href="{{ route('admin.matching.finish', ['id' =>$id])}}" class="inline-block w-full">
                    <button class="w-full text-lg py-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg transition duration-300 ease-in-out">
                        予約確定
                    </button>
                </a>
            </div>
            <!-- 修正ボタン -->
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <a href="#" class="inline-block w-full">
                    <button class="w-full text-lg py-4 bg-white hover:bg-gray-200 text-gray-900 border border-gray-300 rounded-lg transition duration-300 ease-in-out">
                        修正
                    </button>
                </a>
            </div>
            <!-- 作業中止ボタン -->
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <a href="#" class="inline-block w-full">
                    <button class="w-full text-lg py-4 bg-white hover:bg-gray-200 text-gray-900 border border-gray-300 rounded-lg transition duration-300 ease-in-out">
                        作業中止
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-admin-app-layout>