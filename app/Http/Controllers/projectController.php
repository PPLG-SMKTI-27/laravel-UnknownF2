<?php

namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects;

class ProjectController extends Controller
{
    public static function namaList(): array
    {
        return ["Ph.D ", "M.Sc" , "Doktor", "M.T.I" , "Specialist Cybersecurity"];
    }

    public function index()
    {
        $projects = Projects::all();
        $portfolio = $projects->map(function ($p) {
            return [
                'judul' => $p->title,
                'deskripsi' => $p->description,
                'image' => $p->image,
                'slug' => $p->slug,
            ];
        })->toArray();

        $namaList = self::namaList();

        return view('portfolio', compact('portfolio', 'projects', 'namaList'));
    }

    public function debug()
    {
        $projects = Projects::all();
        return view('projects.debug', compact('projects'));
    }

    public function json()
    {
        return response()->json(Projects::all());
    }
}
