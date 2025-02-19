@extends('layouts.app');

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

@section('footer')
<div class="flex gap-6 p-5 shadow-top-lg h-22 items-center ">
    <button class="flex rounded-xl items-center gap-2 p-2 bg-custom_gray shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10">
            <path fill="currentColor" d="M10.5 5a1.5 1.5 0 0 0 .968 1.403c.35.085.714.085 1.063 0A1.5 1.5 0 1 0 10.5 5m-1.474.399a3 3 0 1 1 5.947 0l2.877-1.221a2.266 2.266 0 0 1 2.962 1.184a2.24 2.24 0 0 1-1.181 2.954l-3.628 1.54v3.717l1.874 5.444a2.25 2.25 0 1 1-4.255 1.465L12 15.772l-1.622 4.71a2.25 2.25 0 1 1-4.255-1.465l1.88-5.457V9.858L4.37 8.316a2.24 2.24 0 0 1-1.182-2.954A2.266 2.266 0 0 1 6.15 4.178zm1.996 2.438a4 4 0 0 1-.487-.168l-4.971-2.11a.766.766 0 0 0-1 .399a.74.74 0 0 0 .392.977L8.74 8.542c.462.196.761.649.761 1.15v3.91q0 .208-.068.406l-1.892 5.497a.75.75 0 1 0 1.418.488l2.108-6.123c.306-.888 1.56-.884 1.864 0l2.108 6.123a.75.75 0 1 0 1.419-.488l-1.888-5.483a1.3 1.3 0 0 1-.069-.407V9.691c0-.502.3-.955.762-1.151l3.78-1.605a.74.74 0 0 0 .391-.977a.766.766 0 0 0-.999-.4l-4.97 2.11q-.24.102-.489.17a3 3 0 0 1-1.955-.001" />
        </svg>
        <p class="text-xl">Accessibility</p>
    </button>
    <button class="flex rounded-xl items-center gap-2 p-2 bg-custom_gray shadow-lg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-10">
            <path fill="none" stroke="currentColor" stroke-width="2" d="M12 23c6.075 0 11-4.925 11-11S18.075 1 12 1S1 5.925 1 12s4.925 11 11 11Zm0 0c3 0 4-5 4-11S15 1 12 1S8 6 8 12s1 11 4 11ZM2 16h20M2 8h20" />
        </svg>
        <p class="text-xl">Change language(EN)</p>
    </button>
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