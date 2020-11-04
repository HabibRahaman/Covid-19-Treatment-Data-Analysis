<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
           'Diseases',
           'Symptoms',
           'Medicines',
           'MedicalConditions',
           'HealthCares',
           'InfoBlogs',
           'OnlineTest',
           'Roles',
           'Users'
        ];
   

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
