<?php
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);
Route::resource('/contents', 'ContentController');
Route::get('/games/create', 'GameController@create')->name('games.create');
Route::post('/games', 'GameController@store')->name('games.store');
Route::get('/potluck', 'PotLuckGameController@index')->name('potluck');
// Route::get('potluck/{$id}', 'PotluckGameController@show');

Route::view('/', 'welcome')->name('welcome');

// Contact Form
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact','ContactFormController@create')->name('contact');

Route::get('/home', 'HomeController@index')->name('home')->middleware();
Route::view('/hobbyist', 'hobbyist');
Route::view('/commercial', 'commercial');

// Giveaway Contests
Route::view('/contest-entries', 'contest-entries');
Route::get('/contest-entries/{uuid}', 'ContestEntryController@confirm');
Route::get('/giveaways', 'GiveawayController@index');

// Seed Shop routes
Route::name('seeds.')->group( function () {
Route::get('/seeds', 'SeedShopController@index')->name('index');
});

//CMS Routes Group
Route::name('cms.')->prefix('/cms')->middleware(['auth', 'verified'])->group( function () {
    // Seeds CMS Routes
    Route::get('/seeds', 'SeedController@index')->name('seeds.index');
    Route::get('/seeds/new', 'SeedController@create')->name('seeds.create');
    Route::get('/seeds/{id}', 'SeedController@show')->name('seeds.show');
    Route::put('/seeds/{id}', 'SeedController@update')->name('seeds.update');
    Route::delete('/seeds/{id}', 'SeedController@delete')->name('seeds.destroy');

    // Seed Companies Routes
    Route::get('/seed-companies', 'BreederController@index')->name('seed-companies.index');
    Route::get('/seed-companies/new', 'BreederController@create')->name('seed-companies.create');
    Route::get('/seed-companies/{id}', 'BreederController@show')->name('seed-companies.show');
    Route::put('/seed-companies/{id}', 'BreederController@update')->name('seed-companies.update');
    Route::delete('/seed-companies/{id}', 'BreederController@delete')->name('seed-companies.destroy');

    // Strains CMS Routes
    Route::get('/strains', 'StrainController@index')->name('strains.index');
    Route::get('/strains/new', 'StrainController@create')->name('strains.create');
    Route::get('/strains/{id}', 'StrainController@show')->name('strains.show');
    Route::put('/strains/{id}', 'StrainController@update')->name('strains.update');
    Route::delete('/strains/{id}', 'StrainController@delete')->name('strains.destroy');


});
Route::get('/strains', 'StrainController@index')->name('strains.index');
Route::get('/strains/{uuid}', 'StrainController@show')->name('strains.show');
Route::get('/breeders', 'BreederController@index')->name('breeders.index');
Route::get('/breeders/{uuid}', 'BreederController@show')->name('breeders.show');
Route::get('search', 'SearchApiController@filter');
//////////////////////////////////////////////////////////
// For scraping data from Cannabis Reports. Thanks, folks!
//////////////////////////////////////////////////////////
Route::get('/scrape-strains', 'Ingestion\CannabisReportsController@scrape');
Route::get('/scrape-seed-companies-details', 'Ingestion\CannabisReportsController@seedco');
Route::get('/scrape-strain-details', 'Ingestion\CannabisReportsController@getStrainDetails');
