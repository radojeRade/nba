<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::factory(20)->make()->each(function($news){
            $user = User::inRandomOrder()->first();
            $user->news()->save($news); //preko usera kreiramo news i ne brinemo o foreign key na ovaj nacin
        });
    }
}
