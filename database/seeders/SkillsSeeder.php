<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            'Laravel',
            'PHP',
            'MySQL',
            'HTML & CSS',
            'JavaScript',
        ];

        foreach ($skills as $i => $name) {
            $slug = str()->slug($name);

            DB::table('skills')->updateOrInsert(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'slug' => $slug,
                    'order' => $i + 1,
                    'is_active' => true,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}
