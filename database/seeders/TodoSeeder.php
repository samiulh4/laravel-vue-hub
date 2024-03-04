<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Modules\Todo\Models\Todo;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'unique_id' => time() . Str::random(5, 'alpha'),
            'title' => Str::random(15),
            'description' => Str::random(50),
            'due_date' => date('Y-m-d'),
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        Todo::create([
            'unique_id' => time() . Str::random(5, 'alpha'),
            'title' => Str::random(15),
            'description' => Str::random(50),
            'due_date' => date('Y-m-d'),
            'created_by' => 2,
            'updated_by' => 2,
        ]);
        Todo::create([
            'unique_id' => time() . Str::random(5, 'alpha'),
            'title' => Str::random(15),
            'description' => Str::random(50),
            'due_date' => date('Y-m-d'),
            'created_by' => 3,
            'updated_by' => 3,
        ]);
        Todo::create([
            'unique_id' => time() . Str::random(5, 'alpha'),
            'title' => Str::random(15),
            'description' => Str::random(50),
            'due_date' => date('Y-m-d'),
            'created_by' => 4,
            'updated_by' => 4,
        ]);
    }
}
