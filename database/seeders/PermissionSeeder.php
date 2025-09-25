<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // 1. Criar permissões para os CRUDS
        // CRUD de Produtos
        Permission::firstOrCreate(['name' => 'view products']);
        Permission::firstOrCreate(['name' => 'create products']);
        Permission::firstOrCreate(['name' => 'edit products']);
        Permission::firstOrCreate(['name' => 'delete products']);

        // CRUD de Imóveis
        Permission::firstOrCreate(['name' => 'view imovels']);
        Permission::firstOrCreate(['name' => 'create imovels']);
        Permission::firstOrCreate(['name' => 'edit imovels']);
        Permission::firstOrCreate(['name' => 'delete imovels']);

        // 2. Criar papéis e atribuir permissões

        // Papel de Usuário Normal
        $userRole = Role::firstOrCreate(['name' => 'user']);
        $userRole->givePermissionTo(['view products', 'view imovels']);

        // Papel de Administrador
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->givePermissionTo(Permission::all());

        // 3. Atribuir papéis a um usuário de exemplo
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin User',
                'password' => bcrypt('password'), // Use uma senha segura para produção!
            ]
        );

        $adminUser->assignRole('admin');

        // Se quiser, crie um usuário normal também
        $normalUser = User::firstOrCreate(
            ['email' => 'user@user.com'],
            [
                'name' => 'Normal User',
                'password' => bcrypt('password'),
            ]
        );

        $normalUser->assignRole('user');
    }
}
