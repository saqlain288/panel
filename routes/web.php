<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstprojectController;

Route::post('/insertData', [firstprojectController::class, 'dataAdd']);
Route::post('/sixpage', [firstprojectController::class, 'insertdata']);
Route::get('/tesla', [firstprojectController::class, 'showdata']);
Route::get('/del/{Name}',[FirstprojectController::class,'deldata']);
Route::get('/edit/{Name}',[FirstprojectController::class,'edit']);
Route::post('/update',[studentController::class,'updateData']);



Route::get('/firstpage', function () {
    return view('template.Dash');
});
Route::get('/secondpage', function () {
    return view('template.chart');
});
Route::get('/thirdpage', function () {
    return view('template.button');
});
Route::get('/fourthpage', function () {
    return view('template.table');
});
Route::get('/fifthpage', function () {
    return view('template.dropdown');
});
Route::get('/sixpage', function () {
    return view('template.elements');
});
Route::get('/sevenpage', function () {
    return view('template.icons');
});
Route::get('/ninepage', function () {
    return view('template.signup');
});
// Route::get('/tenpage', function () {
    return view('template.form');
//  });
?>