<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(40);

        User::factory()->create([
            'name'=>'Mehmet Küçükçelebi',
            'email'=>'mehmet@inverizo.com',
            'password'=>Hash::make('password')
        ]);
    }
}
