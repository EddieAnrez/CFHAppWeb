<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Administrador']);
        $role2 = Role::create(['name'=>'Editor']);

        Permission::create(['name'=>'config',
                        'description'=>'Ver Home Configuracion'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.home',
                        'description'=>'Ver Home Login'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'config.users.index',
                        'description'=>'Ver listado de usuarios'])->syncRoles([$role1, $role2]);
        
        Permission::create(['name'=>'config.users.edit','description'=>'Asignar un rol',
                                        ])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'config.categories.index',
                        'description'=>'Listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.categories.create',
                        'description'=>'Crear Categoria'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.categories.edit',
                        'description'=>'Editar Categoria'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.categories.destroy',
                        'description'=>'Eliminar Categoria'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'config.tags.index',
                        'description'=>'Listado de Etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.tags.create',
                        'description'=>'Crear Etiqueta'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.tags.edit',
                        'description'=>'Editar Etiqueta'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.tags.destroy',
                        'description'=>'Eliminar Etiqueta'])->syncRoles([$role1, $role2]);

        Permission::create(['name'=>'config.posts.index','description'=>'Ver listado de posts'
        ])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.create','description'=>'Crear post'
        ])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.edit','description'=>'Editar Post'
        ])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.destroy','description'=>'Eliminar Post'
        ])->syncRoles([$role1, $role2]);

        
    }
}
