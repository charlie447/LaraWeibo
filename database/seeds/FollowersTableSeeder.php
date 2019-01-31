<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        // get all users except the one with id is 1
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        // follow all users but the one with id is 1
        $user->follow($follower_ids);

        // All users are going to follow the first one user
        foreach($followers as $follower ){
            $follower->follow($user_id);
        }
    }
}
