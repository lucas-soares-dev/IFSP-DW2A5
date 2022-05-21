<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Lucas'
        ];

        return view('home', $data);
    }

    public function create()
    {
        return view('events.create');
    }
}
