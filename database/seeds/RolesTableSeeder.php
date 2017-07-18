<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
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
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('name', '=', 'Admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'Admin',
	            'slug' => 'admin',
	            'description' => 'Admin Role',
	            'level' => 50,
        	]);
	    }

    	if (Role::where('name', '=', 'User')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'User',
	            'slug' => 'user',
	            'description' => 'User Role',
	            'level' => 10,
	        ]);
	    }

		if (Role::where('name', '=', 'Courier')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Courier',
	            'slug' => 'courier',
	            'description' => 'Courier Role',
	            'level' => 20,
	        ]);
	    }

		if (Role::where('name', '=', 'Shoper')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Shoper',
	            'slug' => 'shoper',
	            'description' => 'Shoper Role',
	            'level' => 30,
	        ]);
	    }

    	if (Role::where('name', '=', 'Unverified')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Unverified',
	            'slug' => 'unverified',
	            'description' => 'Unverified Role',
	            'level' => 0,
	        ]);
	    }

    }

}