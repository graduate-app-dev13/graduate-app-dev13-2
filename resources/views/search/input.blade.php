<!-- resources/views/search/input.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('検索') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
                    @include('common.errors')

                    <form class="mb-6" action="{{ route('search.index') }}" method="GET">
                        @csrf

                        <!--<div class="flex flex-col mb-4">-->
                        <!--  <x-input-label for="keyword" :value="__('キーワード')" />-->
                        <!--  <x-text-input id="keyword" class="block mt-1 w-full" type="text" name="keyword" :value="old('keyword')" autofocus />-->
                        <!--</div>-->

                        <div class="flex flex-col mb-4">
                            <x-input-label for="grade" :value="__('学年')" />
                            <select id="grade" class="block mt-1 w-full" name="grade">
                                <option value="">---</option>
                                <option value="one">１年生</option>
                                <option value="two">２年生</option>
                                <option value="three">３年生</option>
                                <option value="four">４年生</option>
                                <option value="five">５年生</option>
                                <option value="six">６年生</option>
                                <option value="seven">特別支援学級</option>
                            </select>
                        </div>

                        <div class="flex flex-col mb-4">
                            <x-input-label for="subject" :value="__('教科')" />
                            <select id="subject" class="block mt-1 w-full" name="subject">
                                <option value="">---</option>
                                <option value="japanease">国語</option>
                                <option value="math">算数</option>
                                <option value="society">社会</option>
                                <option value="science">理科</option>
                                <option value="english">外国語</option>
                                <option value="music">音楽</option>
                                <option value="art_and_crafts">図工</option>
                                <option value="home_economics">家庭科</option>
                                <option value="physical_education">体育</option>
                                <option value="life_skills">生活科</option>
                                　<option value="ethics">道徳</option>
                                <option value="integrated_studies">総合</option>
                                <option value="special_activities">特別活動</option>
                                <option value="club_activities">クラブ活動</option>
                            </select>
                        </div>

                        <div class="flex flex-col mb-4">

                            <x-input-label for="grade" :value="__('教育')" />
                            <select id="education" class="block mt-1 w-full" name="education">
                                <option value="">---</option>
                                <option value="sdgs_edu">SDGs教育</option>
                                <option value="info_edu">情報教育</option>
                                <option value="ict_edu">ICT教育</option>
                                <option value="copyright_edu">著作権教育</option>
                                <option value="net_literacy_edu">ネットリテラシー教育</option>
                                <option value="net_moral_edu">ネットモラル教育</option>
                                <option value="programming_edu">プログラミング教育</option>
                                <option value="career_edu">キャリア教育</option>
                                <option value="entrepreneurship_edu">起業家精神教育</option>
                                <option value="financial_edu">金融教育</option>
                                <option value="food_edu">食育</option>
                                <option value="health_edu">健康教育</option>
                                <option value="disaster_edu">防災教育</option>
                                <option value="lgbt_edu">LGBT教育</option>
                                <option value="gender_diversity_edu">「性の多様性」教育</option>
                                <option value="sexual_violence_edu">性暴力に関する教育</option>
                                <option value="sexuality_edu">性教育</option>
                                <option value="cancer_edu">癌教育</option>
                                <option value="foreign_language_edu">外国語教育</option>
                                <option value="international_understanding_edu">国際理解教育</option>
                                <option value="volunteer_edu">ボランティア教育</option>
                                <option value="multicultural_coexistence_edu">多文化共生教育</option>
                                <option value="peace_edu">平和教育</option>
                                <option value="consumer_edu">消費者教育</option>
                                <option value="local_edu">郷土教育</option>
                                <option value="human_rights_edu">人権教育</option>
                                <option value="sovereign_edu">主権者教育</option>
                                <option value="school_link_edu">小中連携教育</option>
                                <option value="art_edu">芸術教育</option>
                                <option value="special_support_edu">特別支援教育</option>
                                <option value="universal_design_edu">ユニバーサルデザイン教育</option>
                                <option value="inclusive_edu">インクルーシブ教育</option>
                                <option value="environment_edu">環境教育</option>
                                <option value="safety_edu">安全教育</option>
                                <option value="traffic_safety_edu">交通安全教育</option>
                                <option value="nature_experience_edu">自然体験教育</option>
                                <option value="welfare_edu">福祉教育</option>
                                <option value="normative_consciousness_edu">規範意識教育</option>
                                <option value="moral_edu">道徳教育</option>
                                <option value="mind_edu">心の教育</option>
                                <option value="museum_edu">博物館教育</option>
                                <option value="animal_protection_edu">動物愛護教育</option>
                                <option value="library_use_edu">図書館活用教育</option>
                                <option value="nie_edu">ＮＩＥ教育</option>
                                <option value="posting_edu">掲示教育</option>
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-3">
                                {{ __('授業検索') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
