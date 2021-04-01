<?php

namespace Database\Seeders;

use App\Models\Clients;
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
    
    	Clients::factory()->times(10)->create();
        
    }
}
