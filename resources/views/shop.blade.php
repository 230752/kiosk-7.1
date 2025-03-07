@php
use Illuminate\Support\Facades\Cookie;
$cookie = Cookie::get('meal_preference');
@endphp

@extends('layouts.app')

@php
$totalQuantity = Cookie::get('totalQuantity', 0);
$totalPrice = Cookie::get('totalPrice');
$cart = json_decode(Cookie::get('cart', '[]'), true);
$cookie = Cookie::get('meal_preference');

@endphp



@section('title', 'shop')

@push('scripts')
@vite('resources/js/inactivitytest.js')
@endpush

@section('header')
<div class="flex flex-row gap-10 pl-5">
    <a href="{{ route("main") }}" class="pt-20">
        <div class="bg-custom_orange rounded-full shadow-xl"><svg xmlns="http://www.w3.org/2000/svg" class="w-16 " viewBox="0 0 24 24">
                <path fill="black" d="M10.707 8.707a1 1 0 0 0-1.414-1.414l-4 4a1 1 0 0 0 0 1.414l4 4a1 1 0 0 0 1.414-1.414L8.414 13H18a1 1 0 1 0 0-2H8.414z" />
            </svg></div>
    </a>
    <p class=" pt-20 pb-20 text-6xl font-bold">My orders</p>
</div>
@endsection

@section('content')

