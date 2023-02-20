<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Position;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\PositionSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PositionSeeder::class);

        \App\Models\User::factory()->create([
            'name' => 'Muhamad Raivan (Admin)',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role_id' => Role::where('name', 'admin')->first('id'),
            'position_id' => Position::where('name', 'Operator')->first('id'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Ahmad Jebret (Operator)',
            'email' => 'operator@gmail.com',
            'password' => Hash::make('operator123'),
            'role_id' => Role::where('name', 'operator')->first('id'),
            'position_id' => Position::where('name', 'Operator')->first('id'),
        ]);
        // \App\Models\User::factory(10)->create([
        //     'role_id' => Role::where('name', 'user')->first('id'), // user random === employee
        //     'position_id' => Position::select('id')->inRandomOrder()->first()->id
        // ]);
    }
}
