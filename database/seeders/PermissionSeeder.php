<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Ver dashboard',
        ]);

        Permission::create([
            'name' => 'Crear rol',
        ]);
        Permission::create([
            'name' => 'Leer rol',
        ]);
        Permission::create([
            'name' => 'Actualizar rol',
        ]);
        Permission::create([
            'name' => 'Eliminar rol',
        ]);

        Permission::create([
            'name' => 'Crear usuarios',
        ]);
        Permission::create([
            'name' => 'Leer usuarios',
        ]);
        Permission::create([
            'name' => 'Actualizar usuarios',
        ]);
        Permission::create([
            'name' => 'Eliminar usuarios',
        ]);

        Permission::create([
            'name' => 'Crear profesores',
        ]);
        Permission::create([
            'name' => 'Leer profesores',
        ]);
        Permission::create([
            'name' => 'Actualizar profesores',
        ]);
        Permission::create([
            'name' => 'Eliminar profesores',
        ]);

        Permission::create([
           'name' => 'Crear cursos',
        ]);
        Permission::create([
            'name' => 'Leer cursos',
        ]);
        Permission::create([
            'name' => 'Actualizar cursos',
        ]);
        Permission::create([
            'name' => 'Eliminar cursos',
        ]);

        Permission::create([
            'name' => 'Crear blogs',
        ]);
        Permission::create([
            'name' => 'Leer blogs',
        ]);
        Permission::create([
            'name' => 'Actualizar blogs',
        ]);
        Permission::create([
            'name' => 'Eliminar blogs',
        ]);


    }
}
