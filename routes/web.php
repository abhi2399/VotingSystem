<?php




Route::get('/', function () {
    return view('welcome');
})->middleware('checklogin');


Route::get('/default.admin',function()
{
	return view('admin');
});

Route::get('/index',function()
{
	return view('index', ['name' => session('name')]);
})->middleware('checklogin');

Route::get('/login',function()
{
	return view('login');
});

Route::get('/election',function()
{
	return view('election', ['name' => session('name')]);
})->middleware('checklogin');

Route::get('/cdashboard',function()
{
	return view('cdashboard');
})->middleware('checklogin');

Route::get('/profile',function()
{
	return view('profile',['name' => session('name')]);
})->middleware('checklogin');


Route::post('/insertvoter' ,'ApiController@insertvoterlist');
Route::post('/insertcandidate','ApiController@insertcandidatelist');
Route::post('/insertelection', 'ApiController@insertelection');

Route::post('/deletevoter', array('uses'=>'ApiController@deletevoter'));
Route::post('/deletecandidate', array('uses'=>'ApiController@deletecandidate'));


Route::get('/default.admin', 'ApiController@old');

Route::post('/index', 'ApiController@loginvoter');
Route::post('/cdashboard', 'ApiController@logincandidate');

Route::post('/validvoter', 'ApiController@validatevoter');

Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

?>