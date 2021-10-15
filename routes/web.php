<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use Livewire\Component;
use App\Http\Livewire\LiveWatch;
use App\Http\Livewire\MediaUploadComponent;
use App\Http\Livewire\DiseasesComponent;
use App\Http\Livewire\ModulesComponent;
use App\Http\Livewire\IntervensionsComponent;
use App\Http\Livewire\ContactsComponent;
use App\Http\Livewire\ReportsComponent;
use App\Http\Livewire\OrganizationsComponents;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([Authenticate::class])->group(function(){
 
    // Frontend guest routes
    Route::get('/organizations', OrganizationsComponents::class);
    Route::get('/contacts', ContactsComponent::class);
    Route::get('/reports', ReportsComponent::class);
    Route::get('/modules', ModulesComponent::class);
    Route::get('/intervensions', IntervensionsComponent::class);
    Route::get('/diseases', DiseasesComponent::class);
    Route::get('/live-trending-watch', LiveWatch::class);
    Route::get('/live-watch', LiveWatch::class); 
    Route::get('/super-admin', MediaUploadComponent::class); 
 
});
