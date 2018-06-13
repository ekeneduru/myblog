<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role= new \App\Role([
        //     'name'=>'Administrator'
        // ]);
        // $role->save();
        // $role= new \App\Role([
        //     'name'=>'Registered'
        // ]);
        // $role->save();

        DB::table('categories')->insert([
            'Name' => "News",
            'createdby_id'=>1,
            'modifyby_id'=>1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

         ]);

         // DB::table('role_user')->insert([
        //     'role_id' => 2,
        //     'user_id'=>2,
        //     'created_at' => \Carbon\Carbon::now(),
        //     'updated_at' => \Carbon\Carbon::now(),

        // ]);
       
       
       

    }
}
