<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(['email' => 'a@b.com'])->create();

        $chores = [
            "Wash Dishes",
            "Do Laundry",
            "Sweep Floors",
            "Clean Bathroom"
        ];

        foreach($chores as $chore) {
            Todo::factory(['title' => $chore])->create();
        }
    }
}