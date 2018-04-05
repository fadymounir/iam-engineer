<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
  public function boot()
  {
    view()->composer('website.layouts', function($view) {
        $info=DB::select('SELECT title as title,
                                       subtitle as subtitle,
                                       content as content FROM home where id=1');


        $appsetting=DB::select('SELECT
                                    Benfits,CustomerSay,linkedin_Url,twitter_Url,facebook_Url FROM appsetting ');

      $view->with(['info'=> $info[0],'appsetting'=>$appsetting[0]]);
    });
  }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
