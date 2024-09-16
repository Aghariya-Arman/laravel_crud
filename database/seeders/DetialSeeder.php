<?php

namespace Database\Seeders;

use App\Models\detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DetialSeeder extends Seeder
{

    public function run(): void
    {
        $json = File::get(path: 'database/json/details.json');
        $details = collect(json_decode($json));

        $details->each(function ($detail) {
            detail::create([

                'name' => $detail->name,
                'email' => $detail->email,
                'age' => $detail->age,
                'city' => $detail->city
            ]);
        });
    }
}
