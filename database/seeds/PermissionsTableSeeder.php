<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Interfaz
        Permission::create([
            'name'          => 'Listar Configuraciones',
            'slug'          => 'settings.index',
            'description'   => 'Listar configuraciones del sistema',
            'category'      => 'Vistas'
        ]);

        //User
        Permission::create([
            'name'          => 'Navegar Usuarios',
            'slug'          => 'users.index',
            'description'   => 'Listar y Navegar todos los usuarios del sistema',
            'category'      => 'Usuarios'
        ]);
        Permission::create([
            'name'          => 'Ver detalle de usuario',
            'slug'          => 'users.show',
            'description'   => 'Detalles de un usuarios del sistema',
            'category'      => 'Usuarios'
        ]);
        Permission::create([
            'name'          => 'Edición de Usuario',
            'slug'          => 'users.edit',
            'description'   => 'Editar informacion de un usuario del sistema',
            'category'      => 'Usuarios'
        ]);
        Permission::create([
            'name'          => 'Eliminar Usuarios',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar usuarios del sistema',
            'category'      => 'Usuarios'
        ]);

        //Roles
        Permission::create([
            'name'          => 'Navegar Roles',
            'slug'          => 'roles.index',
            'description'   => 'Listar y Navegar todos los usuarios del sistema',
            'category'      => 'Roles'
        ]);
        Permission::create([
            'name'          => 'Ver Rol',
            'slug'          => 'roles.show',
            'description'   => 'Detalles de un usuarios del sistema',
            'category'      => 'Roles'
        ]);
        Permission::create([
            'name'          => 'Creación de Rol',
            'slug'          => 'roles.create',
            'description'   => 'Editar informacion de un rol del sistema',
            'category'      => 'Roles'
        ]);
        Permission::create([
            'name'          => 'Edición de Rol',
            'slug'          => 'roles.edit',
            'description'   => 'Editar informacion de un rol del sistema',
            'category'      => 'Roles'
        ]);
        Permission::create([
            'name'          => 'Eliminar Roles',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar usuarios del sistema',
            'category'      => 'Roles'
        ]);
    }
}
