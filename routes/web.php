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


Route::get('/activate/{token}', 'Auth\LoginController@activate')->name('activate');

Route::post('/sendmail', function(\Illuminate\Http\Request $request, Illuminate\Mail\Mailer $mailer){
    $mailer->to($request->input('email'))->send(new \App\Mail\MyMail($request->input('message')));
    return redirect()->back();
  })->name('sendmail');

Auth::routes();


Route::get('/add-to-cart/{id}',[
  'uses' => 'ShopController@getAddToCart',
  'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}',[
  'uses' => 'ShopController@getReduceByOne',
  'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}',[
  'uses' => 'ShopController@getRemoveItem',
  'as' => 'product.remove'
]);

Route::get('/shopping-cart',[
  'uses' => 'ShopController@getCart',
  'as' => 'product.shoppingCart'
]);

Route::get('/download/{id}',[
  'uses' => 'ShopController@download',
  'as' => 'product.download'
]);

Route::get('/delete/{id}',[
  'uses' => 'PostsController@delete',
  'as' => 'product.delete'
]);


//get image from storage
Route::get('storage/artwork/{id}','PostsController@artwork');
Route::get('storage/avatars/{id}','ProfilesController@avatar');

Route::group(['middleware' => ['auth', 'account_check']],function(){
  Route::get('/home', 'FeedsController@feed')->name('home');

    Route::get('/interest',[
        'uses' => 'HomeController@interest',
        'as' => 'interest'
      ]);

      /*Get image for download*/
      Route::get('/download/{id}',[
        'uses' => 'PostsController@download',
        'as' => 'product.download'
      ]);
    
      Route::get('/delete/{id}',[
        'uses' => 'PostsController@delete',
        'as' => 'product.delete'
      ]);
      
      Route::post('/interest',[
        'uses' => 'HomeController@postInterest',
        'as' => 'interest'
      ]);

      Route::get('/profile/{id}',[
        'uses' => 'ProfilesController@index',
        'as' => 'profile',
      ]);
    
      Route::get('/profile/edit/profile',[
        'uses' => 'ProfilesController@edit',
        'as' => 'profile.edit'
      ]);
    
      Route::post('/profile/update/profile',[
        'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
      ]);

      Route::post('/profile/chat/profile',[
        'uses' => 'ProfilesController@chat',
        'as' => 'chat'
      ]);

      //redirects to submit artwork page
      Route::get('/portfolio/submit/art',[
        'uses' => 'PostsController@submit_art_page',
        'as' => 'portfolio.submit'
      ]);

      // submits artwork
      Route::post('/portfolio/submit/art',[
        'uses' => 'PostsController@store_image',
        'as' => 'portfolio.store'
      ]);

      //redirects to update artwork page
      Route::get('/portfolio/update/{id}',[
        'uses' => 'PostsController@update_art_page',
        'as' => 'portfolio.update'
      ]);

      //filters artwork
      Route::get('/portfolio/filter/{id}',[
        'uses' => 'PostsController@filter',
        'as' => 'filter'
      ]);

      // submits artwork
      Route::post('/search',[
        'uses' => 'PostsController@search',
        'as' => 'search'
      ]);

      // submits artwork
      Route::post('/portfolio/update/art',[
        'uses' => 'PostsController@update_artwork',
        'as' => 'portfolio.update'
      ]);

      // critiques artwork
      Route::post('/crtique',[
        'uses' => 'CritiqueController@critique',
        'as' => 'critique'
      ]);

        //redirects to submit artwork page
      Route::get('/shop/index',[
        'uses' => 'ShopController@index',
        'as' => 'shop.index'
      ]);

      
      Route::get('/checkout',[
        'uses' => 'ShopController@getCheckout',
        'as' => 'checkout'
      ]);
  
      Route::post('/checkout',[
        'uses' => 'ShopController@postCheckout',
        'as' => 'checkout'
      ]);

      Route::get('/check_relationship_status/{id}', [
        'uses' => 'FriendshipsController@check',
        'as' => 'check'
      ]);

      Route::get('/follow/{id}', [
        'uses' => 'FriendshipsController@follow',
        'as' => 'follow'
      ]);
    
      Route::get('/unfollow/{id}', [
        'uses' => 'FriendshipsController@unfollow',
        'as' => 'unfollow'
      ]);

      Route::get('/get_strangers',[
        'uses' => 'FeedsController@get_Strangers',
        'as' => 'get_strangers'
      ]);

      Route::get('/explore/artists', [
        'uses' => 'FeedsController@getIndex',
        'as' => 'explore.artists'
        ]);

        Route::get('/favourite/{id}',[
          'uses' => 'FavouritesController@favourite',
          'as' => 'favourite'
        ]);
    
        Route::get('/unfavourite/{id}',[
          'uses' => 'FavouritesController@unfavourite',
          'as' => 'unfavourite'
        ]);

        Route::post('/create/comment/{id}',[
          'uses' => 'CommentController@comment'
        ]);
    
        Route::get('/hide_comment',[
          'uses' => 'CommentController@hide_comment'
        ]);
    
        Route::get('/commentThread/{id}',[
          'uses' => 'CommentThreadController@thread',
          'as' => 'commentThread'
        ]);
    
});

