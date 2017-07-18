<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->command->info("Role seeded");
        $this->call(PermissionsTableSeeder::class);
        $this->command->info("Permission seeded");
        $this->call(ConnectRelationshipsSeeder::class);
        $this->command->info("Relation seeded");
        $this->call(UsersTableSeeder::class);
        $this->command->info("User seeded");
        $this->call(CategoriesTableSeeder::class);
        $this->command->info("Categories Seeded");
        $this->call(MarketsTableSeeder::class);
        $this->command->info("Markets Seeded");

    }
}
