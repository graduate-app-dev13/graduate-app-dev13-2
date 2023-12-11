<x-admin-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Create New Tweet') }}
    </h2>
  </x-slot>

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
            <button class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">adminメニューに戻る</button>
        </a>
    </ul>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
      <div class="bg-white dark:bg-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-200 border-b border-gray-200 dark:border-gray-200 ">
          @include('common.errors')

        <form action="{{ route('lesson.store') }}" method="post">
            @csrf
            <div>
            <label for="company_id">企業団体:</label>
            <select name="company_id" id="company_id">
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                @endforeach
            </select>
            @error('company_id')
                <div>{{ $message }}</div>
            @enderror
            </div>
            <div>
                <label for="lesson_name">授業名:</label>
                <input type="text" name="lesson_name" id="lesson_name" value="{{ old('lesson_name') }}">
                @error('lesson_name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="lesson_detail">授業の詳細内容:</label>
                <textarea name="lesson_detail" id="lesson_detail">{{ old('lesson_detail') }}</textarea>
                @error('lesson_detail')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="lesson_type">Lesson Type:</label>
                <select name="lesson_type" id="lesson_type">
                    <option value="対面" {{ old('lesson_type') == '対面' ? 'selected' : '' }}>対面</option>
                    <option value="オンライン" {{ old('lesson_type') == 'オンライン' ? 'selected' : '' }}>オンライン</option>
                </select>
                @error('lesson_type')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
            <input type="checkbox" name="supports_career_edu" id="supports_career_edu" value="1">
            <label for="supports_career_edu">キャリア教育</label>
            </div>
            
            <div>
                <input type="checkbox" name="japanease" id="japanease" value="1">
                <label for="japanease">国語</label>
            </div>
            
            <div>
                <input type="checkbox" name="math" id="math" value="1" >
                <label for="math">算数</label>
            </div>
            
            <div>
                <input type="checkbox" name="society" id="society" value="1">
                <label for="society">理科</label>
            </div>
            
            <div>
            <input type="checkbox" name="society" id="society" value="1" >
            <label for="society">社会</label>
            </div>
            
            <div>
            <input type="checkbox" name="science" id="science" value="1" >
            <label for="science">理科</label>
            </div>
            
            <div>
            <input type="checkbox" name="english" id="english" value="1">
            <label for="english">英語</label>
            </div>
            
            <div>
            <input type="checkbox" name="music" id="music" value="1">
            <label for="music">音楽</label>
            </div>
            
            <div>
            <input type="checkbox" name="art_and_crafts" id="art_and_crafts" value="1">
            <label for="art_and_crafts">図画工作</label>
            </div>
            
            <div>
            <input type="checkbox" name="home_economics" id="home_economics" value="1" >
            <label for="home_economics">家庭科</label>
            </div>
            <div>
            <input type="checkbox" name="physical_education" id="physical_education" value="1" >
            <label for="physical_education">保健体育</label>
            </div>
            
            <div>
            <input type="checkbox" name="life_skills" id="life_skills" value="1" >
            <label for="life_skills">生活科</label>
            </div>
            
            <div>
            <input type="checkbox" name="ethics" id="ethics" value="1">
            <label for="ethics">道徳</label>
            </div>
            
            <div>
            <input type="checkbox" name="integrated_studies" id="integrated_studies" value="1">
            <label for="integrated_studies">総合</label>
            </div>
            
            <div>
            <input type="checkbox" name="special_activities" id="special_activities" value="1">
            <label for="special_activities">特別活動</label>
            </div>
            
            <div>
            <input type="checkbox" name="club_activities" id="club_activities" value="1">
            <label for="club_activities">クラブ活動</label>
            </div>

            <div>
            <input type="checkbox" name="one" id="one" value="1" >
            <label for="six">1年生</label>
            </div>
            
            <div>
            <input type="checkbox" name="two" id="two" value="1" >
            <label for="six">2年生</label>
            </div>
            
            <div>
            <input type="checkbox" name="three" id="three" value="1" >
            <label for="six">3年生</label>
            </div>
            
            <div>
            <input type="checkbox" name="four" id="four" value="1" >
            <label for="six">4年生</label>
            </div>
            
            <div>
            <input type="checkbox" name="five" id="five" value="1">
            <label for="six">5年生</label>
            </div>
            
            <div>
            <input type="checkbox" name="six" id="six" value="1" >
            <label for="six">6年生</label>
            </div>
            
            <div>
                <input type="checkbox" name="seven" id="seven" value="1" >
                <label for="seven">特別支援</label>
            </div>

            <!-- ... 他のすべての項目も同様に... -->

            <div>
                <label for="started_date">開始可能日時:</label>
                <input type="date" name="started_date" id="started_date" value="started_date">
                @error('started_date')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="finished_date">終了日時:</label>
                <input type="date" name="finished_date" id="finished_date" value="finished_date">
                @error('finished_date')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">
                {{ __('授業の登録') }}
            </x-primary-button>
            </div>
        </form>

        {{-- <a href="{{ route('admin.dashboard') }}">
            <button class="text-left font-bold text-lg text-gray-dark dark:text-gray-200">adminメニューに戻る</button>
        </a> --}}
        </div>
      </div>
    </div>
  </div>






</x-admin-app-layout>