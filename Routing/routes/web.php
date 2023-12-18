<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/blog', function () {
//     return 'Bonjour hussein';
// });
// Route::get('/blog', function () {
//     return [
//         "article => 'Article 1",
//     ];
// });
// Route::get('/blog', function ( ) {
//     return [
//         "name" => $_GET['name'],
//         "article" => "Article 1"
//     ];
// });
// Route::get('/blog', function (Request $request ) {
//     return [
//         // "name" => $request ->path() ,
//         // "name" => $request ->url() ,
//         // "name" => $request ->all() ,
//         'name'=> $request->input('name','hussein'),
//         "article" => "Article 1"
//     ];
// });

Route::get("/blog", function () {
    return [
        "link" => \route('blog.show',['slug'=> 'article','id'=> '12']),
    ];
})->name('blog.index');

Route::get('/blog/{id}-{slug}', function (string $id,string $slug, Request $request) {
    return[
        "slug" => $slug,
        "id"=> $id,
        "name" => "Tanger",
    ];
})->name('blog.show');
// route::prefix('/blabla')->group(function () {
// Route::get("/", function () {
//     return [
//         "link" => \route('blog.show',['slug'=> 'article','id'=> '12']),
//     ];
// })->name('blog.index');

// Route::get('/{id}-{slug}', function (string $id,string $slug, Request $request) {
//     return[
//         "slug" => $slug,
//         "id"=> $id,
//         "name" => "Tanger",
//     ];
// })->name('blog.show');
// });

route::prefix('/blabla')->name('blabla.')->group(function () {
    Route::get("/", function () {
        return [
            "link" => \route('show',['slug'=> 'article','id'=> '12']),
        ];
    })->name('index');

    Route::get('/{id}-{slug}', function (string $id,string $slug, Request $request) {
        return[
            "slug" => $slug,
            "id"=> $id,
            "name" => "Tanger",
        ];
    })->name('show');
    });