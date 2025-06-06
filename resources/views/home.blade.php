@extends('layout')

@section('main_content')
    <style>
    .place-card .card-img-top {
        transition: transform 0.3s ease;
    }

    .place-card .card:hover .card-img-top {
        transform: scale(1.1);
    }

    .place-card .card {
        overflow: hidden;
    }
    </style>

    <section class="text-center mb-5">
        <h1 class="display-4 mb-3">Where have you been lately?</h1>
        <p class="lead">Discover places shared by real travelers or add your own stories.</p>

        <input
            type="text"
            id="searchInput"
            class="form-control w-50 mx-auto"
            placeholder="Search destinations..."
        >
    </section>

    <h2 class="mb-4">🔥 Popular Destinations</h2>
    <div class="row g-4 mb-5" id="placesList">
        @foreach($places as $place)
            <div class="col-md-4 place-card">
                <div class="card bg-dark text-white h-100 shadow">
                    <img src="{{ $place->image }}" class="card-img-top" alt="{{ $place->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $place->title }}</h5>
                        <p class="card-text">{{ $place->description }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <h2 class="mb-4">🗣️ Traveler Reviews</h2>
    <div class="row g-4">
        @foreach($reviews as $review)
            <div class="col-md-6">
                <div class="p-4 bg-dark text-white rounded shadow-sm h-100">
                    <p class="mb-2">{{ $review->review }}</p>
                    <footer class="text-white">{{ $review->author }}</footer>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        const input = document.getElementById('searchInput');
        const cards = document.querySelectorAll('.place-card');

        input.addEventListener('input', () => {
            const value = input.value.toLowerCase();

            cards.forEach(card => {
                const title = card.querySelector('.card-title').innerText.toLowerCase();
                if (title.includes(value)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
@endsection
