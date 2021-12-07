<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class, 27)->create()->each(
            function ($category) {
                factory(App\Product::class, 37)->create(['category_id'=>$category->id]);
            }
        );
    }
}
