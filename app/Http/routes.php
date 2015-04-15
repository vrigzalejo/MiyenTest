<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


get( '/', array( 'as' => 'test.index', 'uses' => 'VrigzTestController@index' ) );
post( '/', array( 'as' => 'test.store', 'uses' => 'VrigzTestController@store' ) );
delete( '/{id}', array( 'as' => 'test.destroy', 'uses' => 'VrigzTestController@destroy' ) );

post( 'upload', array( 'as' => 'test.upload', 'uses' => 'VrigzTestController@upload' ) );
delete( 'upload/{image}', array( 'as' => 'test.upload_delete', 'uses' => 'VrigzTestController@uploadDelete' ) );


















//Route::get('/', function() {
//    $fi = new FilesystemIterator(__DIR__ , FilesystemIterator::SKIP_DOTS);
//    printf("There were %d Files", iterator_count($fi));
//
//    dd( __DIR__ . '../');

//    return (scandir('../public/uploads'));


//    return (unlink('../public/uploads/testing.txt'));
//});
