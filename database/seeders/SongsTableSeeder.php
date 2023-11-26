<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // An array of songs with their attributes
        $songs = [
            [
                'thumb' => 'https://i.scdn.co/image/ab67616d0000b273c8f9f7a5f7c1a0a1c9a0c6a9',
                'title' => 'Stay',
                'genres' => 'pop, dance-pop, EDM',
                'artists' => 'The Kid LAROI, Justin Bieber',
                'audio' => '',
            ],
            [
                'thumb' => 'https://i.scdn.co/image/ab67616d0000b273b4f9f7a5f7c1a0a1c9a0c6a9',
                'title' => 'Bad Habits',
                'genres' => 'pop, dance-pop, electropop',
                'artists' => 'Ed Sheeran',
                'audio' => '',
            ],
            [
                'thumb' => 'https://i.scdn.co/image/ab67616d0000b273c4f9f7a5f7c1a0a1c9a0c6a9',
                'title' => 'Levitating',
                'genres' => 'pop, disco, nu-disco',
                'artists' => 'Dua Lipa, DaBaby',
                'audio' => '',
            ],
            [
                'thumb' => 'https://i.scdn.co/image/ab67616d0000b273d4f9f7a5f7c1a0a1c9a0c6a9',
                'title' => 'Peaches',
                'genres' => 'pop, R&B, hip hop',
                'artists' => 'Justin Bieber, Daniel Caesar, Giveon',
                'audio' => '',
            ],
            [
                'thumb' => 'https://i.scdn.co/image/ab67616d0000b273e4f9f7a5f7c1a0a1c9a0c6a9',
                'title' => 'Montero (Call Me By Your Name)',
                'genres' => 'pop, hip hop, Latin pop',
                'artists' => 'Lil Nas X',
                'audio' => '',
            ],
        ];

        // Insert the songs into the database
        DB::table('songs')->insert($songs);
    }
}
