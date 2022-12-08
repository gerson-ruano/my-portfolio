<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function downloadCv()

    {
    	$filePath = storage_path('app/public/carlos-full-stack.pdf');
    	$headers = ['Content-Type: application/pdf'];
        $fileName = "carlos-full-stack.pdf";

    	return response()->download($filePath, $fileName, $headers);
    }
}
