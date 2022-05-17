<?php

use Illuminate\Database\Seeder;
use App\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        include('config/comics.php');

        foreach ($comics as $key => $comic) {

            $newComic = new Comic();
            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];

            $newComic->save();

        }
    }
}
