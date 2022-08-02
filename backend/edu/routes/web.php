<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Livewire\Admin\AddBlog;
use App\Http\Livewire\Admin\AddCategory;
use App\Http\Livewire\Admin\AddOffer;
use App\Http\Livewire\Admin\AddStudyDestination;
use App\Http\Livewire\Admin\AddUniversity;
use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Blog;
use App\Http\Livewire\Admin\Category;
use App\Http\Livewire\Admin\ChangePassword;
use App\Http\Livewire\Admin\ContactUs;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Offer;
use App\Http\Livewire\Admin\StudyDestination;
use App\Http\Livewire\Admin\University;
use App\Http\Livewire\Admin\UpdateBlog;
use App\Http\Livewire\Admin\UpdateOffer;
use App\Http\Livewire\Admin\UpdateProfile;
use App\Http\Livewire\Admin\UpdateStudyDestination;
use App\Http\Livewire\Admin\UpdateUniversity;
use App\Http\Livewire\Admin\Setting;
use App\Http\Livewire\Admin\UpdateCategory;
use App\Http\Livewire\Blog as LivewireBlog;
use App\Http\Livewire\BlogDetail;
use App\Http\Livewire\Home;
use App\Http\Livewire\Offer as LivewireOffer;
use App\Http\Livewire\StudyDestination as LivewireStudyDestination;
use App\Http\Livewire\University as LivewireUniversity;
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

Route::get('/', Home::class)->name('users.home');
Route::get('/blog', LivewireBlog::class)->name('users.blog');
Route::get('/blog-detail/{id}', BlogDetail::class)->name('users.blog-detail');
Route::get('/offer', LivewireOffer::class)->name('users.offer');
Route::get('/study-destination', LivewireStudyDestination::class)->name('users.destination');
Route::get('/university', LivewireUniversity::class)->name('users.university');
Route::post('/post/contact', [ContactFormController::class, 'index']);

Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', Login::class)->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('/admin/add/offer', AddOffer::class)->name('admin.add-offer');
    Route::get('/admin/get/offer', Offer::class)->name('admin.get-offer');
    Route::get('/admin/update/offer/{id}', UpdateOffer::class)->name('admin.update-offer');
    // study destination routes
    Route::get('/admin/add/destination', AddStudyDestination::class)->name('admin.add-destination');
    Route::get('/admin/get/destination', StudyDestination::class)->name('admin.get-destination');
    Route::get('/admin/update/destination/{id}', UpdateStudyDestination::class)->name('admin.update-destination');

    // Blog routes
    Route::get('/admin/add/blog', AddBlog::class)->name('admin.add-blog');
    Route::get('/admin/get/blog', Blog::class)->name('admin.get-blog');
    Route::get('/admin/update/blog/{id}', UpdateBlog::class)->name('admin.update-blog');

    // University routes
    Route::get('/admin/add/university', AddUniversity::class)->name('admin.add-university');
    Route::get('/admin/get/university', University::class)->name('admin.get-university');
    Route::get('/admin/update/university/{id}', UpdateUniversity::class)->name('admin.update-university');

    // category routes
    Route::get('/admin/add/category', AddCategory::class)->name('admin.add-category');
    Route::get('/admin/get/category', Category::class)->name('admin.get-category');
    Route::get('/admin/update/category/{id}', UpdateCategory::class)->name('admin.update-category');

    // admin profile
    Route::get('/admin/update/profile', UpdateProfile::class)->name('admin.update-profile');
    Route::get('/admin/change/password', ChangePassword::class)->name('admin.change-password');
    Route::get('/admin/setting', Setting::class)->name('admin.setting');

    // contact routes
    Route::get('/admin/contact', ContactUs::class)->name('admin.contact');
});
