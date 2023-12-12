<?php
// app/Http/Controllers/MeetupController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $meetups = [
            [
                'id' => 'm1',
                'title' => 'A First Meetup',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Stadtbild_M%C3%BCnchen.jpg/1280px-Stadtbild_M%C3%BCnchen.jpg',
                'address' => 'Some address 5, 12345 Some City',
                'description' => 'This is a first meetup!'
            ],
            [
                'id' => 'm2',
                'title' => 'A Second Meetup',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Stadtbild_M%C3%BCnchen.jpg/1280px-Stadtbild_M%C3%BCnchen.jpg',
                'address' => 'Some address 10, 12345 Some City',
                'description' => 'This is a second meetup!'
            ],
            // Add more meetup data as needed
        ];

        return view('homepage-feed', ['meetups' => $meetups]);
    }
}

