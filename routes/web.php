<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');


//Events
Route::get('envdetails.events/{id}', [App\Http\Controllers\Event\EventController::class, 'events'])->name('envdetails.events');
Route::post('envdetails.booking/{id}', [App\Http\Controllers\Event\EventController::class, 'eventsBooking'])->name('envdetails.events.booking');
Route::get('envdetails.sucess', [App\Http\Controllers\Event\EventController::class, 'eventsBooking'])->name('envdetails.events.sucess');

//Users
Route::get('users.my-events', [App\Http\Controllers\Users\UsersController::class, 'myEvents'])->name('users.myevents')->middleware('auth:web');

//Blog
Route::get('pages.blogdetails/{id}', [App\Http\Controllers\Blog\BlogController::class, 'blogs'])->name('pages.blogdetails');


//admin panel
Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewLogin'])->name('view.login');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('check.login');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function(){


    Route::get('/index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');

    //Admins
    Route::get('/all-admins', [App\Http\Controllers\Admins\AdminsController::class, 'allAdmins'])->name('admins.all');
    Route::get('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
    Route::post('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');


    //Podcast
    Route::get('/all-podcast', [App\Http\Controllers\Admins\AdminsController::class, 'allPodcast'])->name('podcasts.all');
    Route::get('/create-podcast', [App\Http\Controllers\Admins\AdminsController::class, 'createPodcast'])->name('podcasts.create');
    Route::post('/create-podcast', [App\Http\Controllers\Admins\AdminsController::class, 'storePodcast'])->name('podcasts.store');
    Route::get('/edit-podcast/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'editPodcast'])->name('podcasts.edit');
    Route::post('/update-podcast/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updatePodcast'])->name('podcasts.update');
    Route::get('/delete-podcast/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deletePodcast'])->name('podcasts.delete');

    //Events
    Route::get('/all-events', [App\Http\Controllers\Admins\AdminsController::class, 'allEvents'])->name('events.all');
    Route::get('/create-events', [App\Http\Controllers\Admins\AdminsController::class, 'createEvents'])->name('events.create');
    Route::post('/create-events', [App\Http\Controllers\Admins\AdminsController::class, 'storeEvents'])->name('events.store');
    Route::get('/delete-events/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteEvent'])->name('events.delete');

    //Blogs
    Route::get('/all-blogs', [App\Http\Controllers\Admins\AdminsController::class, 'allBlog'])->name('blogs.all');
    Route::get('/create-blogs', [App\Http\Controllers\Admins\AdminsController::class, 'createBlog'])->name('blogs.create');
    Route::post('/create-blogs', [App\Http\Controllers\Admins\AdminsController::class, 'storeBlog'])->name('blogs.store');
    Route::get('/delete-blogs/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteBlog'])->name('blogs.delete');


    //bookings And Blog Display
    Route::get('/all-bookings', [App\Http\Controllers\Admins\AdminsController::class, 'allBookings'])->name('bookings.all');
    Route::get('/edit-status/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'editStatus'])->name('bookings.edit.status');
    Route::post('/update-status/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'updateStatus'])->name('bookings.update.status');
    Route::get('/delete-bookings/{id}', [App\Http\Controllers\Admins\AdminsController::class, 'deleteBookings'])->name('bookings.delete');


});









//keep for later use

// Route::group(['prefix' => 'name of group'], function(){
//     Route::get('envdetails.sucess', [App\Http\Controllers\Event\EventController::class, 'eventsBooking'])->name('envdetails.events.sucess');
// });

