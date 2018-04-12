<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $week = [

            "Today"=>[
                [
                    "name"=>"Test Event",
                    "host"=>"Lukas Yelle",
                    "desc"=>"A test event.",
                    "when"=>"Today at 1:00 PM",
                    "length"=>"3 hours",
                    "guests"=>[
                        "Lukas"=>"Going",
                        "Kel"=>"Going",
                        "Hannah"=>"Maybe",
                    ]
                ],
            ],
            "Wednesday, April 11th, 2018"=>[
                [
                    "name"=>"Test Event 2",
                    "host"=>"Lukas Yelle",
                    "desc"=>"Another test event.",
                    "when"=>"Wednesday, April 11th, 2018 at 12:00 PM",
                    "length"=>"2 hours",
                    "guests"=>[
                      "Lukas"=>"Going",
                      "Kel"=>"Going",
                      "Hannah"=>"Maybe",
                    ]
                ]
            ],
            "Thursday, April 12th, 2018"=>[
                [
                    "name"=>"Test Event 3",
                    "host"=>"Lukas Yelle",
                    "desc"=>"Another test event.",
                    "when"=>"Thursday, April 12th, 2018 at 12:00 PM",
                    "length"=>"2 hours",
                    "guests"=>[
                        "Lukas"=>"Going",
                        "Kel"=>"Going",
                        "Hannah"=>"Maybe",
                    ]
                ]
            ],
            "Friday, April 13th, 2018"=>[]

        ];

        return view('home')->with("week", $week);

    }
}
