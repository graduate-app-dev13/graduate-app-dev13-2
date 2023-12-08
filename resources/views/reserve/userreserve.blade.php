<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <h1 class="text-center text-2xl font-bold mb-8">ユーザー予約履歴</h1>
          <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
            @forelse ($reservations as $reservation)
              <div class="col-span-4 lg:col-span-6 border rounded-lg overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{ asset($reservation->lesson->image) }}" alt="授業の画像">
                <div class="p-4">
                  <h2 class="text-lg font-semibold mb-2">{{ $reservation->lesson->lesson_name }}</h2>
                  <p>学校名：{{ $reservation->user->userSchools->school_name ?? 'N/A' }}小学校</p>
                  <p>担当教員名：{{ $reservation->user->name ?? 'N/A' }}</p>
                  <div class="mt-4 flex justify-between items-center">
                    <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition duration-300 ease-in-out">再度予約</a>
                    <a href="{{ route('pdf.pdf', $reservation->id) }}" class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition duration-300 ease-in-out">履歴詳細</a>
                  </div>
                </div>
              </div>
            @empty
              <p>予約履歴はありません。</p>
            @endforelse
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>