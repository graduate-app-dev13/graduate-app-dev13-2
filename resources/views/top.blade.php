<!--top.blade.php-->
@vite('resources/css/app.css')
<x-app-layout>
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Title -->
  <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
    <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">SPOT TEACHER</h2>
    <p class="mt-1 text-gray-600 dark:text-gray-400">～会いたい大人に会えるプラットフォーム～</p>
  </div>
  <!-- End Title -->


  <div class="">
  @include('components.searchform')
  </div>

  <!-- Grid -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10 lg:mb-14">

      <!-- Card -->
        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition " href="">
      <div class="aspect-w-16 aspect-h-9">
        <img class="w-full object-cover rounded-t-xl" src="{{ asset('images/韓国1.jpg') }}" >
      </div>
      <div class="p-4 md:p-5">
        <p class="mt-2 text-xs uppercase text-gray-600 ">
          （公財）国際交流センター
        </p>
        <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 ">
          韓国文化について詳しく知ろう
        </h3>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
      <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition " href="">
      <div class="aspect-w-16 aspect-h-9">
        <img class="w-full object-cover rounded-t-xl" src="{{ asset('images/日本舞踊1.jpeg') }}" alt="Image Description">
      </div>
      <div class="p-4 md:p-5">
        <p class="mt-2 text-xs uppercase text-gray-600 ">
          (公社)日本舞踊協会
        </p>
        <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 ">
          プロの先生による日本舞踊体験授業
        </h3>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition " href="">
      <div class="aspect-w-16 aspect-h-9">
        <img class="w-full object-cover rounded-t-xl" src="{{ asset('images/性教育5.jpg') }}" alt="Image Description">
      </div>
      <div class="p-4 md:p-5">
        <p class="mt-2 text-xs uppercase text-gray-600 ">
          （一社）みっどらいふ共育協会
        </p>
        <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 ">
          あなたの命について考えてみよう
        </h3>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition " href="">
      <div class="aspect-w-16 aspect-h-9">
        <img class="w-full object-cover rounded-t-xl" src="{{ asset('images/林業1.jpg') }}" alt="Image Description">
      </div>
      <div class="p-4 md:p-5">
        <p class="mt-2 text-xs uppercase text-gray-600 ">
          宮村山業（株）
        </p>
        <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600">
          木育コーディネーターと行う廃材図工教室
        </h3>
      </div>
    </a>
    <!-- End Card -->
  </div>
  <!-- End Grid -->

  <!-- Card -->
  <div class="text-center">
    <div class="inline-block bg-white border shadow-sm rounded-full">
      <div class="py-3 px-4 flex items-center gap-x-2">
        <p class="text-gray-600">
　　　　　他の授業も見たい方はこちらへ
        </p>
        <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium" href="{{route('search.index')}}">
          詳細ページ
          <svg class="w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <!-- CSSスタイルの定義 -->
    <style>
        img {
            width: 300px; 
            height: 300px;
        }
    </style>
  <!-- End Card -->
</div>
<!-- End Card Blog -->
</x-app-layout>