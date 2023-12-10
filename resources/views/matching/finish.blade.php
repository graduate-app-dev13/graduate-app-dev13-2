
<x-admin-app-layout>
    <!-- Menu with Tailwind CSS for styling -->
    <ul class="bg-blue-500 p-4 text-white">
        <li>ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefined' }}</li>
        <li><a href="{{ route('admin.logout') }}" class="hover:underline">ログアウト</a></li>
    </ul> 

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 my-10">
        <div class="md:w-1/2 bg-white rounded-lg border border-gray-100 shadow-xl mx-auto">
            <div class="px-6 py-5 text-center">
                <p class="font-semibold text-5xl">予約確定しました</p>
                <div class="space-y-6 mb-6">
                    <!-- Buttons with adjusted margin for responsive design -->
                    <a href="{{ route('admin.mail.send', ['id' => $id]) }}"
                       class="block bg-blue-400 text-white py-4 px-3 md:px-6 text-lg text-center hover:bg-blue-500 transition ease-in-out duration-300 rounded-full my-2">
                        企業・学校にお知らせをする
                    </a>
                    
                    <a href="{{ route('pdf.matching.output', ['id' => $id]) }}" target="_blank"
                       class="block bg-gray-400 text-white text-center py-4 px-4 md:px-6 text-lg hover:bg-gray-500 transition ease-in-out duration-300 rounded-full my-2">
                        学校・企業・団体配布用PDF書類の確認・ダウンロード
                    </a>
                    
                    <a href="{{ route('admin.dashboard') }}"
                       class="block text-center bg-transparent py-4 px-3 md:px-6 text-lg hover:bg-blue-200 transition ease-in-out duration-300 rounded-full my-2 border border-black-500">
                        管理画面に戻る
                    </a>
                </div>
                <div class="flex justify-start items-center gap-2 pb-5">
                    <span class="h-3 w-3 rounded-full bg-green-500"></span>
                    <span class="text-sm font-medium text-green-700">spot teacher</span>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>