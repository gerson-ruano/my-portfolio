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

    public function adminSave(Request $request) {

        $work = new work();
        $work->img_url = "enlace de prueba";
        $work->name = $request->name;
        $work->description = $request->description;
        $work->demo_link = $request->demo_link;
        $work->repo_link = $request->repo_link;

        $work->save();

        return redirect()->action([AdminController::class, 'adminIndex']);

    }

    public function adminEdit(work $Work) {

        return "get work and edit by form";

    }

    public function adminUpdate() {

        return "get new work data from form and update it";

    }

    public function adminDelete(work $Work) {

        return "get work and remove it from database";
    }
}
