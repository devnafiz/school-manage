<?php

use App\Http\Controllers\Backend\DashboardController;
use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\ClassController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\HostelContoller;

use App\Http\Controllers\Backend\transport\VehicleController;
use App\Http\Controllers\Backend\transport\RouteController;
use App\Http\Controllers\Backend\transport\PicupPointController;

use App\Http\Controllers\Backend\Expense\ExpenseController;
use App\Http\Controllers\Backend\Expense\ExpenseCategoryController;

use App\Http\Controllers\Backend\Student\DReasonController;
use App\Http\Controllers\Backend\Student\StudentCategoryController;
use App\Http\Controllers\Backend\Student\StudentHouseController;
use App\Http\Controllers\Backend\Student\StudentController;


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

 Route::get('/hostel/room/type',[HostelContoller::class,'AllRoomtype'])->name('room.type.index');
 Route::post('/hostel/room/type',[HostelContoller::class,'roomTypeStore'])->name('room.type.store');
Route::get('/hostel/room',[HostelContoller::class,'hostelRoom'])->name('hostel.room.index'); 
 Route::post('/hostel/room/store',[HostelContoller::class,'roomStore'])->name('hostel.room.store'); 
 //vehicle

 Route::resource('vehicle',VehicleController::class);
 Route::resource('route',RouteController::class);

 Route::get('/all/route',[RouteController::class,'vehRoute'])->name('vehicle.route.index');
 Route::post('/vehicle/route/assign',[RouteController::class,'vehRouteAssaign'])->name('vehicle.route.store');
 Route::resource('/picup',PicupPointController::class);
 
 Route::get('/assign/picup-point',[PicupPointController::class,'picupPointRouteView'])->name('route.picup.point');
 Route::get('/assign/picup-point/add',[PicupPointController::class,'picupPointRouteAdd'])->name('route.picup.point.create');
  Route::post('/assign/picup-point/add',[PicupPointController::class,'picupPointRouteStore'])->name('route.picup.point.store');
   Route::get('/assign/picup-point/edit/{id}',[PicupPointController::class,'picupPointRouteEdit'])->name('route.picup.point.edit');
 Route::get('/picuppoint',[PicupPointController::class,'getPicupPoint'])->name('get-picupoint');

 //expense
 Route::resource('/expense', ExpenseController::class);
 Route::resource('/expensecategory', ExpenseCategoryController::class);
 Route::get('/search-expense',[ExpenseController::class,'searchExpense'])->name('search.expense');

 //student

 Route::resource('/disable-reason', DReasonController::class);
 Route::resource('/student-house', StudentHouseController::class);
 Route::resource('/studentCategory', StudentCategoryController::class);
 Route::resource('/student', StudentController::class);







