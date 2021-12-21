<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $limit = 5;
        for ($i = 0; $i < $limit; $i++) {
            $userid = DB::table('users')->insert([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeemail(),
                'password' => Hash::make('password'),
            ]);
            $taskCount = rand(1, 5);
            for ($j = 0; $j < $taskCount; $j++) {
                DB::table('task')->insert([
                    'title' => $faker->text(50),
                    'description' => $faker->text(100),
                    'type' => rand(1, 10),
                    'status' => rand(0, 1),
                    'start_date' => Carbon::today()->addDay(rand(-20, -1)),
                    'due_date' => Carbon::today()->addDay(rand(1, 20)),
                    'assignee' => $userid,
                    'estimate' => rand(1, 20),
                    'actual' => rand(1, 20),
                ]);
            }
        }
    }
}
