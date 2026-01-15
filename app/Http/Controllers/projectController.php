<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class projectController extends Controller
{
    public static function namaList(): array
    {
        return ["Ph.D ", "M.Sc" , "Doktor", "M.T.I" , "Specialist Cybersecurity"];
    }

    public function index()
    {
        return redirect('/');
    }

}
