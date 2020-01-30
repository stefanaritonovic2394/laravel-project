<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Role::class)->create();

        factory(Role::class)->create([
            'id' => Role::ROLES['user']['id'],
            'name' => Role::ROLES['user']['name']
        ]);

        factory(Role::class)->create([
            'id' => Role::ROLES['admin']['id'],
            'name' => Role::ROLES['admin']['name']
        ]);
    }
}
