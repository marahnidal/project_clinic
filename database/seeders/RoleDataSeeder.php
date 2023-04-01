<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Ability;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $ability=[
        'all_categories'=>'All Categories',
        'add_category'=>'Add New Category',
        'trash_category'=>'Trash Category',
        'all_products'=>'All Products',
        'add_product'=>'Add New Product',
        'trash_product'=>'Trash Product',
        'all_article'=>'All Article',
        'add_article'=>'Add New Article',
        'trash_article'=>'Trash Article',
        'all_doctors'=>'All Doctors',
        'add_doctor'=>'Add New Doctor',
        'trash_doctor'=>'Trash Doctor',
        'all_take'=>'All Take',
        'trash_take'=>'Trash Take',
        'main'=>'Main',
        'role'=>'Role',

    ];
    public function run()
    {
        $data=[
            ['name'=>'Super Admin'],
            ['name'=>'Take appointment manager']
        ];

        Role::insert($data);

        foreach($this->ability as $code=>$name){
            Ability::create([
                'name'=>$name,
                'code'=>$code,
            ]);
        }
    }
}
