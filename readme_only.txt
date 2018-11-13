
	This is the laravel framwork
	In order to start a project, you should have some step:
	1. Set database that you will use for your project
	 -> .env -> DB_DATABASE=your_database //database you will use for project
							DB_USERNAME=root //default
							DB_PASSWORD= 	 //default = Null

	2. Change the timezone that you are
	 -> config -> app.php -> 'timezone' => 'Asia/Ho_Chi_Minh',
	
	3. Create route 
	 in web.php -> Route::get('testindex','PageController@getTestIndex'); // example
	4. Create Controller
	 in cmd:  "php artisan make:controller YourController"
	5. Create Model
	 in cmd:  "php artisan make:model YourModel"
	4. Create view page
	 -> Resource -> view -> newfile
	