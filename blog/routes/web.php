<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberProcessController;
use App\Http\Controllers\ListClassController;
use App\Http\Controllers\ListClassTrainerController;
use App\Http\Controllers\ListMachineController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\ProductController;
  
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
  
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/member_process',[MemberProcessController::class, 'init'])->name('member.init');
Route::get('/list_class_process',[ListClassController::class, 'init'])->name('list_class.init');
Route::get('/list_class_process',[ListClassTrainerController::class, 'init'])->name('list_class_trainer.init');
Route::get('/list_machine_process',[ListMachineController::class, 'init'])->name('list_machine.init');
Route::get('/check_in_process',[CheckInController::class, 'init'])->name('check_in.init');

Route::get('/member_view ', function() {
    return view('member.init');
})->name('member.view');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

Route::get('/trainer', function () {
    return view('Trainer.trainer');
});

Route::get('/member', function () {
    return view('Member.member');
})->name('member');

Route::get('/class_list', function () {
    return view('Member.classlist');
})->name('classlist');

Route::get('/class_list_trainer', function () {
    return view('Trainer.classlisttrainer');
})->name('classlisttrainer');

Route::get('/machine_list', function () {
    return view('Trainer.machinelist');
})->name('machinelist');

Route::get('/check_in_history', function () {
    return view('Member.checkinhistory');
})->name('checkin');