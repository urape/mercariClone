<?php

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
        if (App::environment() === 'production') {
            $this->call('ProductionSeeder');
        } else {
            $this->call('LocalSeeder');
        }
    }
}
