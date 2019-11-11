<?php

use Illuminate\Database\Seeder;

class Hng6UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $hng6s = json_decode(
          file_get_contents('https://spreadsheets.google.com/feeds/list/1r72EIsNM-CZc8eRCdxqY7JyIaxlmglq4jitDEI0B3Y4/o446bzi/public/values?alt=json'),
          true
      );
      $contents = $hng6s['feed']['entry'];

      collect($contents)->each(function ($content) {
        $userdata = explode(",", $content['content']['$t']);
        $user = str_ireplace(
          ['fullname: ', 'slackusername:', 'track: ', 'emailaddress: ', ' '],
          ['', '', '', '', ''],
          $userdata
        );
          DB::table('users')->insert([
              'fullname' => $user[0] ?? '',
              'username' => \Illuminate\Support\Str::replaceFirst('@', '',$user[1]) ?? '',
              'track' => $user[2] ?? '',
              'email' => $user[3],
              'hngSet' => 'hng6',
              'password' => bcrypt($user[3].'hng6'),
              'created_at' => Carbon\Carbon::parse($content['updated']['$t']) ?? '',
              ]);
      });
    }
}
