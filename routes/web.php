<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ClubAnnouncementController;
use App\Http\Controllers\ClubAnnouncementCommentController;
use App\Http\Controllers\MentoringController;
use App\Http\Controllers\MentorshipCommentsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(
    [
        'middlewreware' => ['auth'],
    ],
    function () {
        Route::group(
            [
                'prefix' => 'clubs',
                'as' => 'clubs.',
            ],
            function () {
                Route::get('/', [ClubController::class, 'index'])->name('index');
                Route::post('/store', [ClubController::class, 'store'])->name('store');
                Route::delete('/{club}', [ClubController::class, 'destroy'])->name('destroy');
                Route::get('/{club}/show', [ClubController::class, 'show'])->name('show');
                Route::post('/add/member', [ClubController::class, 'addMember'])->name('add.member');
                Route::post('/remove/member', [ClubController::class, 'removeMember'])->name('remove.member');
            }
        );

        Route::group(
            [
                'prefix' => 'announcements',
                'as' => 'announcements.',
            ],
            function () {
                Route::post('/store', [ClubAnnouncementController::class, 'store'])->name('store');
                Route::delete('/{club}', [ClubController::class, 'destroy'])->name('destroy');
                Route::get('/{club}/show', [ClubController::class, 'show'])->name('show');
                Route::post('/add/member', [ClubController::class, 'addMember'])->name('add.member');
                Route::post('/remove/member', [ClubController::class, 'removeMember'])->name('remove.member');
            }
        );

        Route::group(
            [
                'prefix' => 'comments',
                'as' => 'comments.',
            ],
            function () {
                Route::post('/store', [ClubAnnouncementCommentController::class, 'store'])->name('store');
                Route::delete('/{club}', [ClubController::class, 'destroy'])->name('destroy');
                Route::get('/{club}/show', [ClubController::class, 'show'])->name('show');
                Route::post('/add/member', [ClubController::class, 'addMember'])->name('add.member');
                Route::post('/remove/member', [ClubController::class, 'removeMember'])->name('remove.member');
            }
        );

        Route::group(
            [
                'prefix' => 'mentors',
                'as' => 'mentors.',
            ],
            function () {
                Route::get('/', [MentoringController::class, 'index'])->name('index');
                Route::post('/store', [MentoringController::class, 'store'])->name('store');
                Route::delete('/destroy', [MentoringController::class, 'destroy'])->name('destroy');
                Route::get('/{mentorship}/show', [MentoringController::class, 'show'])->name('show');
                Route::post('/add/member', [MentoringController::class, 'addMember'])->name('add.member');
                Route::post('/store/comment', [MentorshipCommentsController::class, 'storeComment'])->name('store.comment');

            }
        );
    }
    
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
