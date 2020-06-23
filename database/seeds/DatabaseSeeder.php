<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        DB::table('pharmacies')->insert([
            ['name' => 'Alandalus'],
            ['email' => 'Nofleean'],
        ]);

        Role::create(['name' => 'admin']);
        Permission::create(['name' => 'list']);
    }
}
