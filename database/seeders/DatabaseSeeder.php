<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $akun = [
            ['Admin LPM',  'admin@lpm.test',  'admin12345',  'admin'],
            ['Kepala LPM', 'kepala@lpm.test', 'kepala12345', 'kepala'],
        ];

        foreach ($akun as [$name, $email, $password, $role]) {
            $user = User::firstOrNew(['email' => $email]);
            $user->name     = $name;
            $user->password = Hash::make($password);
            $user->role     = $role;
            $user->save();
        }
    }
}
