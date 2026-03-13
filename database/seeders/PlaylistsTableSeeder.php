<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlaylistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('playlists')->delete();
        
        \DB::table('playlists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'spotify_id' => '2vtb6JouWNV0ukQY6Kf7Ne',
                'name' => 'Nightcore Mix',
                'description' => '',
                'public' => 1,
                'owner_name' => 'pberndtsson',
                'owner_spotify_id' => 'pberndtsson',
                'image_url' => 'https://mosaic.scdn.co/640/ab67616d00001e0270b064411f6ae5ed8173a4b1ab67616d00001e0276bd6a5bdd3e9f18d7cd542aab67616d00001e02d434922de5fbee65d007c249ab67616d00001e02e5a922863341fca68695d7bd',
                'created_at' => '2025-10-24 21:45:11',
                'updated_at' => '2025-10-24 22:42:38',
            ),
            1 => 
            array (
                'id' => 2,
                'spotify_id' => '5uO1a0bnO0SFgx5v9RK9X5',
                'name' => ' Gaming',
                'description' => '',
                'public' => 1,
                'owner_name' => 'pberndtsson',
                'owner_spotify_id' => 'pberndtsson',
                'image_url' => 'https://mosaic.scdn.co/640/ab67616d00001e0205ded1194cfefa65af276a4eab67616d00001e020bdf4dd39843ad48c5b66bc4ab67616d00001e022fa3d2cd1d7f8b6fef371726ab67616d00001e02d9c75b2578293fdc57e22a1b',
                'created_at' => '2025-10-24 21:49:48',
                'updated_at' => '2025-10-24 22:42:49',
            ),
            2 => 
            array (
                'id' => 3,
                'spotify_id' => '0U5szWK4CnP96H1rFkgYK1',
                'name' => 'Hot New Tracks',
                'description' => 'eminentmusicgroupcontact@gmail.com',
                'public' => 1,
                'owner_name' => 'Eminent Music Group',
                'owner_spotify_id' => '4w2xxhld6ptvaey87huf6ua9m',
                'image_url' => 'https://image-cdn-ak.spotifycdn.com/image/ab67706c0000da8499714ade916f27eb84552d35',
                'created_at' => '2025-10-24 21:50:04',
                'updated_at' => '2025-10-24 22:43:05',
            ),
            3 => 
            array (
                'id' => 4,
                'spotify_id' => '1qGrcqwspiKsemeBmlc1lU',
                'name' => '',
                'description' => '',
                'public' => 1,
                'owner_name' => 'Eminent Music Group',
                'owner_spotify_id' => '4w2xxhld6ptvaey87huf6ua9m',
                'image_url' => 'https://mosaic.scdn.co/640/ab67616d00001e02161da6b776717adf0055c9edab67616d00001e023d80cc0afef5bf4cda483349ab67616d00001e0283d7af9cedbf73cf88ce9e4cab67616d00001e02dfac5ba13c359bd8c2c2b8d8',
                'created_at' => '2025-10-24 21:50:22',
                'updated_at' => '2025-10-24 22:43:22',
            ),
            4 => 
            array (
                'id' => 5,
                'spotify_id' => '4atrTETuOPJkqeW3VD9Ip8',
                'name' => 'HIP-HOP HITS',
                'description' => '',
                'public' => 1,
                'owner_name' => 'Eminent Music Group',
                'owner_spotify_id' => '4w2xxhld6ptvaey87huf6ua9m',
                'image_url' => 'https://image-cdn-ak.spotifycdn.com/image/ab67706c0000da84c183a8b8a44e92f679328257',
                'created_at' => '2025-10-24 21:50:35',
                'updated_at' => '2025-10-24 22:43:35',
            ),
        ));
        
        
    }
}