<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index ()
    {

        $week = [

            "Today" => [
                [
                    "name" => "Test Event",
                    "host" => "Lukas Yelle",
                    "desc" => "A test event.",
                    "when" => "Today at 1:00 PM",
                    "length" => "3 hours",
                    "guests" => [
                        "Lukas" => "Going",
                        "Kel" => "Going",
                        "Hannah" => "Maybe",
                    ]
                ],
            ]
        ];

        return view('home')->with("week", $week);

    }
}
