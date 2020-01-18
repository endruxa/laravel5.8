<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'id' => 1,
            'title' => 'World News',
            'user_id' => 2
        ]);

        Category::create([
            'id' => 2,
            'title' => 'Sport',
            'user_id' => 2
        ]);

        Category::create([
            'id' => 3,
            'title' => 'Good morning',
            'user_id' => 5
        ]);

        Category::create([
            'id' => 4,
            'title' => 'Money',
            'user_id' => 7
        ]);

        Category::create([
            'id' => 5,
            'title' => 'PHP',
            'user_id' => 11
        ]);
    }
}
