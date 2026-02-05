<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Website Peminjaman Alat Laboratorium',
                'slug' => 'website-peminjaman-alat-laboratorium',
                'excerpt' => 'Aplikasi peminjaman alat laboratorium.',
                'description' => 'Aplikasi kasir berbasis web',
                'client' => 'Sekolah',
                'category' => 'Web Application',
                'tags' => json_encode(['php','laravel']),
                'image' => 'projects/lab1.jpg',
                'project_url' => null,
                'start_date' => '2025-01-01',
                'end_date' => '2025-02-01',
                'is_published' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Website Portofolio Pribadi',
                'slug' => 'website-portofolio-pribadi',
                'excerpt' => 'Website portofolio untuk menampilkan proyek dan keterampilan.',
                'description' => 'Sebuah website portofolio yang menampilkan proyek-proyek terbaik, blog singkat, dan kontak.',
                'client' => 'Personal',
                'category' => 'Web Development',
                'tags' => json_encode(['laravel','php','css','javascript']),
                'image' => 'projects/portfolio1.jpg',
                'project_url' => 'https://example.com/portfolio',
                'start_date' => '2025-09-01',
                'end_date' => '2025-10-15',
                'is_published' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($projects as $p) {
            DB::table('projects')->updateOrInsert(
                ['slug' => $p['slug']],
                $p
            );
        }
    }
}
