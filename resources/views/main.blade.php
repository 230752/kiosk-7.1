@extends('layouts.app')

@section('title', 'main page')


@section('content')
<div class="flex">
    <div class="w-64 h-full flex flex-col items-center bg-custom_gray">
        <div>
            <svg class="w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="black" d="M16.21 16H7.79a1.76 1.76 0 0 1-1.59-1a2.1 2.1 0 0 1 .26-2.21l4.21-5.1a1.76 1.76 0 0 1 2.66 0l4.21 5.1A2.1 2.1 0 0 1 17.8 15a1.76 1.76 0 0 1-1.59 1M8 14h7.9L12 9.18Z" />
            </svg>
        </div>
        <div class="flex justify-center">
            <button class=" flex flex-col items-center justify-center  h-64 w-64 bg-green bg-custom_orange" onclick="">
                <img class="rounded-3xl w-44" src="https://gluwebdev.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F0216a67a-859e-4730-996f-5d51b31fa395%2Fef1423bc-f4bd-4fbf-82d1-6a76c31529be%2FDALLE_2025-01-22_15.59.38_-_A_sleek_and_modern_logo_design_for_a_brand_emphasizing_speed_health_and_convenience._The_logo_features_vibrant_green_and_orange_color_palette_to_sym.webp?table=block&id=18369bb8-092d-801c-9a89-e5d4dc678f9d&spaceId=0216a67a-859e-4730-996f-5d51b31fa395&width=820&userId=&cache=v2" alt="">
                <h2 class=" text-custom_blue text-4xl text-center font-bold">Test</h2>
            </button>
        </div>
        <div class=" mt-auto">
            <svg class="w-16 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="black" d="M12 17a1.72 1.72 0 0 1-1.33-.64l-4.21-5.1a2.1 2.1 0 0 1-.26-2.21A1.76 1.76 0 0 1 7.79 8h8.42a1.76 1.76 0 0 1 1.59 1.05a2.1 2.1 0 0 1-.26 2.21l-4.21 5.1A1.72 1.72 0 0 1 12 17m-3.91-7L12 14.82L16 10Z" />
            </svg>
        </div>
    </div>
    <div class="p-10">
        <div class="flex shadow-md flex-col w-1/3 rounded-xl bg-custom_green">
            <div class="relative  ">
                <img class="rounded-tl-xl rounded-tr-xl" src="https://gluwebdev.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F0216a67a-859e-4730-996f-5d51b31fa395%2F78d4c36c-7319-4aea-ba63-60c53fc92ee4%2FDALLE_2025-01-22_15.59.50_-_A_photorealistic_depiction_of_a_breakfast_wrap_named_Eggcellent_Wrap._It_features_a_whole-grain_wrap_cut_open_to_reveal_fluffy_scrambled_eggs_fresh.webp?table=block&id=18369bb8-092d-80e2-b494-dcb970410f61&spaceId=0216a67a-859e-4730-996f-5d51b31fa395&width=820&userId=&cache=v2" alt="food">
                <button onclick="openModal()" id="module_open" class="absolute right-0 bottom-0 shadow-xl m-5 bg-white rounded-full z-40">
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
</div>

<div id="myModal" onclick="closeModal()" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white gap-4 flex flex-row p-5 rounded-lg shadow-lg w-4/5">
        <div class="w-1/2"><img class="" src="https://gluwebdev.notion.site/image/https%3A%2F%2Fprod-files-secure.s3.us-west-2.amazonaws.com%2F0216a67a-859e-4730-996f-5d51b31fa395%2F78d4c36c-7319-4aea-ba63-60c53fc92ee4%2FDALLE_2025-01-22_15.59.50_-_A_photorealistic_depiction_of_a_breakfast_wrap_named_Eggcellent_Wrap._It_features_a_whole-grain_wrap_cut_open_to_reveal_fluffy_scrambled_eggs_fresh.webp?table=block&id=18369bb8-092d-80e2-b494-dcb970410f61&spaceId=0216a67a-859e-4730-996f-5d51b31fa395&width=820&userId=&cache=v2" alt="modalImg"></div>
        <div class="w-1/2 h-full">
        <h2 class="text-5xl font-bold mb-4">Eggcellent Wrap</h2>
        <p class="mb-4 text-3xl">A blend of acai, banana, and mixed berries topped with granola, chia seeds, and coconut flakes.<p>
        <div class="flex justify-between text-3xl">
            <p>€12,40</p>
            <p>100 kcal</p>
        </div>
        <button onclick="closeModal()" class="bg-custom_greens mt-10 text-white w-24 h-16px-4 py-2 rounded text-2xl">Close</button>
        </div>
    </div>
</div>

@endsection



<script>
function openModal() {
    document.getElementById('myModal').classList.remove('hidden');
    console.log("werkt");
}

function closeModal() {
    document.getElementById('myModal').classList.add('hidden');
}

</script>