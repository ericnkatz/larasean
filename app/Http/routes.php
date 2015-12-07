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


Route::get('demo/{group_urlname}', function($group) {

	$client = DMS\Service\Meetup\MeetupKeyAuthClient::factory(['key' => env('MEETUP_API_KEY')]);

	$members = $client->getMembers(['group_urlname' =>  $group, 'fields' => 'bio']);
	
	$members = $members->toArray();

	// dd($membersArray[0]);

	return view('members', ['members' => $members, 'group' => $group]);
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', 'PagesController@about');


Route::get('posts/create', 'PostsController@create');

Route::post('posts/create', 'PostsController@store');

Route::get('posts/{id}/{slug}', function($id, $slug) {
	
	$post = App\Post::find($id);

	if($post && $post->slug === $slug) {
		return $post;
	}

});

