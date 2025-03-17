<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    public function showCategory($category)
{
    $certificates = Certificate::where('category', $category)->get();
    return view('certificate_details', compact('certificates'));
}

}
