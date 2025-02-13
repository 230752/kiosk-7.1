@extends ('layouts.app')

@section('title', 'start page')
<div class="flex w-full justify-center">
<img src="{{asset('img/happy_logo.png')}}" alt="logo" class="w-1/6">
</div>
@section('content')
<div class="flex h-full items-center gap-24 justify-center flex-col">
    <h1 class="flex justify-center text-center  font-bold text-8xl">Where will you be eating today?</h1>
    <div class="flex justify-center gap-16">
        <a href="{{ route('category') }}" onclick="" class="text-center shadow-lg bg-custom_gray p-10">
            <img src="{{ asset('img/very_happy.webp') }}" alt="">
            <p class="text-6xl font-bold">Eat in</p>
        </a>
        <a href="{{ route('category') }}" onclick="" class="text-center shadow-lg bg-custom_gray p-10">
            <img src="{{ asset('img/happy.webp') }}" alt="">
            <p class="text-6xl font-bold">Take away</p>
        </a>
    </div>
</div>
@endsection

@section('footer')
<button></button>
<button></button>
@endsection