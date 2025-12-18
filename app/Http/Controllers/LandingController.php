<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Carbon;

class LandingController extends Controller
{
    public function index()
    {
        $events = Event::where('event_date', '>=', Carbon::today())
            ->orderBy('event_date', 'asc')
            ->take(4)
            ->get(['id', 'name', 'image', 'venue', 'event_date']);

        return view('home', compact('events'));
    }
}
