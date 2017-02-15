<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = DB::table('tweets')
            ->select('tweets.id', 'tweet')
            ->orderBy('id','DESC')
            ->get();

        return view('songs.index', [
            'tweets' => $tweets
        ]);
    }
    public function viewID($tweet)
    {
        $tweets = DB::table('tweets')
            ->select('tweets.id', 'tweet')
            ->where('id', '=', $tweet)
            ->get();

        return view('songs.view', [
            'tweets' => $tweets
        ]);
    }

    // public function create()
    // {
    //     $artists = DB::table('tweets')
    //         ->select('tweets.id', 'tweet')
    //         ->get();
    //
    //     return view('songs.create', [
    //         'artists' => $artists
    //     ]);
    // }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tweet' => 'required|max:140'
        ]);

        if ($validator->passes()) {
            DB::table('tweets')->insert([
                'tweet' => request('tweet')
            ]);

            return redirect('/')
                ->with('successStatus', 'Tweet created successfully!');
        } else {
            return redirect('/')
            ->withErrors($validator);

        }
    }

    public function destroy($songID)
    {
        DB::table('tweets')
            ->where('id', '=', $songID)
            ->delete();

        return redirect('/')
            ->with('successStatus', 'Tweet deleted successfully!');
    }

    // public function edit($songID)
    // {
    //     $song = DB::table('songs')
    //         ->where('id', '=', $songID)
    //         ->first();
    //
    //     $artists = DB::table('artists')
    //         ->select('id', 'artist_name')
    //         ->orderBy('artist_name')
    //         ->get();
    //
    //     return view('songs.edit', [
    //         'artists' => $artists,
    //         'song' => $song
    //     ]);
    // }
    //
    // public function update($songID, Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'title' => 'required',
    //         'price' => 'required|numeric'
    //     ]);
    //
    //     if ($validator->passes()) {
    //         DB::table('songs')
    //             ->where('id', '=', $songID)
    //             ->update([
    //                 'title' => request('title'),
    //                 'artist_id' => request('artist'),
    //                 'price' => request('price')
    //             ]);
    //
    //         return redirect('/songs')
    //             ->with('successStatus', 'Song updated successfully!');
    //     } else {
    //         return redirect("/songs/$songID/edit")
    //             ->withErrors($validator);
    //     }
    }
