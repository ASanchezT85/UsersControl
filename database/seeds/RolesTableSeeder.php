<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creando el Rol Administrador (acceso total)
        Role::create([
            'name'          => 'Administrador',
            'slug'          => 'administrator',
            'special'       => 'all-access',
            'description'   => 'Administrador del Sistema'
        ]);

        //Creando el Rol Administrador (acceso total)
        Role::create([
            'name'          => 'Bloqueado',
            'slug'          => 'bloqueado',
            'special'       => 'no-access',
            'description'   => 'Usuario Bloqueado'
        ]);
    }
}
