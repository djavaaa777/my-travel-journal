@extends('layout')

@section('main_content')
<div class="container">
    <h2 class="mb-4 text-warning">👋 Welcome to your Dashboard!</h2>

    <div class="alert alert-secondary border-0 text-light bg-gradient bg-dark">
        <strong>You're logged in!</strong> Here you can manage your travel content, add new places, and inspire others with your stories.
    </div>
    <div class="bg-dark text-white p-4 rounded shadow-sm mb-5">
        <p class="mb-3 fs-5 text-light">
            ✨ Here you can manage your travel stories, view saved destinations and update your profile.
        </p>

        <div class="mt-3 d-flex flex-wrap gap-2">
            <a href="/review" class="btn btn-warning fw-semibold">
                📝 Write a Review
            </a>
            <a href="/about" class="btn btn-outline-light fw-semibold">
                📘 About the Project
            </a>
        </div>
    </div>

    <div class="card bg-dark text-white shadow">
        <div class="card-header border-warning text-warning fw-bold">
            ➕ Add a New Place to Your Journal
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success text-dark bg-light">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="/dashboard/add">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Place Title</label>
                    <input type="text" name="title" class="form-control bg-secondary text-white" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" rows="4" class="form-control bg-secondary text-white" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Image URL</label>
                    <input type="url" name="image" class="form-control bg-secondary text-white" required>
                </div>

                <button type="submit" class="btn btn-warning w-100">➕ Add Place</button>
            </form>
        </div>
    </div>
</div>
@endsection
