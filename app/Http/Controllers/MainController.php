<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Review;

class MainController extends Controller
{
    public function home(){
        $places=Place::all();
        $reviews = Review::inRandomOrder()->take(2)->get();
        return view('home',['places'=>$places,'reviews'=>$reviews]);
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews=Review::all();
        return view('review',['reviews'=>$reviews]);
    }
    public function dashboard(){
        return view('dashboard');
    }


    public function onAdd(Request $request)
    {
        $valid = $request->validate([
            "title" => "required|string|min:2|max:50",
            "description" => "required|min:10|max:255",
            "image" => "required|url",
        ]);

        $place = new Place();
        $place->title = $request->input('title');
        $place->description = $request->input('description');
        $place->image = $request->input('image');

        $place->save();

        return redirect()->route('home')->with('success', 'Place added successfully!');
    }

    public function onAddReview(Request $request){
        $valid = $request->validate([
            "review" => "required|string|min:10|max:500",
            "author" => "required|min:4|max:50",
        ]);

        $review = new Review();
        $review->review = $request->input('review');
        $review->author = $request->input('author');

        $review->save();

        return redirect()->back()->with('success', 'Thank you for your review!');
    }
}
