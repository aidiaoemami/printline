<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(App\User::class)->create([
            "name" => "Admin",
            "email" => "admin@admin.com",
        ]);
        $admin->assignRole("admin");

        $seller = factory(App\User::class)->create([
            "name" => "Seller",
            "email" => "seller@seller.com",
        ]);
        $seller->assignRole("seller");

        $seller = factory(App\User::class)->create([
            "name" => "Member",
            "email" => "member@member.com",
        ]);
        $seller->assignRole("member");
    }
}
