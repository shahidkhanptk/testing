<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Friend;
class FriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            Friend::create([
            'user_id' => '1',
            'friend_id' => '2',
            'status_id' => '1'
        ]);

    }
}
