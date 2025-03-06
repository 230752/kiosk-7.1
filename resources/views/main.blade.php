@extends('layouts.app')

@section('title', 'main page')

@push('scripts')
 @vite('resources/js/inactivitytest.js')
@endpush


@section('content')
    <div class="flex flex-row w-full">
        <div class="w-56 h-full flex flex-col items-center bg-custom_gray">
            <div>
                <svg class="w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="black"
                        d="M16.21 16H7.79a1.76 1.76 0 0 1-1.59-1a2.1 2.1 0 0 1 .26-2.21l4.21-5.1a1.76 1.76 0 0 1 2.66 0l4.21 5.1A2.1 2.1 0 0 1 17.8 15a1.76 1.76 0 0 1-1.59 1M8 14h7.9L12 9.18Z" />
                </svg>
            </div>
            @foreach ($products['categories'] as $categorie)
                <div class="flex justify-center">
                    <button class="category-button flex flex-col items-center justify-center  h-56 w-56 bg-green "
                        onclick="filterProducts({{ $categorie['category_id'] }}, this)">
                        <img class="rounded-3xl w-44" src="{{ $categorie['image_url'] }}" alt="">
                        <h2 class=" text-custom_blue text-3xl text-center font-bold">{{ $categorie['name'] }}</h2>
                    </button>
                </div>
            @endforeach
            <div class="mt-auto">
                <svg class="w-16 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill="black"
                        d="M12 17a1.72 1.72 0 0 1-1.33-.64l-4.21-5.1a2.1 2.1 0 0 1-.26-2.21A1.76 1.76 0 0 1 7.79 8h8.42a1.76 1.76 0 0 1 1.59 1.05a2.1 2.1 0 0 1-.26 2.21l-4.21 5.1A1.72 1.72 0 0 1 12 17m-3.91-7L12 14.82L16 10Z" />
                </svg>
            </div>
        </div>
        <div class=" w-full align-items-center  justify-center pt-12 pb-12 gap-4" id="productContainer">
            <div class="  justify-center gap-4 w-full align-items-center flex flex-wrap">
                @foreach ($products['products'] as $product)
                    <div class="flex shadow-md justify-between flex-col h-128 w-64 rounded-xl bg-custom_green product"
                        data-category-id="{{ $product['category_id'] }}">
                        <a href="{{ route('add_product', ['product_id' => $product['product_id']]) }}">
                            <div class="relative  ">
                                <img class="rounded-tl-xl rounded-tr-xl" src="{{ $product['image_url'] }}" alt="food">
                                <button
                                    onclick="openModal('{{ $product['name'] }}', '{{ $product['description'] }}', '{{ $product['price'] }}', '{{ $product['kcal'] }}', '{{ $product['image_url'] }}')"
                                    id="module_open" class="absolute right-0 bottom-0 shadow-xl m-5 bg-white rounded-full z-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" class="w-16">
                                        <path fill="#ffb181"
                                            d="M5.5 6.5a.5.5 0 0 1 1 0V8a.5.5 0 0 1-1 0zM6 3.75a.75.75 0 1 0 0 1.5a.75.75 0 0 0 0-1.5M1 6a5 5 0 1 1 10 0A5 5 0 0 1 1 6m5-4a4 4 0 1 0 0 8a4 4 0 0 0 0-8" />
                                    </svg>
                                </button>
                            </div>
                            <div class=" flex flex-col justify-between p-5">
                                <h1 class=" h-24 font-bold text-3xl">{{ $product['name'] }}</h1>
                                <div class="flex text-xl justify-between pl-3 pt-3">
                                    <p>€{{ $product['price'] }}</p>
                                    <p>{{ $product['kcal'] }} kcal</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="myModal" onclick="closeModal()"
        class="fixed inset-0 z-30 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white gap-4 flex flex-row p-5 rounded-lg shadow-lg w-4/5">
            <div class="w-1/2"><img class="" id="modalImg" src="" alt="modalImg"></div>
            <div class="w-1/2 h-full">
                <h2 id="modalTitle" class="text-5xl font-bold mb-4">Eggcellent Wrap</h2>
                <p id="modalDescription" class="mb-4 text-3xl">A blend of acai, banana, and mixed berries topped with
                    granola, chia seeds, and coconut flakes.
                <p>
                <div class="flex justify-between text-3xl">
                    <p id="modalPrice">€12,40</p>
                    <p id="modalKcal">100 kcal</p>
                </div>
                <button onclick="closeModal()"
                    class="bg-custom_greens mt-10 text-white w-24 h-16px-4 py-2 rounded text-2xl">Close</button>
            </div>
        </div>
    </div>

@endsection



<script>
    function openModal(name, description, price, kcal, imageUrl) {
        document.getElementById('modalTitle').innerText = name;
        document.getElementById('modalDescription').innerText = description;
        document.getElementById('modalPrice').innerText = '€' + price;
        document.getElementById('modalKcal').innerText = kcal + ' kcal';
        document.getElementById('modalImg').src = imageUrl;
        document.getElementById('myModal').classList.remove('hidden');

    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }

    function filterProducts(categoryID, button) {
        const products = document.querySelectorAll('.product');
        const buttons = document.querySelectorAll('.category-button');

        buttons.forEach(btn => btn.classList.remove('bg-custom_orange'));

        // Add active class to the clicked button
        button.classList.add('bg-custom_orange');

        products.forEach(product => {
            if (product.getAttribute('data-category-id') == categoryID) {
                product.style.display = 'flex';

            } else {
                product.style.display = 'none';

            }
        })
    }
</script>