@extends('layouts.app');

@section('title', 'main page')


@section('content')
<div class="flex pt-10">
    <div></div>
    <div class="flex shadow-md flex-col w-1/3 rounded-xl bg-custom_green">
        <div class="relative  ">
            <img class="rounded-tl-xl rounded-tr-xl"  src="https://gluwebdev.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F0216a67a-859e-4730-996f-5d51b31fa395%2F78d4c36c-7319-4aea-ba63-60c53fc92ee4%2FDALLE_2025-01-22_15.59.50_-_A_photorealistic_depiction_of_a_breakfast_wrap_named_Eggcellent_Wrap._It_features_a_whole-grain_wrap_cut_open_to_reveal_fluffy_scrambled_eggs_fresh.webp?table=block&id=18369bb8-092d-80e2-b494-dcb970410f61&spaceId=0216a67a-859e-4730-996f-5d51b31fa395&width=820&userId=&cache=v2" alt="food">
            <button class="absolute right-0 bottom-0 shadow-xl m-5 bg-white rounded-full z-40">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" class="w-16">
                    <path fill="#ffb181" d="M5.5 6.5a.5.5 0 0 1 1 0V8a.5.5 0 0 1-1 0zM6 3.75a.75.75 0 1 0 0 1.5a.75.75 0 0 0 0-1.5M1 6a5 5 0 1 1 10 0A5 5 0 0 1 1 6m5-4a4 4 0 1 0 0 8a4 4 0 0 0 0-8" />
                </svg>
            </button>
        </div>
        <div class="p-5">
            <h1 class=" h-24 font-bold text-4xl">Eggcellent Wrap</h1>
            <div class="flex text-xl justify-between plf-3 pt-3">
                <p>€12,40</p>
                <p>100 kcal</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')

@endsection