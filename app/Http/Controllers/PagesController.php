<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $tasks = [
            'Got to the store',
            'Got to the market',
            'Got to work',
            'Got to the concert',
        ];

        return view('welcome', [
            'tasks' => $tasks
        ]);
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
