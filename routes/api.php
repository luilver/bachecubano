<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Within this group, the `/api` URI prefix is automatically applied so you do not need to manually apply it to every route in the file
|
*/

//MailGun Routes WebHook for LaChopi Incoming Requests
/*
Route::group(['prefix' => 'mailgun',], function () {
    Route::post('widgets', 'MailgunWidgetsController@store');
});
*/

//SubDomain Mapping
Route::group(['domain' => 'api.bachecubano.com'], function () {
    Route::group(['prefix' => 'v1'], function () {
        //Get Categories
        Route::get('categories', 'Api\AdsController@get_categories')->name('api_get_categories');
        //Get Ads From certain Category
        Route::get('ads/{category_id}', 'Api\AdsController@get_ads')->name('api_get_ads');
        //Get Specific Ad
        Route::get('ad/{ad_id}', 'Api\AdsController@get_ad')->name('api_get_ad');
        //Sitemap Creator
        Route::get('sitemap', 'Api\SitemapController@sitemap_index')->name('sitemap_index');
        //Search model
        Route::get('search', 'Api\AdsController@search')->name('api_search');
        //Like/Dislike behavior
        Route::get('like/{ad}', 'Api\LikeController@like')->name('ad_like');
        //Like/Dislike behavior
        Route::get('dislike/{ad}', 'Api\LikeController@dislike')->name('ad_dislike');
    });
});

//Version 1.0 API This has to be remved when go to production Just Testing Here at localhost
Route::group(['prefix' => 'v1'], function () {
    //Get Categories
    Route::get('categories', 'Api\AdsController@get_categories')->name('api_get_categories');
    //Get Ads From certain Category
    Route::get('ads/{category_id}', 'Api\AdsController@get_ads')->name('api_get_ads');
    //Get Specific Ad
    Route::get('ad/{ad_id}', 'Api\AdsController@get_ad')->name('api_get_ad');
    //Mailable View
    Route::get('mailable', 'Api\MailableController@view');
    //Sitemap Creator
    Route::get('sitemap', 'Api\SitemapController@sitemap_index')->name('sitemap_index');
    //Search model
    Route::get('search', 'Api\AdsController@search')->name('api_search');

    //Like/Dislike behavior
    Route::get('like/{ad}', 'Api\LikeController@like')->name('ad_like');
    //Like/Dislike behavior
    Route::get('dislike/{ad}', 'Api\LikeController@dislike')->name('ad_dislike');
});

//Save Image from AJAX Calls and API implementation
Route::get('show-image', 'Api\ImageController@index')->name('show-image-ajax');
Route::post('save-image', 'Api\ImageController@save')->name('save-image-ajax');
Route::post('delete-image', 'Api\ImageController@destroy')->name('delete-image-ajax');
