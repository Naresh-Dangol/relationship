<?php

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post','PostController@index')->name('post');

Route::get('/add-new-article', 'ArticleController@new_article_form');
Route::post('/add-new-article-record','ArticleController@add_new_article');
Route::get('/edit-article/{id}','ArticleController@edit_article_form');
Route::post('/update-article-record','ArticleController@update_article_record')->name('article-update');

Route::get('/get-student/{id}',function($id){
	$student = App\Student::find($id);
	$studies = $student->studies;
	foreach($studies as $key => $study){
		echo $study->subject->subject."<br>";
	}
});

Route::get('/test',function(){
	//$current = Carbon::yesterday();
	//$current = new Carbon('first day of jan 2017');
	$current = Carbon::now();
	$trialExpires = $current->addDays(30);
	dd($current,$trialExpires);
});