<?php

use App\Jobs\SendEmailJob;
use Carbon\Carbon;


Route::get('/', function () {
    return view('welcome');
});

Route::get('sendEmail',function(){

                $job = (new SendEmailJob())
                ->delay(Carbon::now()->addSeconds(5));

                    dispatch($job);
    return 'email is send properly';
});