<div class="pl-20 pr-20">
    <div class="shadow-xl m-auto p-7 rounded-lg">
        <div class="flex flex-row gap-4">
            <button id="eat-in-btn" onclick="setPreference('eat_in')" class=" {{ $cookie=='eat_in'? 'bg-custom_orange': 'bg-white' }} flex gap-3 min-w-44 shadow-lg flex-row border-2 border-custom_oranges p-3 items-center">
                <div id="eat-in-svg" class="flex border-2 {{ $cookie=='eat_in'? 'bg-custom_oranges': 'bg-white border-2 border-custom_oranges' }} s items-center justify-center w-10 h-10  rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white">
                        <path fill="currentColor" d="M9 16.2l-3.5-3.5l1.4-1.4l2.1 2.1l5.3-5.3l1.4 1.4z" />
                    </svg>
                </div>
                <p class="text-text_color text-2xl font-semibold">Eat in</p>
            </button>
            <button id="take-away-btn" onclick="setPreference('take_away')" class="{{ $cookie=='take_away'? 'bg-custom_orange': 'bg-white' }} flex gap-3 min-w-44 flex-row border-2 shadow-lg border-custom_oranges p-3 items-center">
                <div id="take-away-svg" class="{{ $cookie=='take_away'? 'bg-custom_oranges': 'bg-white border-2 border-custom_oranges' }} flex border-2 items-center justify-center w-10 h-10  rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="text-white">
                        <path fill="currentColor" d="M9 16.2l-3.5-3.5l1.4-1.4l2.1 2.1l5.3-5.3l1.4 1.4z" />
                    </svg>
                </div>
                <p class="text-text_color text-2xl font-semibold">Take away</p>
            </button>
        </div>
        <div class="pt-10 overflow-auto max-h-127 flex flex-col gap-10">
            @foreach ($cart as $product)

            <div class="flex flex-row gap-12">
                <div><img class="w-44"
                        src="{{ $product['image_url'] }}"
                        alt="product_img"></div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-row items-center gap-72">
                        <div>
                            <h2 class="text-5xl font-bold">{{ $product['name'] }}</h2>
                        </div>
                        <div>
                            <p class="text-4xl">€{{ $product['price'] }}</p>
                        </div>
                    </div>
                    <div class="flex flex-row gap-5">
                        <button
                            class="flex gap-2 border-4 min-w-64 p-1 justify-center border-black flex-row items-center">
                            <svg class="w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="#000"
                                    d="M7.616 20q-.672 0-1.144-.472T6 18.385V6H5V5h4v-.77h6V5h4v1h-1v12.385q0 .69-.462 1.153T16.384 20zM17 6H7v12.385q0 .269.173.442t.443.173h8.769q.23 0 .423-.192t.192-.424zM9.808 17h1V8h-1zm3.384 0h1V8h-1zM7 6v13z" />
                            </svg>
                            <p class="text-text_color font-bold text-3xl ">Delete</p>
                        </button>
                        <button
                            class="flex gap-2 p-1 border-4 min-w-64 justify-center border-black flex-row items-center">
                            <svg class="w-16 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="#000">
                                    <path d="M19 5H7V3h14v14h-2zM9 13v-2h2v2h2v2h-2v2H9v-2H7v-2z" />
                                    <path fill-rule="evenodd" d="M3 7h14v14H3zm2 2h10v10H5z" clip-rule="evenodd" />
                                </g>
                            </svg>
                            <p class="font-bold text-3xl text-text_color">Duplicate</p>
                        </button>
                    </div>

                </div>
            </div>

            @endforeach
        </div>
        <div class="flex justify-between border-t-2 border-gray-400 pt-5 pb-8 mt-8">
            <p class="text-5xl font-bold">Total</p>
            <p class="text-5xl font-bold">€{{ number_format($totalPrice, 2) }}</p>
        </div>
    </div>
    @endsection

    @section('footer')
    <div id="footer-content" class=" shadow-top-lg h-32 flex justify-between flex-row gap-8 items-center pl-4">
        <div id="access-btn-container" class="flex flex-row gap-8 h-18">
            <button class=" bg-white flex items-center shadow border border-gray-500 rounded p-4"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8">
                    <path fill="currentColor"
                        d="M10.5 5a1.5 1.5 0 0 0 .968 1.403c.35.085.714.085 1.063 0A1.5 1.5 0 1 0 10.5 5m-1.474.399a3 3 0 1 1 5.947 0l2.877-1.221a2.266 2.266 0 0 1 2.962 1.184a2.24 2.24 0 0 1-1.181 2.954l-3.628 1.54v3.717l1.874 5.444a2.25 2.25 0 1 1-4.255 1.465L12 15.772l-1.622 4.71a2.25 2.25 0 1 1-4.255-1.465l1.88-5.457V9.858L4.37 8.316a2.24 2.24 0 0 1-1.182-2.954A2.266 2.266 0 0 1 6.15 4.178zm1.996 2.438a4 4 0 0 1-.487-.168l-4.971-2.11a.766.766 0 0 0-1 .399a.74.74 0 0 0 .392.977L8.74 8.542c.462.196.761.649.761 1.15v3.91q0 .208-.068.406l-1.892 5.497a.75.75 0 1 0 1.418.488l2.108-6.123c.306-.888 1.56-.884 1.864 0l2.108 6.123a.75.75 0 1 0 1.419-.488l-1.888-5.483a1.3 1.3 0 0 1-.069-.407V9.691c0-.502.3-.955.762-1.151l3.78-1.605a.74.74 0 0 0 .391-.977a.766.766 0 0 0-.999-.4l-4.97 2.11q-.24.102-.489.17a3 3 0 0 1-1.955-.001" />
                </svg>
                <p class="text-xl"></p>
            </button>
            <button class=" bg-white flex items-center gap-2 shadow border border-gray-500 rounded p-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6">
                    <path fill="none" stroke="currentColor" stroke-width="2"
                        d="M12 23c6.075 0 11-4.925 11-11S18.075 1 12 1S1 5.925 1 12s4.925 11 11 11Zm0 0c3 0 4-5 4-11S15 1 12 1S8 6 8 12s1 11 4 11ZM2 16h20M2 8h20" />
                </svg>
                <p class="text-2xl font-normal">EN</p>
            </button>
        </div>
        <div id="shop-btn-container" class="pr-4 flex gap-8 items-center">
            <form action="{{ route('delete_preference') }}" method="POST">
                @csrf
                <button type="submit" class="border bg-white border-gray-500 rounded text-2xl pl-12 pr-12 p-4">Cancel order</button>
            </form>
            <a href="#"
                class="{{ $totalQuantity > 0 ? 'bg-green-500 text-white' : 'bg-gray-200' }} rounded-md p-6 text-3xl text-gray-400">Pay
                Order ({{ $totalQuantity }}) €{{ number_format($totalPrice, 2) }}</a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    function setPreference(preference) {
        fetch('{{ route('
                set_preference ') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        preference: preference
                    })
                })
            .then(response => response.json())
            .then(data => {

                const takeAwayBtn = document.getElementById('take-away-btn');
                const eatInBtn = document.getElementById('eat-in-btn');
                const eatSvg = document.getElementById('eat-in-svg');
                const takeSvg = document.getElementById('take-away-svg');

                if (preference === 'take_away') {
                    takeAwayBtn.classList.add('bg-custom_orange');
                    takeSvg.classList.add('bg-custom_oranges');

                    takeAwayBtn.classList.remove('bg-white');
                    takeSvg.classList.remove('bg-white');


                    eatInBtn.classList.remove('bg-custom_orange');
                    eatSvg.classList.remove('bg-custom_oranges');

                    eatInBtn.classList.add('bg-white');
                    eatSvg.classList.add('bg-white');

                } else if (preference === 'eat_in') {
                    eatInBtn.classList.add('bg-custom_orange');
                    eatSvg.classList.add('bg-custom_oranges');

                    eatInBtn.classList.remove('bg-white');
                    eatSvg.classList.remove('bg-white');


                    takeAwayBtn.classList.remove('bg-custom_orange');
                    takeSvg.classList.remove('bg-custom_oranges');

                    takeAwayBtn.classList.add('bg-white');
                    takeSvg.classList.add('bg-white');

                }
            })
            .catch(error => console.error('Error:', error));
    }


    document.addEventListener('DOMContentLoaded', function() {
        const preference = getCookie('meal_preference');
        if (preference) {
            setPreference(preference);
        }
    });


    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
</script>
@endpush