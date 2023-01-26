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
        $listComics = config('comics');

        foreach ($listComics as $comic){
            
            $comic = new Comic();
            $comic->title = $listComics->title;
            $comic->description = $listComics['description'];
            $comic->thumb = $listComics['thumb'];
            $comic->price = $listComics['price'];
            $comic->series = $listComics['series'];
            $comic->sale_date = $listComics['sale_date'];
            $comic->type = $listComics['type'];
            $comic->save();

        }
    }
}
