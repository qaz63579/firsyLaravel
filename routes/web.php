<?php

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

Route::get('/user/{id}', function ($id) {
    return 'user_id:' . $id;
});

Route::get('/hello','NewsController@hello');

//Route::resource('news','NewsController');

Route::get('/news/{id}','NewsController@show_id');


Route::get('/child','NewsController@child');


Route::get('/insert',function(){
	DB::insert('insert into news(title,description) values(?, ?)',['最新消息','這是一則勁爆的消息']);
});



use App\News;
Route::get('/read',function(){
    $posts = News::all();
    
    foreach($posts as $post){
        return $post->title . $post->description;
    };
});

Route::get('/find',function(){
	$post = News::find(2);
	return $post;
});

Route::get('/update',function(){
    $updated = DB::update('update news set title = "更新最新消息" where id = ?',[1]);
    return $updated;
});

Route::get('/delete',function(){
    $deleted = DB::delete('delete from news where id = ?',[1]);
    return $deleted;
});


Route::get('/findwhere' , function(){
	$post = News::where('id','>',0)->orderBy('title','desc')->get();
	return $post;
});

Route::get('/inserdata',function(){
    $post = new News;
    $post->title = 'goodjob';
    $post->description = '這是一則描述';
    $post->save();
});

Route::get('/create', function(){
    News::create(['title'=>'利用create新增的','description'=>'create的描述']);
});

//--------------------------------------------------------------------------------------

use App\BankAReceipt;

Route::get('/bankAinsert/{user_id}/{money}',function($user_id,$money)
{
    $post = new BankAReceipt;
    $post->user_id = $user_id;
    $post->money = $money;
    $post->save();
});

use App\BankBReceipt;

Route::get('/bankBinsert/{user_id}/{money}',function($user_id,$money)
{
    $post = new BankBReceipt;
    $post->user_id = $user_id;
    $post->money = $money;
    $post->save();
});


