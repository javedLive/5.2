<?php


Route::get('/', function () {
	dd('ok');
    return view('welcome');
});


Route::get('/article/{id}',[
        'uses'=>'basicController@viewCount',
        'as'=>'viewer'
        ]);


Route::get('/all_user',function(){
	return view('all_user');
});

Route::get('all_user/{id}/{name}',function($id,$name){      // Here we pass the peremeter in url all_user
	return 'User '.$id." ".$name;                         // with the parameter id and name
});

Route::get('home','basicController@index'); // Here Home is the URL and it 
                                            //execute the basiccontroller index page
Route::get('about','basicController@about');

Route::resource('course','courseController');

Route::resource('chat','ChatController');
//Route::get('print', 'courseController@getPrint');
Route::get('excel',function(){
Excel::create('report',function($excel){
	$excel -> sheet('sheet1',function($sheet){
		for($i=1;$i<300;$i++){
			$sheet->row($i,array(
				'test1','test2','test3'
				));
		}
	});
})->store('xlsx','exports');
});

Route::get('/test',[
	'uses'=>'courseController@getTest',
	'as'=>'test'
	]);


Route::get('/pdf', [
       'uses' => 'courseController@createPdf',
        'as' => 'pdf'
    ]);

Route::get('/download',[
	'uses'=>'UserController@download',	
	'as'=>'download'
	]);

/*Route::group(['middleware' => ['web']], function () {
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
}); */
    

Route::group(['middleware' => 'web'], function () {
    

    Route::get('/', 'HomeController@index');
});
