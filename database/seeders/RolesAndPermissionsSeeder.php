<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Limpia la caché de roles y permisos para evitar problemas de sincronización
        app()['cache']->forget('spatie.permission.cache');

        // Definir y crear permisos
        Permission::create(['name' => 'ver perfil']);
        Permission::create(['name' => 'editar perfil']);
        Permission::create(['name' => 'ver asignaturas']);
        Permission::create(['name' => 'editar asignaturas']);

        // Crear el rol de administrador y asignar todos los permisos disponibles
        $adminRole = Role::create(['name' => 'administrador']);
        $adminRole->givePermissionTo(Permission::all());

        // Crear el rol de usuario con permisos limitados
        $userRole = Role::create(['name' => 'usuario']);
        $userRole->givePermissionTo(['ver perfil', 'ver asignaturas']);

        // Opcional: Agregar aquí más roles y permisos según sea necesario
    }
}
