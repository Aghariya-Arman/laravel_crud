<?php

namespace Database\Seeders;

use App\Models\stud;
use App\Models\User;
use app\Models\detail;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        // $this->call([
        //     StudSeeder::class
        // ]);


        $this->call([
            DetialSeeder::class
        ]);
    }
}
