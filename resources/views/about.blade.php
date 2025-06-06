@extends('layout')

@section('main_content')
    <section class="text-center mb-5">
        <h1 class="display-4 mb-3">🌍 About Travel Journal</h1>
        <p class="lead">Behind every trip is a story worth telling. Here's ours.</p>
    </section>

    {{-- Кто мы --}}
    <section class="mb-5">
        <h2 class="mb-3">👋 Who We Are</h2>
        <p>
            Travel Journal is a passion project created by travelers, for travelers. We believe that every destination holds unforgettable memories, and those moments deserve to be saved and shared. Whether you're a backpacker, city explorer, or digital nomad — this is your space.
        </p>
    </section>

    {{-- Цели проекта --}}
    <section class="mb-5">
        <h2 class="mb-3">🎯 Our Mission</h2>
        <p>
            To make travel memories timeless. We want to give people a safe and beautiful place to document their journeys, connect with like-minded adventurers, and inspire others to go beyond their borders.
        </p>
    </section>

    {{-- Что ты можешь делать --}}
    <section class="mb-5">
        <h2 class="mb-3">🧭 What You Can Do Here</h2>
        <ul>
            <li>📌 Write travel stories and organize them by date and place</li>
            <li>📷 Add pictures to make memories come alive</li>
            <li>🔐 Choose privacy: keep it private or share with the world</li>
            <li>📬 Leave comments and interact with others</li>
        </ul>
    </section>

    {{-- Призыв к действию --}}
    <section class="text-center mt-5">
        <h2 class="mb-3">✈️ Join the Journey</h2>
        <p class="mb-4">The world is full of stories. Come write yours.</p>
        <a href="/register" class="btn btn-warning btn-lg">Create an Account</a>
    </section>
@endsection
