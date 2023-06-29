<?php

namespace App\Http\Controllers;

use App\Models\Joke;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\StoreJokeRequest;
use App\Http\Requests\UpdateJokeRequest;

class JokeController extends Controller
{
    public function index(Request $request)
    {
        $votedJokes = $this->getVotedJokes($request);

        $joke = Joke::whereNotIn('id', $votedJokes)->inRandomOrder()->first();

        if ($joke) {
            return view('home', compact('joke'));
        } else {
            return view('empty');
        }
    }

    public function vote(Request $request)
    {
        $jokeId = $request->input('joke_id');
        $vote = $request->input('vote');

        $joke = Joke::find($jokeId);

        if ($vote === 'like') {
            $joke->likes++;
        } elseif ($vote === 'dislike') {
            $joke->dislikes++;
        }

        $joke->save();

        $votedJokes = $this->getVotedJokes($request);
        // thêm phẩn tử mới vào cuối mảng
        $votedJokes[] = $jokeId;

        Cookie::queue('voted_jokes', json_encode($votedJokes), 30); // Lưu cookie trong 30 phút

        return redirect()->route('joke.index');
    }

    private function getVotedJokes(Request $request)
    {
        $votedJokes = [];

        if ($request->hasCookie('voted_jokes')) {
            $votedJokes = json_decode($request->cookie('voted_jokes'), true);
        }

        return $votedJokes;
    }
}