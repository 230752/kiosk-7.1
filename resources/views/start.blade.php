@extends ('layouts.app')

@section('title', 'start page')

@section('header')
<div class="flex justify-center p-4 pt-16">
    <img src="{{asset('img/happy_logo.png')}}" alt="logo" class="w-1/6">
</div>
@endsection

@section('content')
<div class="flex justify-self-center h-full w-full pt-44 gap-24 flex-col p-5">
    <h1 class="flex justify-center text-center font-bold text-8xl">Where will you be eating today?</h1>
    <div class="flex gap-9">
        <a href="{{ route('category') }}" onclick="" class="text-center rounded-xl shadow-lg bg-custom_orange p-10">
            <img src="{{ asset('img/very_happy.webp') }}" alt="">
            <p class="text-5xl font-bold font-renos text-text_color">Eat in</p>
        </a>
        <a href="{{ route('category') }}" onclick="" class="text-center rounded-xl shadow-lg bg-custom_orange p-10">
            <img src="{{ asset('img/happy.webp') }}" alt="">
            <p class="text-5xl font-bold font-renos text-text_color">Take away</p>
        </a>
    </div>
</div>
@endsection

@section('footer')
<div class="flex gap-6 p-5 shadow-top-lg h-22 items-center ">
    <button class="flex items-center gap-2 p-2 bg-custom_gray shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12">
            <path fill="currentColor" d="M10.5 5a1.5 1.5 0 0 0 .968 1.403c.35.085.714.085 1.063 0A1.5 1.5 0 1 0 10.5 5m-1.474.399a3 3 0 1 1 5.947 0l2.877-1.221a2.266 2.266 0 0 1 2.962 1.184a2.24 2.24 0 0 1-1.181 2.954l-3.628 1.54v3.717l1.874 5.444a2.25 2.25 0 1 1-4.255 1.465L12 15.772l-1.622 4.71a2.25 2.25 0 1 1-4.255-1.465l1.88-5.457V9.858L4.37 8.316a2.24 2.24 0 0 1-1.182-2.954A2.266 2.266 0 0 1 6.15 4.178zm1.996 2.438a4 4 0 0 1-.487-.168l-4.971-2.11a.766.766 0 0 0-1 .399a.74.74 0 0 0 .392.977L8.74 8.542c.462.196.761.649.761 1.15v3.91q0 .208-.068.406l-1.892 5.497a.75.75 0 1 0 1.418.488l2.108-6.123c.306-.888 1.56-.884 1.864 0l2.108 6.123a.75.75 0 1 0 1.419-.488l-1.888-5.483a1.3 1.3 0 0 1-.069-.407V9.691c0-.502.3-.955.762-1.151l3.78-1.605a.74.74 0 0 0 .391-.977a.766.766 0 0 0-.999-.4l-4.97 2.11q-.24.102-.489.17a3 3 0 0 1-1.955-.001" />
        </svg>
        <p class="text-xl">Accessibility</p>
    </button>
    <button class="flex items-center gap-2 p-2 bg-custom_gray shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-12">
            <path fill="none" stroke="currentColor" stroke-width="2" d="M12 23c6.075 0 11-4.925 11-11S18.075 1 12 1S1 5.925 1 12s4.925 11 11 11Zm0 0c3 0 4-5 4-11S15 1 12 1S8 6 8 12s1 11 4 11ZM2 16h20M2 8h20" />
        </svg>
        <p class="text-xl">Change language(EN)</p>
    </button>
</div>
@endsection