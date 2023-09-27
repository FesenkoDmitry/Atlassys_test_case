<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentDate = new \DateTime('2022-01-01');
        $dtEnd = new \DateTime('2023-07-01');
        while ($currentDate <= $dtEnd){
            Currency::factory()->create([
                'date' => $currentDate->format('Y-m-d')
            ]);
            $currentDate->modify('+1 day');
        }
    }
}
