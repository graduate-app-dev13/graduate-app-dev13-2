<!--resourses/views/reserve/index.blade.php-->
<!--adminの予約管理-->
<!--予約履歴-->

<x-admin-app-layout>
  
  <!-- メニューをTailwind CSSでスタイリング -->
  <ul class="bg-blue-500 p-4">
    <li class="text-white">ログイン中：{{ Auth::guard('admin')->user()->name ?? 'undefined' }}</li>
    <li class="text-white"><a href="{{ route('admin.logout') }}">ログアウト</a></li>
  </ul> 
  
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-11">
       <!---------------------------------------------->
        <table class="min-w-full leading-normal">
          <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-2xl font-semibold text-gray-600 uppercase tracking-wider">
            予約一覧画面
            </th>
          </tr>
        </table>
        <!---------------------------------------------->
       @foreach ($reserves as $reserve)
        <div class="mb-11 bg-white overflow-hidden shadow-xl sm:rounded-lg text-lg">
          <div class="p-6 bg-white border-b border-gray-200">
            <!-- Responsive table -->
            <div class="overflow-x-auto">
            
            <table class="w-full">
              <thead class="bg-blue-200">
                <tr>
                  <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider
                    授業名
                  </th>
                  <th class="text-lg px-5 py-3 border-b-2 border-gray-200 text-left font-semibold text-gray-600 uppercase tracking-wider">
                    予約希望日時
                  </th>
                  <th class="text-lg px-5 py-3 border-b-2 border-gray-200 text-left font-semibold text-gray-600 uppercase tracking-wider">
                    学校名
                  </th>
                  <th class="text-lg px-5 py-3 border-b-2 border-gray-200 text-left font-semibold text-gray-600 uppercase tracking-wider">
                    予約者
                  </th>
                  <th class="text-lg px-5 py-3 border-b-2 border-gray-200 text-left font-semibold text-gray-600 uppercase tracking-wider">
                    その他
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-gray-100">
                  <!--希望日-->
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">{{ $reserve->lesson->lesson_name }}</p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <p>第一希望</p>
                  <p class="text-gray-600 whitespace-no-wrap">
                    {{ $reserve->first_choice_date }} ({{$reserve->first_choice_start_time }} ~{{ $reserve->first_choice_end_time }})
                  </p>
                
                  <p>第二希望</p>
                  <p class="text-gray-600 whitespace-no-wrap">
                  {{ $reserve->second_choice_date }} ({{$reserve->second_choice_start_time }} ~{{ $reserve->second_choice_end_time }})
                  </p>
                  
                  <p>第三希望</p>
                  <p class="text-gray-600 whitespace-no-wrap">
                  {{ $reserve->third_choice_date }} ({{$reserve->third_choice_start_time }} ~{{ $reserve->third_choice_end_time }})
                  </p>
                  </td><!--希望日-->
                  
                  <!--学校情報-->
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-600 whitespace-no-wrap">
                    {{ $reserve->user->school->school_name }}小学校
                    </p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-600 whitespace-no-wrap">
                    {{ $reserve->user->name }}
                    </p>
                  </td>
                  <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-600 whitespace-no-wrap">
                    希望教科:{{ $reserve->subject }}
                    </p>
                    <p class="text-gray-600 whitespace-no-wrap">
                    学年:{{ $reserve->graduate }}{{ $reserve->number_student }}人
                    </p>
                  </td>
                </tr><!--<tr class="hover:bg-gray-100">-->
                      
              </tbody>
            </table> <!-- End of table -->
          </div>
        </div>
        
        <!-- Adjustment Button -->
        <div class=" flex justify-end">
          <div class=" m-4">
            <form action="{{ route('admin.matching.create',['id' => $reserve->id]) }}" method="GET" class="text-left">
              @csrf
              <x-primary-button class="mr-4">
                <p class="text-lg">予約調整</p>
                <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
              </x-primary-button>
            </form>
          </div>
        </div>
       <!-- End of Adjustment Button -->
      </div>
     @endforeach
  </div>
</x-admin-app-layout>