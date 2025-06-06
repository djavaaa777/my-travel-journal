@extends('layout')

@section('main_content')

    <section class="text-center mb-5">
        <h1 class="display-4 mb-3">💬 Reviews</h1>
        <p class="lead">See what other travelers think about Travel Journal</p>
    </section>

    {{-- Список отзывов --}}
    <section class="mb-5">
        <div class="row g-4">
            @foreach($reviews as $review)
                <div class="col-md-6">
                    <div class="p-4 bg-dark text-white rounded shadow-sm h-100">
                        <p class="mb-2">{{$review->review}}</p>
                        <footer class="text-white">{{$review->author}}</footer>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Форма оставить отзыв --}}
    @auth
        <section class="mt-5">
            <h2 class="mb-3">✍️ Leave Your Review</h2>
            <form method="POST" action="/review/add">
                @csrf
                <div class="mb-3">
                    <label for="review" class="form-label">Your thoughts</label>
                    <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Your Name</label>
                    <input type="text" name="author" id="author" class="form-control bg-dark text-white" value="John from Berlin" required>
                </div>
                <button type="submit" class="btn btn-warning">Submit Review</button>
            </form>
        </section>
    @else
        <section class="mt-5 text-center">
            <p class="text-white">Want to leave your own review? <a href="/login">Log in</a> or <a href="/register">create an account</a>.</p>
        </section>
    @endauth
@endsection
