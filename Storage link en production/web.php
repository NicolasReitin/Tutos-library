<?php
/*
use Illuminate\Support\Facades\Artisan;
| Web Routes
*/
    Route::get('/linkstorage', function () {
        Artisan::call('storage:link');  // appeler la facade : use Illuminate\Support\Facades\Artisan;

    }); 