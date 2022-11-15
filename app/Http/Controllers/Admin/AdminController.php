<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminIndex() {

        $workModel = new Work();
        $works = $workModel->getAllWorks();
        return view('adminIndex',compact('works'));

    }

    public function adminCreate() {

        return view('adminCreate');

    }

    public function adminEditWork(work $Work) {

        return "get work and edit by form";

    }

    public function adminUpdateWork() {

        return "get new work data from form and update it";

    }

    public function adminDestroyWork(work $Work) {

        return "get work and remove it from database";
    }
}
