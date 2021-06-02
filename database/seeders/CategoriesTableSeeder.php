<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Điện thoại', 'Máy tính', 'Máy ảnh'];
        DB::table('categories')->truncate();
        foreach($categories as $value){
            DB::table('categories')->insert([
                'name' => $value,
                'slug' => 'danh-muc' //Str::slug($value)
            ]);
        }
    }
}
