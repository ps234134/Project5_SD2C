<?php

namespace Database\Seeders;

use App\Models\Achievement;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Achievement::create([
            'name' => 'First Achievement',
            'date' => Carbon::now(),
            'starttime' => 'Starttime',
            'endtime' => 'Endtime',
            'amount' => 'Alot',
            'user_id' => '1'

        ]);

        Achievement::create([
            'name' => 'Second Achievement',
            'date' => Carbon::now(),
            'starttime' => 'Starttime',
            'endtime' => 'Endtime',
            'amount' => 'Alot',
            'user_id' => '2'

        ]);

        Achievement::create([
            'name' => 'Third Achievement',
            'date' => Carbon::now(),
            'starttime' => 'Starttime',
            'endtime' => 'Endtime',
            'amount' => 'Alot',
            'user_id' => '3'

        ]);

        Achievement::create([
            'name' => 'Fourth Achievement',
            'date' => Carbon::now(),
            'starttime' => 'Starttime',
            'endtime' => 'Endtime',
            'amount' => 'Alot',
            'user_id' => '4'

        ]);

        // Add more achievements here...

    }
}
