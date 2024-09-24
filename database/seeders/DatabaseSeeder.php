<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Branche;
use App\Models\Organization;
use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'User',
        //     'email' => 'user@user.com',
        //     'password' => '123456789',
        //     'status' => 'active',
        // ]);
        // Admin::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => '123456789',
        //     'status' => 'active',
        // ]);
        SuperAdmin::create([
            'name' => 'Super Admin',
            'email' => 'super@super.com',
            'password' => '123456789',
        ]);
        // Organization::create([
        //     'admin_id' => 1,
        //     'name' => 'Organization1',
        // ]);
        // Branche::create([
        //     'organization_id' => 1,
        //     'name' => 'Branche1',
        // ]);
    }
}
