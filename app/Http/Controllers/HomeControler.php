<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function __invoke()
    {
        $workModel = new work();
        $works = $workModel->getAllWorks();
        // return view('home',compact('works'));
        return view('home',compact('works'));
    }
}
