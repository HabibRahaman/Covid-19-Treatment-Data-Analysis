<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

        	'email'=>'admin@mail.com',
            'password'=>'$2y$10$4qpPjESW.dsoCzsr4BTDxeqE0IrZoAAqy4mqCf8PAKxepDCe7FfcS', //admin1234
            'name'=>'Super Admin',
            'remember_token'=>'7BCXXXdt4H2CeTctpgFgYz8DsDQbkdepfm5xWP5i2rnRWp3k9qPOuUZB9y8O',
            'is_admin'=>'1'
            
        ]);

  
        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
