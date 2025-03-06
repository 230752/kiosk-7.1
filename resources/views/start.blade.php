@extends ('layouts.app')

@section('title', 'Start Page')

@push('scripts')
 @vite('resources/js/inactivitytest.js')
@endpush

@section('header')
<div class="flex justify-center p-4 pt-16">
    <img src="{{ asset('img/happy_logo.png') }}" alt="logo" class="w-1/6">
</div>
@endsection

@section('content')
<div class="flex justify-self-center h-full w-full pt-44 gap-24 flex-col p-5">
    <h1 class="flex justify-center text-center font-bold text-8xl">Where will you be eating today?</h1>
    <div class="flex gap-9">
        <!-- Eat in preference link -->
        <a href="{{ route("main") }}" onclick="setPreference('eat_in')" class="text-center rounded-xl shadow-lg bg-custom_orange p-10">
            <img src="{{ asset('img/very_happy.webp') }}" alt="">
            <p class="text-5xl font-bold font-renos text-text_color">Eat in</p>
        </a>
        
        <!-- Take away preference link -->
        <a href="{{ route("main") }}" onclick="setPreference('take_away')" class="text-center rounded-xl shadow-lg bg-custom_orange p-10">
            <img src="{{ asset('img/happy.webp') }}" alt="">
            <p class="text-5xl font-bold font-renos text-text_color">Take away</p>
        </a>
    </div>
</div>
@endsection

@section('footer')
<div class="flex gap-6 p-5 shadow-top-lg h-22 items-center ">
    <button class="flex items-center gap-2 p-2 bg-custom_gray shadow-lg">
        <p class="text-xl">Accessibility</p>
    </button>
    <button class="flex items-center gap-2 p-2 bg-custom_gray shadow-lg">
        <p class="text-xl">Change language(EN)</p>
    </button>
</div>
@endsection

@push('scripts')
<script>
    function setPreference(preference) {
        // Send AJAX request to update the cookie
        fetch('{{ route('set_preference') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ preference: preference })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Redirect to the main page after setting the preference
                window.location.href = '{{ route('main') }}';
            } else {
                console.error('Error setting preference:', data);
            }
        })
        .catch(error => console.error('Error:', error));
    }
</script>
@endpush