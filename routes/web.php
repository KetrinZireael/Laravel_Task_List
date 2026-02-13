<?php
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/task', function () {
    return view ('index', [
        'tasks' => App\Models\Task::latest()->where('completed', true)->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/task/{id}', function($id)  {
    return view ('show',
            ['task' => App\Models\Task::findOrFail($id)
        ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    dd($request->all());
})->name('tasks.store');

//Route::get('/xxx', function() {
//    return('Hello World');
//})->name('hello');
//
//Route::get('/hallo', function() {
//    return redirect()->route('hello');
//});
//
//Route::get('/greet/{name}', function($name) {
//    return('Hello ' . $name);
//});
//
//Route::fallback(function() {
//    return 'Sorry, this page does not exist';
//});
