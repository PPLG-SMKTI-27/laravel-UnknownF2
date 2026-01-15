<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\projectController;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Faris Fathurrahman',
            'profesi' => 'Website Developer/Cybersecurity/Doktor',
            'deskripsi' => 'Perkenalkan, Nama saya Faris Fathurrahman Saya adalah web developer yang berfokus untuk pengembangan website dan Cybersecruity.',
            'namaList' => projectController::namaList(),
            'skills' => [
                'Laravel',
                'PHP',
                'MySQL',
                'HTML & CSS',
                'JavaScript'
            ],
            'portfolio' => [
                [
                    'judul' => 'Website Peminjaman ALat Laboratorium',
                    'deskripsi' => 'Aplikasi kasir berbasis web'    
                ]
            ]
        ];

        return view('portfolio', $data);
    }
}
