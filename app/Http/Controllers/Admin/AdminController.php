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

    public function adminEdit(Work $work) {

        return view('adminEdit', compact('work'));

    }

    public function adminUpdate(Request $request, Work $work) {

        $work->img_url = "enlace de prueba";
        $work->name = $request->name;
        $work->description = $request->description;
        $work->demo_link = $request->demo_link;
        $work->repo_link = $request->repo_link;

        $work->save();

        return redirect()->action([AdminController::class, 'adminIndex']);

    }

    public function adminDelete(Work $work) {

        $work->delete();
        
        return redirect()->action([AdminController::class, 'adminIndex']);
    }
}
