<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeControler extends Controller
{
    public function __invoke()
    {
        $userModel = new User();
        $adminProfile = $userModel->getAdminProfile();

        $workModel = new work();
        $works = $workModel->getAllWorks();
        return view('home',compact('works', 'adminProfile'));
    }
}
