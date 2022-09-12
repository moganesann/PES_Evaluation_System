<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarkingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\RubricController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CalculateController;

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

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return Redirect::to("/login");
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stdhome', [App\Http\Controllers\HomeController::class, 'std'])->name('student');
Route::get('/svhome', [App\Http\Controllers\HomeController::class, 'sv'])->name('supervisor');
Route::get('/evhome', [App\Http\Controllers\HomeController::class, 'ev'])->name('supervisor/evaluator');
Route::get('/chome', [App\Http\Controllers\HomeController::class, 'coordinator'])->name('coordinator');



Route::group(['middleware' => ['auth', 'dataList']], function() {
//Manage data Entry---------------------------------------------------------------
Route::get('/cviewdata', [DataController::class, 'cview']);
Route::get('/lviewdata', [DataController::class, 'lview']);
Route::get('/sviewdata', [DataController::class, 'sview']);

Route::get('/adddata', [DataController::class, 'adddata']);
Route::post('/viewd', [DataController::class, 'storedata']);

Route::get('/deletedata/{std_id}', [DataController::class, 'deletedata']);

Route::get('/updatedata/{std_id}', [DataController::class, 'showdata']);
Route::post('/updatedata', [DataController::class, 'updatedata']);

});

//Manage data Entry---------------------------------------------------------------



Route::group(['middleware' => ['auth', 'scheduleList']], function() {
//Schedule List---------------------------------------------------------------
Route::get('/ViewScheduleForm', [ScheduleController::class, 'viewschedule']);
Route::get('/SetScheduleForm', [ScheduleController::class, 'setschedule']);
Route::post('/AddScheduleForm', [App\Http\Controllers\ScheduleController::class, 'Saveschedule'])->name('save.schedule');
Route::get('/UpdateScheduleForm/{schedule_id}', [App\Http\Controllers\ScheduleController::class, 'updateschedule'])->name('update.schedule');
Route::get('/DeleteScheduleForm/{schedule_id}', [App\Http\Controllers\ScheduleController::class, 'deleteschedule'])->name('delete.schedule');
Route::post('/EditScheduleForm', [App\Http\Controllers\ScheduleController::class, 'editschedule'])->name('edit.schedule');
Route::get('/skdhome', [App\Http\Controllers\ScheduleController::class, 'schedule']);
Route::get('/StdLectViewScheduleForm', [ScheduleController::class, 'stdlectskdview']);

});
//Schedule List--------------------------------------------------------------------------------


//Rubric List------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth', 'rubricList']], function() {

Route::get('/svviewrubrichome', [RubricController::class, 'svview']);
Route::get('/stdviewrubrichome', [RubricController::class, 'stdview']);
Route::get('/cviewrubrichome', [RubricController::class, 'cordview']);

Route::get('/cpsm11', [RubricController::class, 'cordpsm11']);
Route::get('/cpsm12', [RubricController::class, 'cordpsm12']);
Route::get('/cpsm13', [RubricController::class, 'cordpsm13']);
Route::get('/cpsm21', [RubricController::class, 'cordpsm21']);
Route::get('/cpsm22', [RubricController::class, 'cordpsm22']);
Route::get('/cpsm23', [RubricController::class, 'cordpsm23']);
Route::get('/cpta1', [RubricController::class, 'cordpta11']);
Route::get('/cpta2', [RubricController::class, 'cordpta12']);
Route::get('/cpta3', [RubricController::class, 'cordpta13']);

Route::get('/stdpsm11', [RubricController::class, 'stdpsm11']);
Route::get('/stdpsm12', [RubricController::class, 'stdpsm12']);
Route::get('/stdpsm13', [RubricController::class, 'stdpsm13']);
Route::get('/stdpsm21', [RubricController::class, 'stdpsm21']);
Route::get('/stdpsm22', [RubricController::class, 'stdpsm22']);
Route::get('/stdpsm23', [RubricController::class, 'stdpsm23']);
Route::get('/stdpta1', [RubricController::class, 'stdpta11']);
Route::get('/stdpta2', [RubricController::class, 'stdpta12']);
Route::get('/stdpta3', [RubricController::class, 'stdpta13']);

Route::get('/spsm11', [RubricController::class, 'spsm11']);
Route::get('/spsm12', [RubricController::class, 'spsm12']);
Route::get('/spsm13', [RubricController::class, 'spsm13']);
Route::get('/spsm21', [RubricController::class, 'spsm21']);
Route::get('/spsm22', [RubricController::class, 'spsm22']);
Route::get('/spsm23', [RubricController::class, 'spsm23']);
Route::get('/spta1', [RubricController::class, 'spta11']);
Route::get('/spta2', [RubricController::class, 'spta12']);
Route::get('/spta3', [RubricController::class, 'spta13']);

