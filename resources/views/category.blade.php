@extends ('layouts.app')

@section('title', 'category page')

@section('content')
    <div id="content-container" class="pt-12">
        <div id="option-btn-container">
            <button class="bg-white text-black text-4xl px-4 py-2 shadow-lg">Take away</button>
            <button class="bg-white text-black text-4xl px-4 py-2 shadow-lg">Eat in</button>
        </div>
        <div id="category-container" class="flex flex-row flex-wrap gap-10">
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
            <div id="" class="mt-10 border-none w-1/4 bg-white flex flex-col justify-end">
                <img src="{{asset('img/test.png')}}" alt="" class="w-full">
                <p class="text-4xl text-center p-4">Make it a Menu</p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <h1>footer</h1>
@endsection