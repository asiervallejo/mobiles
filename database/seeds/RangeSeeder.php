<?php

use Illuminate\Database\Seeder;
use App\Range;

class RangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Range::create(['name' => '0-10']);
        Range::create(['name' => '10-50']);
        Range::create(['name' => '50-100']);
        Range::create(['name' => '100-1000']);
        Range::create(['name' => '>1000']);    }
}
