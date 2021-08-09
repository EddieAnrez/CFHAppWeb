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

        Permission::create(['name'=>'config.home', 'description'=>'Ver Home/Mensajes Sistema'])->syncRoles([$role1, $role2]);
        //Usuarios
        Permission::create(['name'=>'config.users.index','description'=>'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.users.edit','description'=>'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.users.create','description'=>'Crear Usuario'])->syncRoles([$role1]);
        //Roles
        Permission::create(['name'=>'config.roles.index','description'=>'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.roles.edit','description'=>'Editar Rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.roles.destroy','description'=>'Ver listado de roles'])->syncRoles([$role1]);
        //Permisos
        Permission::create(['name'=>'config.regulations.index','description'=>'Ver listado de Leyes y Reglamentos'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.regulations.edit','description'=>'Editar Ley/Reglamento'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.regulations.create','description'=>'Crear Ley/Reglamento'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.regulations.destroy','description'=>'Eliminar Ley/Reglamento'])->syncRoles([$role1]);
        
        //Listados
        //Categorias Blog
        Permission::create(['name'=>'config.categories.index','description'=>'Listado de categorías'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.categories.create','description'=>'Crear Categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.categories.edit','description'=>'Editar Categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.categories.destroy','description'=>'Eliminar Categoría'])->syncRoles([$role1]);
        //Etiquetas Blog
        Permission::create(['name'=>'config.tags.index','description'=>'Listado de Etiquetas'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.tags.create','description'=>'Crear Etiqueta'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.tags.edit','description'=>'Editar Etiqueta'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.tags.destroy', 'description'=>'Eliminar Etiqueta'])->syncRoles([$role1]);
        //Categorias Locaciones
        Permission::create(['name'=>'config.locationCategories.index','description'=>'Listado de categorías'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.locationCategories.create','description'=>'Crear Categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.locationCategories.edit','description'=>'Editar Categoría'])->syncRoles([$role1]);
        Permission::create(['name'=>'config.locationCategories.destroy','description'=>'Eliminar Categoría'])->syncRoles([$role1]);
       //Areas
       Permission::create(['name'=>'config.areas.index','description'=>'Listado de áreas'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.areas.create','description'=>'Crear área'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.areas.edit','description'=>'Editar área'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.areas.destroy','description'=>'Eliminar área'])->syncRoles([$role1]);
       //Categorias Servicios
       Permission::create(['name'=>'config.categoriesServices.index','description'=>'Listado de Categorías Servicios'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.categoriesServices.create','description'=>'Crear Categoría Servicio'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.categoriesServices.edit','description'=>'Editar Categoría Servicio'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.categoriesServices.destroy','description'=>'Eliminar Categoría Servicio'])->syncRoles([$role1]);

       //Subcategorias Servicios
       Permission::create(['name'=>'config.subCategoriesServices.index','description'=>'Listado de SubCategorías Servicios'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.subCategoriesServices.create','description'=>'Crear SubCategoría Servicio'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.subCategoriesServices.edit','description'=>'Editar SubCategoría Servicio'])->syncRoles([$role1]);
       Permission::create(['name'=>'config.subCategoriesServices.destroy','description'=>'Eliminar SubCategoría Servicio'])->syncRoles([$role1]);

       //Settings
       Permission::create(['name'=>'settings','description'=>'Generales'])->syncRoles([$role1]);

       //Mensajes
       Permission::create(['name'=>'config.config.create','description'=>'Crear Mensajes'])->syncRoles([$role1]);


       //Editor




       //Locaciones

       Permission::create(['name'=>'config.locations.index','description'=>'Ver listado de locaciones'])->syncRoles([$role1, $role2]);
       Permission::create(['name'=>'config.locations.create','description'=>'Crear locaciones'])->syncRoles([$role1, $role2]);
       Permission::create(['name'=>'config.locations.edit','description'=>'Editar locaciones'])->syncRoles([$role1, $role2]);
       Permission::create(['name'=>'config.locations.destroy','description'=>'Eliminar locaciones'])->syncRoles([$role1, $role2]);

       //Posts
        Permission::create(['name'=>'config.posts.index','description'=>'Ver listado de posts'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.create','description'=>'Crear post'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.edit','description'=>'Editar Post'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.posts.destroy','description'=>'Eliminar Post'])->syncRoles([$role1, $role2]);

        //Servicios

        Permission::create(['name'=>'config.services.index','description'=>'Ver listado de servicios'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.services.create','description'=>'Crear servicio'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.services.edit','description'=>'Editar servicio'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.services.destroy','description'=>'Eliminar servicio'])->syncRoles([$role1, $role2]);

        //Formularios de contacto

        Permission::create(['name'=>'config.contacts.index','description'=>'Ver listado de formularios de contacto recibidos'])->syncRoles([$role1, $role2]);
        //Permission::create(['name'=>'config.contacts.create','description'=>'Crear servicio'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.contacts.edit','description'=>'Editar  formulario de contacto'])->syncRoles([$role1, $role2]);
        //Permission::create(['name'=>'config.contacts.destroy','description'=>'Eliminar servicio'])->syncRoles([$role1, $role2]);
        
        //Tramites y Permisos

        Permission::create(['name'=>'config.permissions.index','description'=>'Ver listado de trámites/permisos'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.permissions.create','description'=>'Crear trámite/permiso'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.permissions.edit','description'=>'Editar trámite/permiso'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.permissions.destroy','description'=>'Eliminar trámite/permiso'])->syncRoles([$role1, $role2]);

        //Enlaces de interes

        Permission::create(['name'=>'config.links.index','description'=>'Ver listado de enlaces'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.links.create','description'=>'Crear enlace'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.links.edit','description'=>'Editar enlace'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.links.destroy','description'=>'Eliminar enlace'])->syncRoles([$role1, $role2]);
        
         //Estimulos

         Permission::create(['name'=>'config.incentives.index','description'=>'Ver listado de estímulos'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.incentives.create','description'=>'Crear estímulo'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.incentives.edit','description'=>'Editar estímulo'])->syncRoles([$role1, $role2]);
        Permission::create(['name'=>'config.incentives.destroy','description'=>'Eliminar estímulo'])->syncRoles([$role1, $role2]);


         //videos
         Permission::create(['name'=>'config.videos.index','description'=>'Ver listado de videos'])->syncRoles([$role1, $role2]);
         Permission::create(['name'=>'config.videos.create','description'=>'Crear video'])->syncRoles([$role1, $role2]);
         Permission::create(['name'=>'config.videos.edit','description'=>'Editar video'])->syncRoles([$role1, $role2]);
         Permission::create(['name'=>'config.videos.destroy','description'=>'Eliminar video'])->syncRoles([$role1, $role2]);


        

        

 /*        Route::resource('categories', CategoryController::class)->except('show')->names('config.categories');
      Route::resource('tags', TagController::class)->names('config.tags');
Route::resource('posts', PostController::class)->names('config.posts');
Route::resource('users', UserController::class)->names('config.users');
Route::resource('roles', RoleController::class)->names('config.roles');

Route::resource('config', ConfigController::class)->names('config.config');
Route::resource('locations', LocationController::class)->names('config.locations');
Route::resource('contact', ContactController::class)->names('config.contacts'); 
Route::resource('videos', VideoController::class)->names('config.videos');
Route::resource('services', ServiceController::class)->names('config.services');
Route::resource('categoriesServices', CategoryServiceController::class)->names('config.categoriesServices');
Route::resource('SubCategoriesServices', SubCategoryServiceController::class)->names('config.subCategoriesServices');
Route::resource('locationCategories', Category_LController::class)->names('config.locationCategories');
Route::resource('areas', AreaController::class)->names('config.areas');
Route::resource('live', LiveController::class)->names('config.live');
Route::resource('permissions', PermissionController::class)->names('config.permissions');
Route::resource('regulations', RegulationController::class)->names('config.regulations');
Route::resource('links', LinkController::class)->names('config.links');
Route::resource('incentives', IncentiveController::class)->names('config.incentives');
Route::resource('about', AboutController::class)->only('edit','update')->names('config.about');
Route::resource('directory', DirectoryController::class)->names('config.directory');
Route::resource('huatulco', HuatulcoController::class)->only('index','edit','update')->names('config.huatulco');
Route::get('settings', [SettingsController::class,'index'])->name('settings'); */




    }
}
