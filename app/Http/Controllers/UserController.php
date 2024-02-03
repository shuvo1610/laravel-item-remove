<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $collection = collect([
            'One',
            'Two',
            'Three',
            'Four'
        ]);

        $collection->shift();

        $collection = $collection->toArray();

        dd($collection);
    }
}
