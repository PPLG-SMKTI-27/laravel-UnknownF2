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
                ],

            ],

         'siswa' => [
        [
            'nama' => 'Repan Subarjo',
            'kelas' => '12 RPL 2',
            'alamat' => 'Jl. Merdeka No. 123',
        ],
        [
            'nama' => 'Alya Putri',
            'kelas' => '11 TKJ 1',
            'alamat' => 'Jl. Sudirman No. 45',
        ],
        [
            'nama' => 'Budi Santoso',
            'kelas' => '10 MM 3',
            'alamat' => 'Jl. Diponegoro No. 67',
        ],
            
            ]
        ];

        return view('portfolio', $data);
    }
}
