<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Article::factory(20)->create();
        \App\Models\Comment::factory(40)->create();
        \App\Models\User::factory()->create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@gmail.com',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ko Ko',
            'email' => 'koko@gmail.com',
        ]);

        $list = ['News', 'Tech', 'Web', 'App', 'Oss'];
        foreach($list as $name) {
            \App\Models\Category::create(['name' => $name]);
        }
    }
}
