<?php

use Illuminate\Database\Seeder;

class HnginternshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();
        collect($users)->each(function ($user) {
            DB::table('Hnginternships')->insert([
                'fullname' => $user->fullname,
                'username' => $user->username,
                'track' => $user->track,
                'email' => $user->email,
                'hngSet' => 'hng6',
                'created_at' => $user->created_at
                ]);
        });
    }
}
