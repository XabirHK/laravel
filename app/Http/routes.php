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

// Route::get('/', function () {
//     $people=['Zabir','Haider','Khan'];
//     return view('welcome', compact('people'));

// });



// Route::get('about', function () {
//     return view('pages.about');
// });




//for adding middleware in routs, Althou new laravel autometacally add them i think
/*Route::group(['middleware'=>['web']], function(){

});
*/


	Route::get('/','PagesController@home');
	Route::get('about','PagesController@about');
	Route::get('cards','CardsController@display');
	Route::get('cards/{card}','CardsController@showSingle');
	Route::post('cards/{card}/notes', 'NotesController@addNote');
	Route::get('notes/{note}/edit', 'NotesController@edit');
	Route::patch('notes/{note}', 'NotesController@update');