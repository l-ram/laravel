<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{

    public function index() {

        $chirps = [

            [
                'author' => 'Jane Doe',
                'message' => 'Just deployed my first laravel app',
                'time' => '5 mins ago'
            ],
            [
                'author' => 'John Doe',
                'message' => 'Typescript is better',
                'time' => '4 mins ago'
            ],
            [
                'author' => 'Batman',
                'message' => 'I am better',
                'time' => '3 mins ago'
            ]

        ];

    return view('home', ['chirps' => $chirps]);
    }
}
