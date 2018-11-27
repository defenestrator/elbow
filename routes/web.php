<?php
use Illuminate\Support\Facades\Route;

Route::name('seeds.')->domain('seeds.' . config('app.domain') )->group( function () {
    Route::get('/', 'SeedShopController@index')->name('index');
});


Route::domain( config('app.domain') )->group( function () {
    Auth::routes(['verify' => true]);
    Route::view('/', 'welcome')->name('welcome');
// Contact Form
    Route::view('/contact', 'contact')->name('contact');
    Route::post('/contact','ContactFormController@create')->name('contact');

    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::view('/hobbyist', 'hobbyist');
    Route::view('/commercial', 'commercial');

    Route::view('/contest-entries', 'contest-entries');
    Route::get('/contest-entries/{uuid}', 'ContestEntryController@confirm');

    Route::get('/activate/please', 'Auth\ActivationController@please');
    Route::get('/resendEmail', 'Auth\ActivationController@resendEmail');
    Route::get('/activate/{code}', 'Auth\ActivationController@activateAccount');
    Route::get('/giveaways', 'GiveawayController@index');

//////////////////////////////////////////////////////////
// For scraping data from Cannabis Reports. Thanks, folks!
//////////////////////////////////////////////////////////
    Route::get('/scrape-strains', 'Ingestion\CannabisReportsController@scrape');
    Route::get('/scrape-seed-companies-details', 'Ingestion\CannabisReportsController@seedco');
});
