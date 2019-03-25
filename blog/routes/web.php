<?php

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
use App\todolist;
use Illuminate\Http\Request;
Route::group(['middleware' => 'web'], function () {

    /**
     * Show Task Dashboard
     */
    
    Route::get('/1', function () {
    	$todolist = Todolist::orderBy('id', 'asc')->get();
        return view('todolist',[
        	'todolist' =>$todolist
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/1/todolist', function (Request $request) {
       
        $todolist = new Todolist;
        $todolist->content = $request->content;
        $todolist->save();

        return redirect('/1');
    });
    /**
     * Edit Task
     */
    Route::post('/1/todolist/change/{todolist}', function (Request $request, Todolist $todolist) {
       
        $todolist->content = $request->content;
        $todolist->save();

        return redirect('/1');
    });

    /**
     * Delete Task
     */
    Route::delete('/1/todolist/{todolist}', function (Todolist $todolist) {
        $todolist->delete();

        return redirect('/1');
    });
});
Route::get('/', function () {
    return view('welcome');
});
