<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->description = $comic['description'];
            $newComic->save();        
        }
    }
}
