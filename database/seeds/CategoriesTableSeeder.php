<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $newCategory = Category::create([
            'category_name' => 'Sayur Mayur',
            'category_slug' => 'sayur_mayur',
            'category_icon' => 'sayur.png',
            'category_color' => '#fcabce',
            'category_brief' => 'Bayam, Kangkung, Sawi dll. ',
            'category_priority' => 1,
            'category_publish' => 1,
        ]);
    }
}
