<?php
namespace Database\Seeders\Tables;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Command :
         * artisan seed:generate --mode=table --all-tables
         *
         */

        $dataTables = [
            [
                'id' => 1,
                'name' => 'redacted',
                'email' => 'redacted@redacted.ca',
                'email_verified_at' => NULL,
                'password' => 'Redacted',
                'remember_token' => NULL,
                'created_at' => '2025-10-24 21:45:10',
                'updated_at' => '2025-10-31 18:14:48',
                'spotify_id' => 'pberndtsson',
                'spotify_avatar' => NULL,
                'spotify_token' => 'Redacted',
                'spotify_refresh_token' => 'Redacted',
                'spotify_token_expires_at' => NULL,
            ]
        ];
        DB::table('users')->delete();
        DB::table("users")->insert($dataTables);
    }
}
