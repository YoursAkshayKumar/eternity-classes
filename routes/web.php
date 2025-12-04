<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;



Route::group(['prefix' => env('ADMIN_URL_PREFIX')], function () {
    
  //----------------- Users Auth -------------//
  Route::get('/login', [App\Http\Controllers\AdminControllers\AuthAdminController::class, 'login'])->name('login');
  Route::post('/login', [App\Http\Controllers\AdminControllers\AuthAdminController::class, 'loginValidate']);
  Route::get('/logout', [App\Http\Controllers\AdminControllers\AuthAdminController::class, 'logout'])->name('logout.perform');

  Route::get('/', [App\Http\Controllers\AdminControllers\HomeController::class, 'dashboard'])->middleware('auth');
  Route::get('/dashboard', [App\Http\Controllers\AdminControllers\HomeController::class, 'dashboard'])->middleware('auth');

  //---------- Admin User Section --------------// 
  Route::get('/admin-users', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'listAdminUsers'])->middleware('auth');
  Route::post('/admin-user-ajax-load', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'loadAdminUserList'])->middleware('auth');
  Route::get('/admin-user-add', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'viewAdminUserAddPage'])->middleware('auth');
  Route::post('/admin-user-add', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'addAdminUser'])->middleware('auth');
  Route::get('/admin-user-edit/{id}', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'viewAdminUserEditPage'])->middleware('auth');
  Route::post('/admin-user-edit', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'editAdminUser'])->middleware('auth');
  Route::get('/admin-user-delete/{id}', [App\Http\Controllers\AdminControllers\AdminUsersController::class, 'deleteAdminUser'])->middleware('auth');
  

  //----------- Students Section ------------//
 
  //----------- Blogs Section ------------//
  Route::get('/blogs', [App\Http\Controllers\AdminControllers\BlogsController::class, 'listBlogs'])->middleware('auth');
  Route::post('/blog-ajax-load', [App\Http\Controllers\AdminControllers\BlogsController::class, 'loadBlogList'])->middleware('auth');
  Route::get('/blog-add', [App\Http\Controllers\AdminControllers\BlogsController::class, 'viewBlogAddPage'])->middleware('auth');
  Route::post('/blog-add', [App\Http\Controllers\AdminControllers\BlogsController::class, 'addBlog'])->middleware('auth');
  Route::get('/blog-edit/{id}', [App\Http\Controllers\AdminControllers\BlogsController::class, 'viewBlogEditPage'])->middleware('auth');
  Route::post('/blog-edit', [App\Http\Controllers\AdminControllers\BlogsController::class, 'editBlog'])->middleware('auth');
  Route::get('/blog-delete/{id}', [App\Http\Controllers\AdminControllers\BlogsController::class, 'deleteBlog'])->middleware('auth');
 
  //----------- Enrollments Section ------------//
  Route::get('/enrollments', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'listEnrollments'])->middleware('auth');
  Route::post('/enrollment-ajax-load', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'loadEnrollmentList'])->middleware('auth');
  Route::get('/enrollment-details/{id}', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'viewEnrollmentDetails'])->middleware('auth');
  Route::post('/enrollment-update-status', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'updateEnrollmentStatus'])->middleware('auth');
  Route::post('/enrollment-update-notes', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'updateEnrollmentNotes'])->middleware('auth');
  Route::get('/enrollment-delete/{id}', [App\Http\Controllers\AdminControllers\EnrollmentsController::class, 'deleteEnrollment'])->middleware('auth');

  //----------- Newsletter Subscriptions Section ------------//
  Route::get('/newsletter-subscriptions', [App\Http\Controllers\AdminControllers\NewsletterSubscriptionsController::class, 'listNewsletterSubscriptions'])->middleware('auth');
  Route::post('/newsletter-ajax-load', [App\Http\Controllers\AdminControllers\NewsletterSubscriptionsController::class, 'loadNewsletterList'])->middleware('auth');
  Route::post('/newsletter-update-status', [App\Http\Controllers\AdminControllers\NewsletterSubscriptionsController::class, 'updateNewsletterStatus'])->middleware('auth');
  Route::get('/newsletter-delete/{id}', [App\Http\Controllers\AdminControllers\NewsletterSubscriptionsController::class, 'deleteNewsletterSubscription'])->middleware('auth');

});


Route::get('/', [App\Http\Controllers\FrontControllers\HomeController::class, 'home']);
Route::get('/home2', [App\Http\Controllers\FrontControllers\HomeController::class, 'home2']);
Route::get('/about', [App\Http\Controllers\FrontControllers\HomeController::class, 'about']);
Route::get('/courses', [App\Http\Controllers\FrontControllers\HomeController::class, 'courses']);
Route::get('/contact', [App\Http\Controllers\FrontControllers\HomeController::class, 'contact']);
Route::get('/blogs', [App\Http\Controllers\FrontControllers\BlogsController::class, 'blogs']);
Route::get('/blog/{slug}', [App\Http\Controllers\FrontControllers\BlogsController::class, 'blogDetails']);

// Newsletter subscription
Route::post('/newsletter/subscribe', [App\Http\Controllers\FrontControllers\HomeController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');

// Enrollment form submission
Route::post('/enrollment/submit', [App\Http\Controllers\FrontControllers\HomeController::class, 'submitEnrollment'])->name('enrollment.submit');

