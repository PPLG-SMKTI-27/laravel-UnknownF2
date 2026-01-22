<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{

public function index() {
    $siswa = [
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
    ];
    return view('portfolio', compact('siswa'));
}


}
