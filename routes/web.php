<?php




Route::get('/', function () {
    return view('welcome');
});
Route::get('/default.admin',function()
{
	return view('admin');
});
Route::get('/index',function()
{	
	return view('index');
})->middleware('Auth');
Route::get('/login',function()
{
	return view('login');
});
Route::get('/election',function()
{
	return view('election');
});
Route::get('/cdashboard',function()
{
	return view('cdashboard');
});
Route::get('/profile',function()
{
	return view('profile');
});
Route::get('/profile1',function()
{
	return view('profile1');
});

Route::post('/insertvoter' ,'ApiController@insertvoterlist');
Route::post('/insertcandidate','ApiController@insertcandidatelist');
Route::post('/insertelection', 'ApiController@insertelection');

Route::post('/deletevoter', array('uses'=>'ApiController@deletevoter'));
Route::post('/deletecandidate', array('uses'=>'ApiController@deletecandidate'));


Route::get('/default.admin', 'ApiController@old');

Route::post('/checkvoter', 'ApiController@loginvoter');
Route::post('/checkcandidate', 'ApiController@logincandidate');

Route::post('/validvoter', 'ApiController@validatevoter');


?>