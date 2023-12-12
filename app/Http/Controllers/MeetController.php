<?php

namespace App\Http\Controllers;

use App\Models\Meet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MeetController extends Controller
{

    public function viewSingleMeet(Meet $meet) {
        $meet['body'] = strip_tags(Str::markdown($meet->body), '<p><ul><ol><li><strong><em><h3><br>');
        return view('single-meet', ['meet' => $meet]);
    }

    public function showCreateForm() {
        return view('create-meet');

    }

    // public function storeNewMeet(Request $request) {
    //     $incomingFields = $request->validate([
    //         'title' => 'required',
    //         'image' => 'required',
    //         'address' => 'required',
    //         'body' => 'required'

    //     ]);

    //     $imagePath = $request->file('image')->store('meetup_images', 'public');

    //     $incomingFields['title'] = strip_tags($incomingFields['title']);
    //     $incomingFields['image'] = strip_tags($incomingFields['imagePath']);
    //     $incomingFields['address'] = strip_tags($incomingFields['address']);
    //     $incomingFields['body'] = strip_tags($incomingFields['body']);
    //     $incomingFields['user_id'] = auth()->id();

    //     $newMeet = Meet::create($incomingFields);

    //     return redirect("/meet/{$newMeet->id}")->with('success', 'New meet up successfully created.');
    //     //return "Hey!";
    // }

    public function storeNewMeet(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string',
            'body' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('meetup_images', 'public');

        $newMeet = Meet::create([
            'title' => strip_tags($request->input('title')),
            'image' => $imagePath,
            'address' => strip_tags($request->input('address')),
            'body' => strip_tags($request->input('body')),
            'user_id' => auth()->id(),
        ]);

        return redirect("/meet/{$newMeet->id}")->with('success', 'New meetup successfully created.');
    }
}
