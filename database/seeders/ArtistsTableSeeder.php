<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artists')->delete();
        
        \DB::table('artists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'spotify_id' => '5n0h7PGhxq6dC4LCWTEcMA',
                'name' => 'Fly By Nightcore',
                'popularity' => 48,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebc9e097800c03fd3fb38c05bc',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:45:12',
                'updated_at' => '2025-10-24 21:45:12',
            ),
            1 => 
            array (
                'id' => 2,
                'spotify_id' => '2mCdt3LotGSy2i7uOjC6B9',
                'name' => 'Nightcore Fanatics',
                'popularity' => 17,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebc91e8e2172fd6cdeb4d48388',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:40',
                'updated_at' => '2025-10-24 21:49:40',
            ),
            2 => 
            array (
                'id' => 3,
                'spotify_id' => '5vbfEamXIujShzHJHsx1I9',
                'name' => 'Stormxx',
                'popularity' => 19,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b27370b064411f6ae5ed8173a4b1',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:49:40',
                'updated_at' => '2025-10-24 21:49:40',
            ),
            3 => 
            array (
                'id' => 4,
                'spotify_id' => '0LyfQWJT6nXafLPZqxe9Of',
                'name' => 'Various Artists',
                'popularity' => 0,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb6b134287e3095d2c84b7932a',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:41',
                'updated_at' => '2025-10-24 21:49:41',
            ),
            4 => 
            array (
                'id' => 5,
                'spotify_id' => '78L6JikpNu3iRD8VoQL5vt',
                'name' => 'Giga Dance',
                'popularity' => 29,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebfbdd4a0bf517923fc383aa5e',
                'genres' => '["nightcore","happy hardcore"]',
                'created_at' => '2025-10-24 21:49:41',
                'updated_at' => '2025-10-24 21:49:41',
            ),
            5 => 
            array (
                'id' => 6,
                'spotify_id' => '6sWZXw9GL45K3bTRSHmonT',
                'name' => 'Morano',
                'popularity' => 17,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b273e1869b711e46de34eb27d0d0',
                'genres' => '["happy hardcore"]',
                'created_at' => '2025-10-24 21:49:41',
                'updated_at' => '2025-10-24 21:49:41',
            ),
            6 => 
            array (
                'id' => 7,
                'spotify_id' => '23AOb31DgLJFSkmP40CjJV',
                'name' => 'Nightcore Reloaded',
                'popularity' => 16,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb69edcd997b6ec35a84cf2ebc',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:49:42',
                'updated_at' => '2025-10-24 21:49:42',
            ),
            7 => 
            array (
                'id' => 8,
                'spotify_id' => '7IGMJ3A8I6Sa2GlJ8qprcz',
                'name' => 'KLIO',
                'popularity' => 26,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb909b39b218cadac6d614240c',
                'genres' => '["nightcore","happy hardcore"]',
                'created_at' => '2025-10-24 21:49:42',
                'updated_at' => '2025-10-24 21:49:42',
            ),
            8 => 
            array (
                'id' => 9,
                'spotify_id' => '7MlcYSTwlLeOtBMDJ6WOv5',
                'name' => 'DJ Satomi',
                'popularity' => 37,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb43b4605ea44b90bfc9c49f87',
                'genres' => '["nightcore","happy hardcore","eurodance","europop","italo dance"]',
                'created_at' => '2025-10-24 21:49:43',
                'updated_at' => '2025-10-24 21:49:43',
            ),
            9 => 
            array (
                'id' => 10,
                'spotify_id' => '7y7UhmnDydiweGCwrHsI22',
                'name' => 'Empyre One',
                'popularity' => 51,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb329c726248dac0eabf72b4fd',
                'genres' => '["hardstyle"]',
                'created_at' => '2025-10-24 21:49:45',
                'updated_at' => '2025-10-24 21:49:45',
            ),
            10 => 
            array (
                'id' => 11,
                'spotify_id' => '6J0JxSwEg57rP2Qm7lPAZf',
                'name' => 'Into The Nightcore',
                'popularity' => 35,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb9d3b2dd77628dea57fec0677',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:49:47',
                'updated_at' => '2025-10-24 21:49:47',
            ),
            11 => 
            array (
                'id' => 12,
                'spotify_id' => '6JEFR9MZRaulcF3KdSfL3p',
                'name' => 'Nightcore Red',
                'popularity' => 30,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b273147b961610485a2ce64dd4e9',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:49:47',
                'updated_at' => '2025-10-24 21:49:47',
            ),
            12 => 
            array (
                'id' => 13,
                'spotify_id' => '50YUlSM9xB8BSdZC0EKk9Z',
                'name' => 'Nightcore Reality',
                'popularity' => 48,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebecdecbee3f8aadccff2f9508',
                'genres' => '["nightcore"]',
                'created_at' => '2025-10-24 21:49:48',
                'updated_at' => '2025-10-24 21:49:48',
            ),
            13 => 
            array (
                'id' => 14,
                'spotify_id' => '2snm3HmsnDUDxbIChdl2Oj',
                'name' => 'Justin Hurwitz',
                'popularity' => 60,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb152668866cc33ae3fe2f4ede',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:49',
                'updated_at' => '2025-10-24 21:49:49',
            ),
            14 => 
            array (
                'id' => 15,
                'spotify_id' => '1A2uplrPcSu6bqDaRp7Xs9',
                'name' => 'Justin Paul',
                'popularity' => 38,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b2730bdf4dd39843ad48c5b66bc4',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:49',
                'updated_at' => '2025-10-24 21:49:49',
            ),
            15 => 
            array (
                'id' => 16,
                'spotify_id' => '0qKRRwXdVtrVIEdPFr8vvo',
                'name' => 'Benj Pasek',
                'popularity' => 38,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b2730bdf4dd39843ad48c5b66bc4',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:49',
                'updated_at' => '2025-10-24 21:49:49',
            ),
            16 => 
            array (
                'id' => 17,
                'spotify_id' => '6T70tWxqyIpdVbsFvPzqM3',
                'name' => 'La La Land Cast',
                'popularity' => 46,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb5af0d1af415910587153c02d',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:50',
                'updated_at' => '2025-10-24 21:49:50',
            ),
            17 => 
            array (
                'id' => 18,
                'spotify_id' => '68Uwx1d3EbjDJhYsLjqvIq',
                'name' => 'Emma Stone',
                'popularity' => 54,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eba48d0fc5e30ce5b742dd7936',
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:50',
                'updated_at' => '2025-10-24 21:49:50',
            ),
            18 => 
            array (
                'id' => 19,
                'spotify_id' => '13kKxNPnxPeeWQaAaZwvCP',
                'name' => 'Callie Hernandez',
                'popularity' => 40,
                'image_url' => NULL,
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:51',
                'updated_at' => '2025-10-24 21:49:51',
            ),
            19 => 
            array (
                'id' => 20,
                'spotify_id' => '4FFGJ9ERSX06Sl8hD7GRVv',
                'name' => 'Sonoya Mizuno',
                'popularity' => 40,
                'image_url' => NULL,
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:51',
                'updated_at' => '2025-10-24 21:49:51',
            ),
            20 => 
            array (
                'id' => 21,
                'spotify_id' => '21yiGQIpkiP8edfxDipQaW',
                'name' => 'Jessica Rothe',
                'popularity' => 41,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb1fc02d572b7f3fab56918376',
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:51',
                'updated_at' => '2025-10-24 21:49:51',
            ),
            21 => 
            array (
                'id' => 22,
                'spotify_id' => '6kXm2YCtdUOpRYNKeKhfue',
                'name' => 'Ryan Gosling',
                'popularity' => 55,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb2a4a7d2d1e8acd5d95df137e',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:52',
                'updated_at' => '2025-10-24 21:49:52',
            ),
            22 => 
            array (
                'id' => 23,
                'spotify_id' => '4sf4DrAOkheqktxTyKm7tO',
                'name' => 'AmaLee',
                'popularity' => 56,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb57b5e5d0748723c44fd9aa36',
                'genres' => '["anime"]',
                'created_at' => '2025-10-24 21:49:53',
                'updated_at' => '2025-10-24 21:49:53',
            ),
            23 => 
            array (
                'id' => 24,
                'spotify_id' => '2jR6Lr47O21Iq7l5Bs2mig',
                'name' => 'Kristofer Maddigan',
                'popularity' => 46,
                'image_url' => 'https://i.scdn.co/image/30aeb9c9fe118a6d0d802956276e200f252ee9b0',
                'genres' => '["soundtrack"]',
                'created_at' => '2025-10-24 21:49:53',
                'updated_at' => '2025-10-24 21:49:53',
            ),
            24 => 
            array (
                'id' => 25,
                'spotify_id' => '2V6PaadKgrJ7fdHj0lecz9',
                'name' => 'The Original London Cast of Crazy For You',
                'popularity' => 0,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b2732fa3d2cd1d7f8b6fef371726',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:53',
                'updated_at' => '2025-10-24 21:49:53',
            ),
            25 => 
            array (
                'id' => 26,
                'spotify_id' => '3CP3fz5qpw93t4feU2qLoP',
                'name' => 'Kirby Ward',
                'popularity' => 18,
                'image_url' => NULL,
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:54',
                'updated_at' => '2025-10-24 21:49:54',
            ),
            26 => 
            array (
                'id' => 27,
                'spotify_id' => '6PnIMpepyV2t4kHEei2jOA',
                'name' => 'Jeremy Harrison',
                'popularity' => 9,
                'image_url' => NULL,
                'genres' => '["musicals"]',
                'created_at' => '2025-10-24 21:49:54',
                'updated_at' => '2025-10-24 21:49:54',
            ),
            27 => 
            array (
                'id' => 28,
                'spotify_id' => '7hbCqOyZOL95lWpgPbGVkB',
                'name' => 'Vanessa Leagh-Hicks',
                'popularity' => 1,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:54',
                'updated_at' => '2025-10-24 21:49:54',
            ),
            28 => 
            array (
                'id' => 29,
                'spotify_id' => '5yrCKRtvsvjwF28jZ3Vqf0',
                'name' => 'Helen Way',
                'popularity' => 5,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:54',
                'updated_at' => '2025-10-24 21:49:54',
            ),
            29 => 
            array (
                'id' => 30,
                'spotify_id' => '1ThjEa5Nt7y8GKrnnoye5I',
            'name' => 'Crazy for You Ensemble (London)',
                'popularity' => 5,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:49:55',
                'updated_at' => '2025-10-24 21:49:55',
            ),
            30 => 
            array (
                'id' => 31,
                'spotify_id' => '3ULvi5IjU8vjBJW3e8EPLz',
                'name' => 'Hideki Naganuma',
                'popularity' => 43,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebdc488e4014e9afc54aa98fcb',
                'genres' => '["japanese vgm"]',
                'created_at' => '2025-10-24 21:49:55',
                'updated_at' => '2025-10-24 21:49:55',
            ),
            31 => 
            array (
                'id' => 32,
                'spotify_id' => '57DlMWmbVIf2ssJ8QBpBau',
                'name' => 'Toby Fox',
                'popularity' => 74,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebcce32307d0f312e8faf01bae',
                'genres' => '["soundtrack"]',
                'created_at' => '2025-10-24 21:49:58',
                'updated_at' => '2025-10-24 21:49:58',
            ),
            32 => 
            array (
                'id' => 33,
                'spotify_id' => '62GoYifV4njTdvS8lD2yYT',
                'name' => 'insaneintherainmusic',
                'popularity' => 43,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb4bd2598932ed116e725e5448',
                'genres' => '["jazz"]',
                'created_at' => '2025-10-24 21:49:59',
                'updated_at' => '2025-10-24 21:49:59',
            ),
            33 => 
            array (
                'id' => 34,
                'spotify_id' => '1WtRZkPYDucJibgUhnvtI8',
                'name' => 'Gabe Nekrutman',
                'popularity' => 21,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:01',
                'updated_at' => '2025-10-24 21:50:01',
            ),
            34 => 
            array (
                'id' => 35,
                'spotify_id' => '3lczz4xabLZK3A8KfMOlgq',
                'name' => 'Chris Allison',
                'popularity' => 22,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b273059434a412e111944a0f1f7e',
                'genres' => '["smooth jazz"]',
                'created_at' => '2025-10-24 21:50:01',
                'updated_at' => '2025-10-24 21:50:01',
            ),
            35 => 
            array (
                'id' => 36,
                'spotify_id' => '33YwE27uFjLjx0lAusgLYE',
                'name' => 'Adriana Figueroa',
                'popularity' => 42,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebbdc89ee7fb2feb6834c78681',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:03',
                'updated_at' => '2025-10-24 21:50:03',
            ),
            36 => 
            array (
                'id' => 37,
                'spotify_id' => '2AVi4BrmIbfoAQibg4xeOW',
                'name' => 'Insaneintherain',
                'popularity' => 21,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:03',
                'updated_at' => '2025-10-24 21:50:03',
            ),
            37 => 
            array (
                'id' => 38,
                'spotify_id' => '1JDB3i4cxzJ8b9x2Qqq5q0',
                'name' => 'Brooke Ferd',
                'popularity' => 16,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b2738aecd22640f09992a1ebd298',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:04',
                'updated_at' => '2025-10-24 21:50:04',
            ),
            38 => 
            array (
                'id' => 39,
                'spotify_id' => '1iAHGUswejKgFiqAvt82y7',
                'name' => '8BitBrigadier',
                'popularity' => 9,
                'image_url' => NULL,
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:04',
                'updated_at' => '2025-10-24 21:50:04',
            ),
            39 => 
            array (
                'id' => 40,
                'spotify_id' => '60b3ApaWrsyyA0OwaoipqY',
                'name' => 'Bassoonify',
                'popularity' => 11,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebcab36266a628b2c96e4bc6ef',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:04',
                'updated_at' => '2025-10-24 21:50:04',
            ),
            40 => 
            array (
                'id' => 41,
                'spotify_id' => '1Vgfa2CgIDUzJ1W1I0pDc3',
                'name' => 'Saint Pete',
                'popularity' => 0,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb71d579f4d4c16c25435bf074',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:05',
                'updated_at' => '2025-10-24 21:50:05',
            ),
            41 => 
            array (
                'id' => 42,
                'spotify_id' => '1sSoNWrCtpzRan5yNkBTcL',
                'name' => 'Only One Felipe',
                'popularity' => 7,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb7127c717d58457e2e209b975',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:06',
                'updated_at' => '2025-10-24 21:50:06',
            ),
            42 => 
            array (
                'id' => 43,
                'spotify_id' => '5jGqKmL1iBtlEb3LZovw8Y',
                'name' => 'Teejayx6',
                'popularity' => 28,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb911f261f462b63bf08f6f40b',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:07',
                'updated_at' => '2025-10-24 21:50:07',
            ),
            43 => 
            array (
                'id' => 44,
                'spotify_id' => '20vLls6BmcHB0zEwpB91O2',
                'name' => 'Bankroll Freddie',
                'popularity' => 38,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb078fd3097641529dee1b1c69',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:07',
                'updated_at' => '2025-10-24 21:50:07',
            ),
            44 => 
            array (
                'id' => 45,
                'spotify_id' => '5RnUS48fC3nHEjbKeb8TPz',
                'name' => 'Renni Rucci',
                'popularity' => 35,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb9e78f4d089a907fef3b2b92c',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:07',
                'updated_at' => '2025-10-24 21:50:07',
            ),
            45 => 
            array (
                'id' => 46,
                'spotify_id' => '6IvMzEgPA1Ftl3XbMV0s0m',
                'name' => 'Bouba Savage',
                'popularity' => 22,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb7aa5b1c8f99e1de390b8e491',
                'genres' => '["new york drill","drill","brooklyn drill"]',
                'created_at' => '2025-10-24 21:50:08',
                'updated_at' => '2025-10-24 21:50:08',
            ),
            46 => 
            array (
                'id' => 47,
                'spotify_id' => '4uyIwcaJgV9ShErevnVlNp',
                'name' => '10k.Caash',
                'popularity' => 28,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb10c6ab0712194d3e7380e172',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:09',
                'updated_at' => '2025-10-24 21:50:09',
            ),
            47 => 
            array (
                'id' => 48,
                'spotify_id' => '2cfaPCEu2KbgkBXXm4T6R6',
                'name' => 'Dracovii',
                'popularity' => 17,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb2f80603fa24c39afe65905be',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:09',
                'updated_at' => '2025-10-24 21:50:09',
            ),
            48 => 
            array (
                'id' => 49,
                'spotify_id' => '5J688KtVJUBw5jM89jpbC9',
                'name' => 'Supreme Patty',
                'popularity' => 23,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb02612339e1b6e15823c10f90',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:10',
                'updated_at' => '2025-10-24 21:50:10',
            ),
            49 => 
            array (
                'id' => 50,
                'spotify_id' => '1cNDP5yjU5vjeR8qMf4grg',
                'name' => 'YNW Melly',
                'popularity' => 70,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb4da4a196cc973f65b68fe67b',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:10',
                'updated_at' => '2025-10-24 21:50:10',
            ),
            50 => 
            array (
                'id' => 51,
                'spotify_id' => '3XfvugeQbdrgAhX8wMurEU',
                'name' => 'Woah Vicky',
                'popularity' => 12,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb7b56daed91f298c17788e11c',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:11',
                'updated_at' => '2025-10-24 21:50:11',
            ),
            51 => 
            array (
                'id' => 52,
                'spotify_id' => '4rhJPLJcGMi8qawuGR6FF9',
                'name' => 'Miss Money',
                'popularity' => 2,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb4eb6efb73212977d8b4c1bd5',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:11',
                'updated_at' => '2025-10-24 21:50:11',
            ),
            52 => 
            array (
                'id' => 53,
                'spotify_id' => '6z7xFFHxYkE9t8bwIF0Bvg',
                'name' => 'Boosie Badazz',
                'popularity' => 63,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb1e73ff447dcfad678d9742d9',
                'genres' => '["southern hip hop","crunk"]',
                'created_at' => '2025-10-24 21:50:12',
                'updated_at' => '2025-10-24 21:50:12',
            ),
            53 => 
            array (
                'id' => 54,
                'spotify_id' => '223iuP2xVi3XwEAuVhdRFE',
                'name' => 'Jin Gates',
                'popularity' => 7,
                'image_url' => 'https://i.scdn.co/image/ab67616d0000b27317b57490a6368b2de76cdf68',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:12',
                'updated_at' => '2025-10-24 21:50:12',
            ),
            54 => 
            array (
                'id' => 55,
                'spotify_id' => '1O8X4zxUh4AdAPFttOTlLr',
                'name' => 'Thouxanbanfauni',
                'popularity' => 51,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebf0d81c00c96340d258038f49',
                'genres' => '["cloud rap","melodic rap"]',
                'created_at' => '2025-10-24 21:50:13',
                'updated_at' => '2025-10-24 21:50:13',
            ),
            55 => 
            array (
                'id' => 56,
                'spotify_id' => '4r63FhuTkUYltbVAg5TQnk',
                'name' => 'DaBaby',
                'popularity' => 76,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebbd6918901c1714560669f570',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:13',
                'updated_at' => '2025-10-24 21:50:13',
            ),
            56 => 
            array (
                'id' => 57,
                'spotify_id' => '3HiuzBlSW7pGDXlSFMhO2g',
                'name' => 'Young Dolph',
                'popularity' => 70,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb392af601eddfa5a0c705141d',
                'genres' => '["southern hip hop","trap"]',
                'created_at' => '2025-10-24 21:50:14',
                'updated_at' => '2025-10-24 21:50:14',
            ),
            57 => 
            array (
                'id' => 58,
                'spotify_id' => '0RESbWvOMyua0yuyVrztJ5',
                'name' => 'Key Glock',
                'popularity' => 73,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb491b2242456d456e76cd0c58',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:14',
                'updated_at' => '2025-10-24 21:50:14',
            ),
            58 => 
            array (
                'id' => 59,
                'spotify_id' => '7jVv8c5Fj3E9VhNjxT4snq',
                'name' => 'Lil Nas X',
                'popularity' => 71,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb3758a33e782b46bd7f174e1d',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:14',
                'updated_at' => '2025-10-24 21:50:14',
            ),
            59 => 
            array (
                'id' => 60,
                'spotify_id' => '4kYSro6naA4h99UJvo89HB',
                'name' => 'Cardi B',
                'popularity' => 81,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eba23286f24edd4a7dbdc6311d',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:15',
                'updated_at' => '2025-10-24 21:50:15',
            ),
            60 => 
            array (
                'id' => 61,
                'spotify_id' => '3TVXtAsR1Inumwj472S9r4',
                'name' => 'Drake',
                'popularity' => 95,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb4293385d324db8558179afd9',
                'genres' => '["rap"]',
                'created_at' => '2025-10-24 21:50:15',
                'updated_at' => '2025-10-24 21:50:15',
            ),
            61 => 
            array (
                'id' => 62,
                'spotify_id' => '1sBkRIssrMs1AbVkOJbc7a',
                'name' => 'Rick Ross',
                'popularity' => 76,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb8196a8109c28a8b8aca28fae',
                'genres' => '["southern hip hop"]',
                'created_at' => '2025-10-24 21:50:16',
                'updated_at' => '2025-10-24 21:50:16',
            ),
            62 => 
            array (
                'id' => 63,
                'spotify_id' => '4Ga1P7PMIsmqEZqhYZQgDo',
                'name' => 'Lil Tecca',
                'popularity' => 79,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb5433d9d8519ad0635d8bd869',
                'genres' => '["melodic rap","rap"]',
                'created_at' => '2025-10-24 21:50:16',
                'updated_at' => '2025-10-24 21:50:16',
            ),
            63 => 
            array (
                'id' => 64,
                'spotify_id' => '50co4Is1HCEo8bhOyUWKpn',
                'name' => 'Young Thug',
                'popularity' => 83,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb9f2fb33940aac624dc5d100d',
                'genres' => '["rap","melodic rap","trap"]',
                'created_at' => '2025-10-24 21:50:16',
                'updated_at' => '2025-10-24 21:50:16',
            ),
            64 => 
            array (
                'id' => 65,
                'spotify_id' => '6l3HvQ5sa6mXTsMTB19rO5',
                'name' => 'J. Cole',
                'popularity' => 82,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb4b053c29fd4b317ff825f0dc',
                'genres' => '["rap"]',
                'created_at' => '2025-10-24 21:50:17',
                'updated_at' => '2025-10-24 21:50:17',
            ),
            65 => 
            array (
                'id' => 66,
                'spotify_id' => '0Y5tJX1MQlPlqiwlOH1tJY',
                'name' => 'Travis Scott',
                'popularity' => 89,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb19c2790744c792d05570bb71',
                'genres' => '["rap"]',
                'created_at' => '2025-10-24 21:50:17',
                'updated_at' => '2025-10-24 21:50:17',
            ),
            66 => 
            array (
                'id' => 67,
                'spotify_id' => '6AgTAQt8XS6jRWi4sX7w49',
                'name' => 'Polo G',
                'popularity' => 76,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebbedf3bdf589da06d1567196c',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:18',
                'updated_at' => '2025-10-24 21:50:18',
            ),
            67 => 
            array (
                'id' => 68,
                'spotify_id' => '6jGMq4yGs7aQzuGsMgVgZR',
                'name' => 'Lil Tjay',
                'popularity' => 74,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb61a229ac35bdd68d42bffe32',
                'genres' => '["brooklyn drill","melodic rap"]',
                'created_at' => '2025-10-24 21:50:19',
                'updated_at' => '2025-10-24 21:50:19',
            ),
            68 => 
            array (
                'id' => 69,
                'spotify_id' => '0YinUQ50QDB7ZxSCLyQ40k',
                'name' => 'Mustard',
                'popularity' => 70,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb54406b7007a449aeaac06c44',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:19',
                'updated_at' => '2025-10-24 21:50:19',
            ),
            69 => 
            array (
                'id' => 70,
                'spotify_id' => '7rkW85dBwwrJtlHRDkJDAC',
                'name' => 'NAV',
                'popularity' => 68,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb6c786d705c8c7e20c877d114',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:19',
                'updated_at' => '2025-10-24 21:50:19',
            ),
            70 => 
            array (
                'id' => 71,
                'spotify_id' => '699OTQXzgjhIYAHMy9RyPD',
                'name' => 'Playboi Carti',
                'popularity' => 85,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebba50ca67ffc3097f6ea1710a',
                'genres' => '["rage rap"]',
                'created_at' => '2025-10-24 21:50:20',
                'updated_at' => '2025-10-24 21:50:20',
            ),
            71 => 
            array (
                'id' => 72,
                'spotify_id' => '31W5EY0aAly4Qieq6OFu6I',
                'name' => 'A Boogie Wit da Hoodie',
                'popularity' => 77,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebebe9d9f649d6ef85497f71af',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:20',
                'updated_at' => '2025-10-24 21:50:20',
            ),
            72 => 
            array (
                'id' => 73,
                'spotify_id' => '4O15NlyKLIASxsJ0PrXPfz',
                'name' => 'Lil Uzi Vert',
                'popularity' => 81,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eba8ce348f34f18241d3249fa9',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:20',
                'updated_at' => '2025-10-24 21:50:20',
            ),
            73 => 
            array (
                'id' => 74,
                'spotify_id' => '1iNqsUDUraNWrj00bqssQG',
                'name' => 'Dreamville',
                'popularity' => 61,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb080d11275f15655a11b2610d',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:21',
                'updated_at' => '2025-10-24 21:50:21',
            ),
            74 => 
            array (
                'id' => 75,
                'spotify_id' => '5yPzzu25VzEk8qrGTLIrE1',
                'name' => 'Young Nudy',
                'popularity' => 68,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb03775f1dcd383778c1e8832d',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:22',
                'updated_at' => '2025-10-24 21:50:22',
            ),
            75 => 
            array (
                'id' => 76,
                'spotify_id' => '7naAJDAh7AZnf18YYfQruM',
                'name' => 'Christian French',
                'popularity' => 49,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb8eb007bf0a1523c05ffe5015',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:23',
                'updated_at' => '2025-10-24 21:50:23',
            ),
            76 => 
            array (
                'id' => 77,
                'spotify_id' => '7LvoDJUNGnOrPdGRzVtOJ9',
                'name' => 'Young M.A',
                'popularity' => 61,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb2f1177c2d816a671990b308f',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:29',
                'updated_at' => '2025-10-24 21:50:29',
            ),
            77 => 
            array (
                'id' => 78,
                'spotify_id' => '246dkjvS1zLTtiykXe5h60',
                'name' => 'Post Malone',
                'popularity' => 85,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebe17c0aa1714a03d62b5ce4e0',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:30',
                'updated_at' => '2025-10-24 21:50:30',
            ),
            78 => 
            array (
                'id' => 79,
                'spotify_id' => '6Xgp2XMz1fhVYe7i6yNAax',
                'name' => 'Trippie Redd',
                'popularity' => 79,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5ebf2db81b3312a1f167fc54096',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:31',
                'updated_at' => '2025-10-24 21:50:31',
            ),
            79 => 
            array (
                'id' => 80,
                'spotify_id' => '7hj7ffJe6UkF1gsMpuweSI',
                'name' => 'Yungeen Ace',
                'popularity' => 56,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb0e2a8e955def85357872a4d5',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:31',
                'updated_at' => '2025-10-24 21:50:31',
            ),
            80 => 
            array (
                'id' => 81,
                'spotify_id' => '4IprNlQiJZUUJhDl0fL2SL',
                'name' => 'Quando Rondo',
                'popularity' => 59,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb22430c4f1ae751e740e201c9',
                'genres' => '["melodic rap"]',
                'created_at' => '2025-10-24 21:50:32',
                'updated_at' => '2025-10-24 21:50:32',
            ),
            81 => 
            array (
                'id' => 82,
                'spotify_id' => '5f7VJjfbwm532GiveGC0ZK',
                'name' => 'Lil Baby',
                'popularity' => 84,
                'image_url' => 'https://i.scdn.co/image/ab6761610000e5eb514da623c55dc9d2155705dd',
                'genres' => '[]',
                'created_at' => '2025-10-24 21:50:33',
                'updated_at' => '2025-10-24 21:50:33',
            ),
        ));
        
        
    }
}