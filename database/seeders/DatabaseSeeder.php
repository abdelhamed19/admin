<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Admin;
use App\Models\Branche;
use App\Models\Cooperate;
use App\Models\Organization;
use App\Models\Plan;
use App\Models\Subscription;
use App\Models\SuperAdmin;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        SuperAdmin::create([
            'name' => 'Super Admin',
            'email' => 'super@super.com',
            'password' => '123456789',
        ]);
        Plan::factory(10)->create();
        Admin::factory(10)->create();
        Organization::factory(10)->create();
        Cooperate::factory(10)->create();
        Branche::factory(10)->create();
        User::factory(10)->create();
        Subscription::factory(10)->create();

    }
}
