<!--resourses/views/reserve/input.blade.php-->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('予約入力フォーム') }}
        </h2>
    </x-slot>
  
  <div class="mx-auto p-4 flex justify-center items-center min-h-screen">
            <form action="{{ route('reserve.store')}}" method="POST" class="w-full sm:max-w-3xl">
                <!----------------------------------------------------------------------->
                @csrf
                @include('common.errors')
                @isset($lesson)
                <!--  授業情報 -->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mb-2 bg-">授業情報</h2>
                    <label for="" class="block mb-2 bg-amber-100">授業名</label>
                    <p id="lesson_name" name="lesson_name" class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_name}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="" class="block mb-2 bg-amber-100">授業内容</label>
                    <p name="school_name" class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_detail}}</p>
                </div>
                 
                <div class="mb-4">
                    <label for="" class="block mb-2 bg-amber-100">授業形式</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$lesson->lesson_type}}</p>
                </div>
                
                <div class="mb-4">
                    <label for="" class="block mb-2 bg-amber-100">予約可能期間</label>
                    <p class="border p-2 w-full sm:w-2/1">{{ $lesson->started_date }}から{{ $lesson->finished_date }}</p>
                </div>
                
                @endisset
                <div class="mb-4">
                    <label  class="block mb-2 bg-amber-100">学校名</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$school->school_name}}小学校</p>
                </div>
                
                <div class="mb-4">
                    <label for="teacher_name" class="block mb-2 bg-amber-100">担当教員名</label>
                    <p  class="border p-2 w-full sm:w-2/1">{{$user->name}}</p>
                </div>

    
    
    <h2 class="text-xl font-semibold mt-2">希望情報</h2>
                <div class="grid grid-cols-4 gap-6 md:grid-cols-8 lg:grid-cols-12 mb-2">
                <!-- 学年入力 -->
                <div class="col-span-4 lg:col-span-3">
                    <div class="w-full">
                        <x-input-label for="graduate" :value="__('学年')" />
                        <select id="graduate" class="w-full" name="graduate" required autofocus>
                            <option value="" {{ request('graduate') == '' ? 'selected' : '' }}>---</option>
                            <option value="1年生">１年生</option>
                            <option value="2年生">２年生</option>
                            <option value="3年生">３年生</option>
                            <option value="4年生">４年生</option>
                            <option value="5年生">５年生</option>
                            <option value="6年生">６年生</option>
                            <option value="特別支援">特別支援学級</option>
                        </select>
                    </div>
                </div>
                <!-- 教科入力 -->
                <div class="col-span-4 lg:col-span-3">
                    <div class="w-full">
                        <x-input-label for="subject" :value="__('教科')" />
                        <select id="subject" class="block w-full" name="subject" required autofocus>
                            <option value="" {{ request('subject') == '' ? 'selected' : '' }}>---</option>
                            <option value="国語" {{ request('subject') == 'japanease' ? 'selected' : '' }}>国語</option>
                            <option value="算数" {{ request('subject') == 'math' ? 'selected' : '' }}>算数</option>
                            <option value="社会" {{ request('subject') == 'society' ? 'selected' : '' }}>社会</option>
                            <option value="理科" {{ request('subject') == 'science' ? 'selected' : '' }}>理科</option>
                            <option value="外国語" {{ request('subject') == 'english' ? 'selected' : '' }}>外国語</option>
                            <option value="音楽" {{ request('subject') == 'music' ? 'selected' : '' }}>音楽</option>
                            <option value="図工" {{ request('subject') == 'art_and_crafts' ? 'selected' : '' }}>図工</option>
                            <option value="家庭科" {{ request('subject') == 'home_economics' ? 'selected' : '' }}>家庭科</option>
                            <option value="体育" {{ request('subject') == 'physical_education' ? 'selected' : '' }}>体育</option>
                            <option value="生活科" {{ request('subject') == 'life_skills' ? 'selected' : '' }}>生活科</option>
                            <option value="道徳" {{ request('subject') == 'ethics' ? 'selected' : '' }}>道徳</option>
                            <option value="総合" {{ request('subject') == 'integrated_studies' ? 'selected' : '' }}>総合</option>
                            <option value="特別活動" {{ request('subject') == 'special_activities' ? 'selected' : '' }}>特別活動</option>
                            <option value="クラブ活動" {{ request('subject') == 'club_activities' ? 'selected' : '' }}>クラブ活動</option>
                        </select>
                    </div>
                </div>
                <!-- 人数入力 -->
                <div class="col-span-4 lg:col-span-3">
                    <div class="w-full">
                        <x-input-label for="number_student" :value="__('人数')" class="w-full"/>
                        <input type="text" name="number_student" class="border p-2 w-full" required autofocus/>
                    </div>
                </div>
            </div>
                
                <!--授業希望日-->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold mt-2">授業希望日</h2>
                
                    <!--第１希望-->
                    <div class="flex flex-wrap justify-between">
                        <div class="w-full sm:w-1/3">
                            <label for="first_choice_date" class="block mt-2 mb-2">第１授業希望日</label>
                            <input type="date" name="first_choice_date" class="border p-2 w-full" required autofocus/>
                        </div>

                        <div class="w-full sm:w-1/3">
                            <label for="first_choice_start_time" class="block mt-2 mb-2">希望開始時間</label>
                            <input type="time" name="first_choice_start_time"  min="08:00" max="16:00" value="08:00" class="border p-2 w-full" required autofocus/>
                        </div>

                        <div class="w-full sm:w-1/3">
                            <label for="first_choice_end_time" class="block mt-2 mb-2">希望終了時間</label>
                            <input type="time" name="first_choice_end_time"  min="08:00" max="16:00" value="15:00" class="border p-2 w-full" required autofocus/>
                        </div>
                    </div><!--第１希望-->

                    <!--第２希望-->
                    <div class="flex flex-wrap justify-between">
                        <div class="w-full sm:w-1/3">
                            <label for="second_choice_date" class="block mt-2 mb-2">第２授業希望日</label>
                            <input type="date" name="second_choice_date" class="border p-2 w-full" required autofocus/>
                        </div>
                    
                        <div class="w-full sm:w-1/3">
                            <label for="second_choice_start_time" class="block mt-2 mb-2">希望開始時間</label>
                            <input type="time" id="timeInput" name="second_choice_start_time" min="08:00" max="16:00" value="08:00" class="border p-2 w-full" required autofocus/>
                        </div>
                    
                        <div class="w-full sm:w-1/3">
                            <label for="second_choice_end_time" class="block mt-2 mb-2">希望終了時間</label>
                            <input type="time" name="second_choice_end_time" min="08:00" max="16:00" value="15:00" class="border p-2 w-full" required autofocus/>
                        </div>
                    </div><!--第２希望-->
                    
                    <!--第３希望-->
                   <div class="flex flex-wrap justify-between">
                        <div class="w-full sm:w-1/3">
                            <label for="third_choice_date" class="block mt-2 mb-2">第３授業希望日</label>
                            <input type="date" name="third_choice_date" class="border p-2 w-full" required autofocus/>
                        </div>

                        <div class="w-full sm:w-1/3">
                            <label for="third_choice_start_time" class="block mt-2 mb-2">希望開始時間</label>
                            <input type="time" name="third_choice_start_time" min="08:00" max="16:00" value="08:00" class="border p-2 w-full" required autofocus/>
                        </div>
                    
                        <div class="w-full sm:w-1/3">
                            <label for="third_choice_end_time" class="block mt-2 mb-2">希望終了時間</label>
                            <input type="time" name="third_choice_end_time" min="08:00" max="16:00" value="15:00"class="border p-2 w-full" required autofocus/>
                        </div>
                    </div><!--第３希望-->
                </div><!--授業希望日-->
                
                <script>
                    document.getElementById('timeInput').addEventListener('change', function() {
                            const value = this.value.split(":");
                            const hours = parseInt(value[0], 10);
                            let minutes = parseInt(value[1], 10);
                            
                            // 5の倍数になるように分を丸めます
                            minutes = Math.round(minutes / 5) * 5;
                            
                            // 分が60になった場合の処理
                            if (minutes === 60) {
                                hours += 1;
                                minutes = 0;
                            }
                            
                            // 値を再設定します
                            this.value = (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes;
                        });
                </script>
                
                <!-- 情報 -->
            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}"/>

            <!-- 送信ボタン 右よりにしたい-->
            <div class="mt-6 text-right">
                <x-primary-button type="submit" class="bg-yellow-200 px-4 py-2 rounded hover:bg-yeloow-500 ml-auto mr-auto sm:w-1/5">情報を確定</x-primary-button>
            </div>

        </form>
    </div>
</x-app-layout>