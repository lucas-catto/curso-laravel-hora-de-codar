<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $name = 'lucas';
        $age = 17;

        $numbers = [0,1,2,3,4,5,6,7,8,9];
        $names = ['lucas', 'elon', 'john', 'larry', 'sergey'];

        return view('welcome',
            compact(
                'name',
                'age',
                'numbers',
                'names'
            )
        );
    }

    public function create()
    {
        return view('events.create');
    }
}
