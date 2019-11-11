<?php

use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = \App\Hnginternship::all();
      collect($users)->each(function ($user) {
          DB::table('certificates')->insert([
            'internId' => $user->id,
            'grade' => "beginner",
            'slug' => $user->hngSet.$user->id.substr(md5(uniqid(mt_rand(), true)), 0, 3),
            'download_count' => 0,
            'paid_status' => "null",

              ]);
      });
    }
}
