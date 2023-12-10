<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問い合わせ</title>
</head>

問い合わせしてよろしいですか？


<div class="section">
    <form action="{{ route('inquiry.finish') }}" method="GET" class="text-left">
        @csrf
        <x-primary-button class="ml-3">問い合わせをする</x-primary-button>
    </form>
</div>

<div class="section">
    <form action="{{ route('inquiry.edit',$inquiry->id) }}" method="GET" class="text-left">
        @csrf
        <x-primary-button class="ml-3">内容の訂正をする</x-primary-button>
    </form>
</div>

<div class="section">
    <form action="{{ route('inquiry.destroy',$inquiry->id) }}" method="POST" class="text-left">
        @method('delete')
        @csrf
        <x-primary-button class="ml-3">問い合わせをやめる</x-primary-button>
    </form>
</div>