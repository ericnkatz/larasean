<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    

    public function about()
    {
        // ONE
        // $name = 'Sean <span style="color: red;">Doran</span>';
        // return view('pages.about')->with('name', $name);


        // TWO
        // return view('pages.about')->with([
        //         'first' => 'OMG',
        //         'last' => 'LOL'
        //     ]);


        // THREE
        // $data = [];
        // $data['first'] = 'Sean';
        // $data['last'] = 'Doran';

        // return view('pages.about', $data);

        // FOUR
        $first = 'Big';
        $last = 'Bob';

        return view('pages.about', compact('first', 'last'));
    }
}