Route::get('/addrubricss', [RubricController::class, 'addrubrics']);

Route::post('/viewrubric', [RubricController::class, 'store']);

Route::get('/delete/{rubricid}', [RubricController::class, 'deleterub']);
Route::get('/update/{rubricid}', [RubricController::class, 'show']);
Route::post('/updaterubric', [RubricController::class, 'update']);
});
//Rubric List----------------------------------------------------------------------------------


Route::group(['middleware' => ['auth', 'markList']], function() {
//Manage Marks----------------------------------------------------------------------------------

Route::get('/evaluationhome', [MarkingController::class, 'mainmark']); 
Route::get('/svmain', [MarkingController::class, 'svmain']); 
Route::get('/evmain', [MarkingController::class, 'evmain']);

//first evaluation
Route::get('/addmarks1/{std_id}', [MarkingController::class, 'addmarks1']); //first evaluation
Route::post('/markedlist1', [MarkingController::class, 'store']); //first evaluation

Route::get('/updatemarks1/{std_id}', [MarkingController::class, 'showupd1']); //first evaluation
Route::post('/update1', [MarkingController::class, 'updatemarks1']); //first evaluation
 
Route::get('/markedlist1', [MarkingController::class, 'markedlist1']); //first evaluation
Route::get('/unmarkedlist1', [MarkingController::class, 'unmarkedlist1']); //first evaluation

Route::get('/delete1/{ev_id}', [MarkingController::class, 'deletemark1']); //first evaluation


Route::get('/main1', [MarkingController::class, 'main1']); //first evaluation

//second evaluation

Route::get('/addmarks2/{std_id}', [MarkingController::class, 'addmarks2']); //second evaluation
Route::post('/markedlist2', [MarkingController::class, 'store2']); //second evaluation

Route::get('/updatemarks2/{std_id}', [MarkingController::class, 'showupd2']); //second evaluation
Route::post('/update2', [MarkingController::class, 'updatemarks2']); //second evaluation

Route::get('/markedlist2', [MarkingController::class, 'markedlist2']); //first evaluation
Route::get('/unmarkedlist2', [MarkingController::class, 'unmarkedlist2']); //first evaluation

Route::get('/delete2/{ev_id}', [MarkingController::class, 'deletemark2']); //first evaluation


Route::get('/main2', [MarkingController::class, 'main2']); //second evaluation

//third evaluation

Route::get('/addmarks3/{std_id}', [MarkingController::class, 'addmarks3']); //third evaluation
Route::post('/markedlist3', [MarkingController::class, 'store3']); //third evaluation

Route::get('/updatemarks3/{std_id}', [MarkingController::class, 'showupd3']); //third evaluation
Route::post('/update3', [MarkingController::class, 'updatemarks3']); //third evaluation

Route::get('/markedlist3', [MarkingController::class, 'markedlist3']); //third evaluation
Route::get('/unmarkedlist3', [MarkingController::class, 'unmarkedlist3']); //third evaluation

Route::get('/delete3/{ev_id}', [MarkingController::class, 'deletemark3']); //third evaluation


Route::get('/main3', [MarkingController::class, 'main3']); //third evaluation
 
//Manage Marks----------------------------------------------------------------------------------------
});


//Report List-----------------------------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth', 'reportList']], function() {
    Route::get('/stdprogress', [ReportController::class, 'studentview']);
    Route::get('/svprogress', [ReportController::class, 'svview']);
    Route::get('/maincord', [ReportController::class, 'cordview2']);
    Route::get('/mainsv', [ReportController::class, 'svview2']);
    Route::get('/cordreport', [ReportController::class, 'cordviewreport']);
    Route::get('/svreport', [ReportController::class, 'svviewreport']);
    Route::get('/search',[App\Http\Controllers\ReportController::class, 'search'])->name('projects.search');
    Route::get('/up/{std_id}', [ReportController::class, 'comshow']);
    Route::post('/updatecomment', [ReportController::class, 'updatecom']);
    Route::get('/download-pdf', [ReportController::class, 'downloadPDF']);
    Route::get('/search99',[App\Http\Controllers\ReportController::class, 'searchstd'])->name('projectsvr.search');
    
    });
//Report List--------------------------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Top 20
Route::group(['middleware' => ['auth', 'reportList']], function() {

    Route::get('/top-20-students', [CalculateController::class, 'calcTop20'])->name('top.20.students');
});