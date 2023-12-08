{{-- /resources/views/company/create.blade.php --}}
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('企業登録フォーム') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
                @include('common.errors')

                <form action="{{ route('company.store') }}" method="post">
                    @csrf
                    <div>
                        <label for="company_name">会社名:</label>
                        <input type="text" name="company_name" id="company_name" value="{{ old('company_name') }}">
                        @error('company_name')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="tel_number">電話番号:</label>
                        <input type="text" name="tel_number" id="tel_number" value="{{ old('tel_number') }}">
                        @error('tel_number')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="fax_number">FAX番号:</label>
                        <input type="text" name="fax_number" id="fax_number" value="{{ old('fax_number') }}">
                        @error('fax_number')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="email">企業メール:</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}">
                        @error('email')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="post_code">郵便番号:</label>
                        <input type="text" name="post_code" id="post_code" value="{{ old('post_code') }}">
                        @error('post_code')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="address">住所:</label>
                        <input type="text" name="address" id="address" value="{{ old('address') }}">
                        @error('address')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label for="hp_url">HP:</label>
                        <input type="url" name="hp_url" id="hp_url" value="{{ old('hp_url') }}">
                        @error('hp_url')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">企業情報を登録</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>