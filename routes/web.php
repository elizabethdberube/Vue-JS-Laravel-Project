 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\Auth\LogoutController;

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


Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


Route::get('/{vue_capture?}', function () {

    $user = Auth::user();
if($user){
    return view('welcome', ['user' => $user]);
}else{
    return view('/auth/login');
}
   
})->where('vue_capture', '[\/\w\.-]*');
