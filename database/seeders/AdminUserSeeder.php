<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = DB::table('users')->insert([
            'name' => 'Manuel_Admin',
            'email' => 'mmbalbas@dawlugo.es',
            'password' => Hash::make('Admi_App'), // Usa una contraseña más segura en producción
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $adminRole = Role::findByName('administrador');
        $user = User::where('email', 'mmbalbas@dawlugo.es')->first();
        $user->assignRole($adminRole);
    }
}
