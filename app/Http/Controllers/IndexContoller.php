<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexContoller extends Controller
{
    public function Index()
    {
        return inertia('Index/Index',[
            'message' => 'Hello World'
        ]);

    }

    public function Show()
    {
        return inertia('Index/Show',[
            'message' => 'vye World'
        ]);
    }
}
