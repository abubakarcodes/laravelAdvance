<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\OrderPaymentController;
use App\Http\Controllers\PostsController;
use App\PostCard;
use App\PostCardSendingSerivce;
use Illuminate\Support\Facades\Route;


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
Route::get('/channels' , [ChannelController::class , 'index']);
Route::get('posts/create' , [PostsController::class , 'create']);

Route::get('/payorder' , [OrderPaymentController::class , 'store']);


//with out facade
Route::get('/postcard', function(){
    $postcardservice = new PostCardSendingSerivce('us' , 30 , 20);
    $postcardservice->send_post_card('hello from postcard service', 'ali@gmail.com');
});



//postcard service using facade
Route::get('/facade-postcard' , function (){
    PostCard::send_post_card('hello from postcard service', 'ali@gmail.com');
});
