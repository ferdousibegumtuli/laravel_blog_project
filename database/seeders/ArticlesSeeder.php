<?php


namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('articles')->insert([
                'title' => $faker->sentence(5),  
                'description' => $faker->paragraph(10),
                'user_id' => User::all()->random()->id,
                'category_id' => Category::all()->random()->id,
                'tag_id' => Tag::all()->random()->id,
                'status' => $faker->boolean(),
                'image' => $faker->imageUrl(640, 480, 'animals'),
                'created_at' => $faker->dateTimeThisYear(),
                'updated_at' => $faker->dateTimeThisYear(),
            ]);
        }
    }
}
