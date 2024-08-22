<?php

 
use App\Events\TestEvent;
use App\Events\VotingEvent;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SiagaController;
use App\Http\Controllers\Backend\PenggalangController;
use App\Http\Controllers\Backend\PenegakController;
use App\Http\Controllers\Backend\JurusanController;
use App\Http\Controllers\Backend\KandidatController;
use App\Http\Controllers\Backend\KelasController;
use App\Http\Controllers\Backend\PemilihController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\Frontend\DashboardController as FrontendDashboardController;
use App\Http\Controllers\Frontend\VotingController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AwalController;
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

Route::get('send-notif/{name}', function ($name) {
    event(new VotingEvent($name));
    return "Event has been sent!";
});

Route::get('/', [WelcomeController::class,'index'])->name('index');
Route::get('/kandidatv', [WelcomeController::class,'kandidatv'])->name('kandidatv');
//untuk hasil nilai
Route::get('/lkbb', [WelcomeController::class,'lkbb'])->name('lkbb');
Route::get('/pu', [WelcomeController::class,'pu'])->name('pu');
Route::get('/pa', [WelcomeController::class,'pa'])->name('pa');
Route::get('/pk', [WelcomeController::class,'pk'])->name('pk');
Route::get('/bank', [WelcomeController::class,'bank'])->name('bank');
Route::get('/isyarat', [WelcomeController::class,'isyarat'])->name('isyarat');
Route::get('/joko', [WelcomeController::class,'joko'])->name('joko');
Route::get('/ppgd', [WelcomeController::class,'ppgd'])->name('ppgd');
Route::get('/sandi', [WelcomeController::class,'sandi'])->name('sandi');
Route::get('/semboyan', [WelcomeController::class,'semboyan'])->name('semboyan');
Route::get('/yel2', [WelcomeController::class,'yel2'])->name('yel2');
//untuk soal-soal
Route::get('/siaga', [WelcomeController::class,'siaga'])->name('siaga');
Route::get('/penggalang', [WelcomeController::class,'penggalang'])->name('penggalang');
Route::get('/penegak', [WelcomeController::class,'penegak'])->name('penegak');
//untuk juara umum
Route::get('/juara', [WelcomeController::class,'juara'])->name('juara');
//untuk halaman login
Route::post('/login-user', [UserAuthController::class,'login'])->name('login_user');

Route::middleware(['auth','role:admin'])->group(function(){

    Route::prefix('backend')->name('backend.')->group(function(){

        Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        Route::get('/dashboard/ajax',[DashboardController::class,'ajax'])->name('dashboard.ajax');

        Route::prefix('/pemilih')->name('pemilih.')->group(function(){

            Route::get('/',[PemilihController::class,'index'])->name('index');
            Route::get('/create',[PemilihController::class,'create'])->name('create');
            Route::post('/store',[PemilihController::class,'store'])->name('store');
            Route::get('/delete/{id}',[PemilihController::class,'delete'])->name('delete');
            Route::get('/edit/{id}',[PemilihController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[PemilihController::class,'update'])->name('update');
            route::post('/import',[PemilihController::class,'import'])->name('import');

        });

        Route::prefix('/siaga')->name('siaga.')->group(function(){

            Route::get('/',[SiagaController::class,'index'])->name('index');
            // Route::get('/create',[PemilihController::class,'create'])->name('create');
            // Route::post('/store',[PemilihController::class,'store'])->name('store');
            // Route::get('/delete/{id}',[PemilihController::class,'delete'])->name('delete');
            // Route::get('/edit/{id}',[PemilihController::class,'edit'])->name('edit');
            // Route::post('/update/{id}',[PemilihController::class,'update'])->name('update');
            // route::post('/import',[PemilihController::class,'import'])->name('import');

        });

        Route::prefix('/penggalang')->name('penggalang.')->group(function(){

            Route::get('/',[PenggalangController::class,'index'])->name('index');
            // Route::get('/create',[PemilihController::class,'create'])->name('create');
            // Route::post('/store',[PemilihController::class,'store'])->name('store');
            // Route::get('/delete/{id}',[PemilihController::class,'delete'])->name('delete');
            // Route::get('/edit/{id}',[PemilihController::class,'edit'])->name('edit');
            // Route::post('/update/{id}',[PemilihController::class,'update'])->name('update');
            // route::post('/import',[PemilihController::class,'import'])->name('import');

        });

        Route::prefix('/penegak')->name('penegak.')->group(function(){

            Route::get('/',[PenegakController::class,'index'])->name('index');
            // Route::get('/create',[PemilihController::class,'create'])->name('create');
            // Route::post('/store',[PemilihController::class,'store'])->name('store');
            // Route::get('/delete/{id}',[PemilihController::class,'delete'])->name('delete');
            // Route::get('/edit/{id}',[PemilihController::class,'edit'])->name('edit');
            // Route::post('/update/{id}',[PemilihController::class,'update'])->name('update');
            // route::post('/import',[PemilihController::class,'import'])->name('import');

        });

        Route::prefix('/kandidat')->name('kandidat.')->group(function(){

            Route::get('/',[KandidatController::class,'index'])->name('index');
            Route::get('/create',[KandidatController::class,'create'])->name('create');
            Route::post('/store',[KandidatController::class,'store'])->name('store');
            Route::get('/delete/{id}',[KandidatController::class,'delete'])->name('delete');
            Route::get('/edit/{id}',[KandidatController::class,'edit'])->name('edit');
            Route::post('/update/{id}',[KandidatController::class,'update'])->name('update');

        });

        Route::prefix('config')->name('config.')->group(function () {
            Route::get('/', [ConfigController::class, 'index'])->name('index');
            Route::post('/', [ConfigController::class, 'store'])->name('store');
            Route::post('/', [ConfigController::class, 'update'])->name('update');
            Route::delete('/', [ConfigController::class, 'destroy'])->name('destroy');            
    });

        Route::prefix('setting')->name('setting.')->group(function () {
        // Route::get('/index', [SettingController::class, 'index'])->name('index');
        Route::get('/edit', [SettingController::class, 'edit'])->name('edit');
        Route::post('/update', [SettingController::class, 'update'])->name('update');      
    });


    });

});

Route::middleware(['auth','role:user'])->group(function(){
    Route::get('/dashboard',[FrontendDashboardController::class,'index'])->name('dashboard');
    Route::get('/voting',[VotingController::class,'index'])->name('voting');
    Route::get('/voting/{id}',[VotingController::class,'store'])->name('voting.store');
});

require __DIR__.'/auth.php';
