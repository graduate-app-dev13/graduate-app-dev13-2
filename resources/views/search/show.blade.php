<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-grey-200">
                    <table class="text-center w-full border-collapse">
                        <tbody>
                            <!--フォントサイズを大きく真ん中に揃える-->
                            <p class="text-2xl text-center">{{ $lesson->lesson_name }}</p>
                            <!--<img src="{{asset($lesson->image ?? null )}}" class="w-auto h-20 max-w-full max-h-full m-auto " />-->

                            <div class="relative w-full glide-09">

                                <!-- Component: Carousel with controls outside -->
                                <div class="relative w-full glide-04">
                                    <!-- Slides -->
                                    <div class="overflow-hidden" data-glide-el="track">
                                        <ul
                                            class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">

                                            @isset($lesson->image_path_one)
                                            <li><img src="{{ asset($lesson->image_path_one) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_two)
                                            <li><img src="{{ asset($lesson->image_path_two) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_three)
                                            <li><img src="{{ asset($lesson->image_path_three) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_four)
                                            <li><img src="{{ asset($lesson->image_path_four) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_five)
                                            <li><img src="{{ asset($lesson->image_path_five) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_six)
                                            <li><img src="{{ asset($lesson->image_path_six) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_seven)
                                            <li><img src="{{ asset($lesson->image_path_seven) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_eight)
                                            <li><img src="{{ asset($lesson->image_path_eight) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_nine)
                                            <li><img src="{{ asset($lesson->image_path_nine) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_ten)
                                            <li><img src="{{ asset($lesson->image_path_ten) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset
                                            @isset($lesson->image_path_eleven)
                                            <li><img src="{{ asset($lesson->image_path_eleven) }}"
                                                    class="w-200 h-200 object-cover m-auto" /></li>
                                            @endisset

                                        </ul>
                                    </div>
                                    <!-- Controls -->
                                    <div class="flex items-center justify-center w-full gap-2 p-4"
                                        data-glide-el="controls">
                                        <button
                                            class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                                            data-glide-dir="<" aria-label="prev slide">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <title>prev slide</title>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                            </svg>
                                        </button>
                                        <button
                                            class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                                            data-glide-dir=">" aria-label="next slide">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <title>next slide</title>
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>


                                <div class="flex">
                                    <div class="">

                                        <!--授業内容のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">会社名</p>
                                        <p class="mt-4">{{ $lesson->company->company_name }}</p>
                                        <!--授業内容のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">授業詳細</p>
                                        <p class="mt-4">{{ $lesson->lesson_detail }}</p>

                                        <!--授業形式のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">学年</p>
                                        <p class="mt-4">
                                            @if($lesson->one) <span>1年生 </span>@endif
                                            @if($lesson->two) <span>2年生 </span>@endif
                                            @if($lesson->three) <span>3年生 </span>@endif
                                            @if($lesson->four) <span>4年生 </span>@endif
                                            @if($lesson->five) <span>5年生 </span>@endif
                                            @if($lesson->six) <span>6年生 </span>@endif
                                            @if($lesson->seven) <span>特別支援 </span>@endif
                                        </p>

                                        <!--対応可能教科のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">教科</p>
                                        <p class="mt-4">
                                            @if($lesson->japanease) <span>国語</span>@endif
                                            @if($lesson->math) <span>算数 </span>@endif
                                            @if($lesson->society) <span>社会 </span>@endif
                                            @if($lesson->science) <span>理科 </span>@endif
                                            @if($lesson->english) <span>外国語 </span>@endif
                                            @if($lesson->music) <span>音楽 </span>@endif
                                            @if($lesson->art_and_crafts) <span>図工 </span>@endif
                                            @if($lesson->home_economics) <span>家庭科 </span>@endif
                                            @if($lesson->physical_education) <span>体育 </span>@endif
                                            @if($lesson->life_skills) <span>生活 </span>@endif
                                            @if($lesson->ethics) <span>道徳 </span>@endif
                                            @if($lesson->integrated_studies) <span>総合 </span>@endif
                                            @if($lesson->special_activities) <span>特別活動 </span>@endif
                                            @if($lesson->club_activities) <span>クラブ活動 </span>@endif
                                        </p>

                                        <!--対応可能教育のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">教育</p>
                                        <p class="mt-4">
                                            @php
                                                $displayed = false;
                                            @endphp

                                            @foreach($educationTypes as $key => $label)
                                                @if($lesson->$key)
                                                    <span class="label">{{ $label }}</span>
                                                    @php $displayed = true; @endphp
                                                @endif
                                            @endforeach

                                            @if(!$displayed)
                                                <span class="label">なし</span>
                                            @endif
                                        </p>

                                        <!--授業形式のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">授業形式</p>
                                        <p class="mt-4">{{ $lesson->lesson_type }}</p>
                                        <!--予約可能期間のラベル-->
                                        <p class="mt-4 bg-amber-50 text-lg">授業の実施期間</p>
                                        <p class="mt-4">{{ $lesson->started_date }}から{{ $lesson->finished_date }}の間</p>
                                    </div>
                                </div>


                                <!-- 予約と問い合わせのリンク -->
                                <div class="flex justify-end mt-4">
                                    <a href="{{ url()->previous() }}" class="hover:text-blue-700 focus:text-blue-700">
                                        <x-secondary-button class="ml-3">
                                            <h3
                                                class="text-left font-bold text-lg text-gray-500 transition duration-300 ease-in-out">
                                                戻る
                                            </h3>
                                        </x-secondary-button>
                                    </a>
                                    <a href="{{ route('reserve.reserve-input', $lesson->id) }}"
                                        class="hover:text-blue-700 focus:text-blue-700">
                                        <x-secondary-button class="ml-3">
                                            <h3
                                                class="text-left font-bold text-lg text-blue-500 transition duration-300 ease-in-out">
                                                授業予約
                                            </h3>
                                        </x-secondary-button>
                                    </a>
                                    <a href="{{ route('inquiry.input', $lesson->id) }}"
                                        class="hover:text-red-700 focus:text-red-700">
                                        <x-secondary-button class="ml-3">
                                            <h3
                                                class="text-left font-bold text-lg text-red-500 transition duration-300 ease-in-out">
                                                問い合わせ
                                            </h3>
                                        </x-secondary-button>
                                    </a>
                                    <!-- あとでみる 状態で条件分岐 -->
                                    @if($lesson->users()->where('user_id', Auth::id())->exists())
                                    <!-- unfavorite ボタン -->
                                    <form action="{{ route('unwatchlater',$lesson) }}" method="POST" class="text-left">
                                        @csrf
                                        <x-secondary-button class="ml-3">
                                            あとでみる
                                            <svg class="h-6 w-6 text-red-500" fill="red" viewBox="0 0 24 24"
                                                stroke="red">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                            {{ $lesson->users()->count() }}
                                        </x-secondary-button>
                                    </form>
                                    @else
                                    <!-- favorite ボタン -->
                                    <form action="{{ route('watchlater',$lesson) }}" method="POST" class="text-left">
                                        @csrf
                                        <x-secondary-button class="ml-3">
                                            あとでみる
                                            <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24"
                                                stroke="gray">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                            </svg>
                                            {{ $lesson->users()->count() }}
                                        </x-secondary-button>
                                    </form>
                                    @endif
                                </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
    var glide04 = new Glide('.glide-04', {
				type: 'carousel',
				focusAt: 'center',
				perView: 3,
				autoplay: 3500,
				animationDuration: 700,
				gap: 24,
				classes: {
						activeNav: '[&>*]:bg-slate-700',
				},
                breakpoints: {
                            1024: {perView: 2},
                            640: {perView: 1}
                            },
		});

		glide04.mount();
</script>
<!-- End Carousel with controls outside -->
