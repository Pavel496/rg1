<?php

namespace App\Console;

// use DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
// use Illuminate\Support\Facades\Hash;
use App\Post;
use App\Phone;

// use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
      $schedule->call(function () {

      include('zadanie.php');
      // $post = new Post;
      //
      // $post->title = 'title1';
      // $post->user_id = 1;
      //
      // $post->save();
      // DB::table('posts')->insert([
      //     ['title' => 'title1', 'url' => 'title1'],
      //     ['title' => 'title2', 'url' => 'title2']
      // ]);
      foreach ($collection as $item) {


        // echo "\nЗаголовок: ".$item['title']."<br>";
        // dd($post);
          $haverecord = Post::where('phone', $item['phone'])->where('excerpt', $item['excerpt'])->first();
           if (! $haverecord) {

             // $post = new Post;
             //
             // $post->title =  $item['title'];
             // // $post->title =  $item['title'];
             // $post->user_id = 1;
             // $post->generateUrl();
             //
             // $post->save();
             Post::create($item);
          }
  }
})->cron('*/7 * * * *');
// ->everyMinute();

      $schedule->call(function () {
          $posts = Post::all();
          foreach ($posts as $post) {
              $havephone = Phone::where('phone', $post->phone)->first();
               if (! $havephone) {
                 $phone = [];
                 $phone = array_add($phone, 'phone', $post->phone);
                 $phone = array_add($phone, 'registered_at', now());
                 $code = str_random(5);
                 $phone = array_add($phone, 'sval1', $code);

                 Phone::create($phone);
                 include('sendsms.php');
                 $text = 'Ваша вакансия размещена на сайте Вакансии Гатчины, '
                          . 'rabota-gtn.ru/' . $post->url . '. Ваш код регистрации: '
                          . $code;
                 $myresult = sendsms($post->phone, $text);
                 break;
              }
          }
      })->everyFifteenMinutes();
// everyFifteenMinutes();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
