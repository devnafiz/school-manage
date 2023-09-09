<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\ClassController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\HostelContoller;


// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });


 Route::resource('section',SectionController::class); 
 
 Route::resource('class',ClassController::class); 
 Route::resource('subject',SubjectController::class); 

 Route::get('/hostel/list',[HostelContoller::class,'index'])->name('hostel.index'); 
 Route::post('/hostel/store',[HostelContoller::class,'store'])->name('hostel.store'); 
