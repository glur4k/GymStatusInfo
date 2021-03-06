<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Timeslot as Timeslot;

class TimeslotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timeslots')->delete();

        Timeslot::create([
            'user_id' => '1',
            'location_id' => '1',
            'date' => date('Y-m-d', strtotime('01.01.2016')),
            'time' => date('H:i:s', strtotime('14:00:00')),
        ]);
        /*Timeslot::create([
            'user_id' => '2',
            'location_id' => '1',
            'date' => date('Y-m-d', strtotime('01.01.2016')),
            'time' => date('H:i:s', strtotime('14:00:00')),
        ]);
        Timeslot::create([
            'user_id' => null,
            'location_id' => '1',
            'date' => date('Y-m-d', strtotime('01.01.2016')),
            'time' => date('H:i:s', strtotime('18:00:00')),
        ]);
        Timeslot::create([
            'user_id' => null,
            'location_id' => '1',
            'date' => date('Y-m-d', strtotime('01.01.2016')),
            'time' => date('H:i:s', strtotime('18:00:00')),
        ]);
        /*Timeslot::create([
            'user_id' => null,
            'location_id' => '1',
            'date' => date('Y-m-d', strtotime('08.01.2016')),
            'time' => date('H:i:s', strtotime('17:00:00')),
        ]);*/
    }
}
