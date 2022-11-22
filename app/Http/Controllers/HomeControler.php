<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControler extends Controller
{
    public function __invoke()
    {
        $user = Auth::user();
        $workModel = new work();
        $works = $workModel->getAllWorks();
        return view('home',compact('works', 'user'));
    }
}
