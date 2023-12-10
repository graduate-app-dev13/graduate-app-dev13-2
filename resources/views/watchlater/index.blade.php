<!--resources/views/common/errors.blade.php-->

<x-app-layout>

<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <header class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">あとで見るリスト</h1>
        </header>

        <!-- Lessons List -->
        <div class="space-y-6">
            @foreach($lessons as $lesson)
                <div class="flex flex-col bg-white p-6 rounded-lg shadow">
                    <div class="mb-4 border-b pb-2">
                        <span class="text-xl font-semibold">{{ $lesson->lesson_name }}</span>
                    </div>
                    <div>
                        <a href="{{ route('search.show', $lesson->id) }}" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600 transition duration-200">
                            授業詳細を見る
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>