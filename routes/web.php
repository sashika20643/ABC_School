<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subjectcontroller;
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
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/home', function () {
        return view('Admin.index');
    });
    Route::get('/subject/create', function () {
        return view('Admin.AddSubject');
    });
    Route::get('/subject', function () {
        $data=App\Models\subject::all();
        return view('Admin.Subjects')->with('subjects',$data);
    });
    Route::get('/subject/view/{$id}', function () {
        $data=App\Models\subject::where('id',$id)->get();

        return view('Admin.subjectView')->with('subject',$data);
    });

    Route::post('controller/subject/create',[Subjectcontroller::class, 'addSubject']);

});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
