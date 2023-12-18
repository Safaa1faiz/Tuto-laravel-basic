<?php
use App\Http\Controllers\Blogcontroller;
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

// Route :: prefix('/blog')->name('blog.')->group (function () {
//     Route::get('/', function (Request $request) {
    // $post = new \App\Models\Post();
    // $post->title = 'le3a9l-al-moudabir';
    // $post->slug = 'blabla';
    // $post->content = 'Superfragilisticexpialidocious';
    // $post->save();
    // return $post;

// return \App\Models\Post::all();
// return \App\Models\Post::all(['id' , 'slug']);
// $post = \App\Models\Post::all(['id' , 'title']);
// $post = \App\Models\Post::find(100);
// $post = \App\Models\Post::findorfail(100); // return error in case of null
// $post = \App\Models\Post::paginate(5);
// $post = \App\Models\Post::paginate(5,['id','title']);
// $post = \App\Models\Post::WHERE('id','>',2)->get();  // first or get 

  /* edit an an attribute/delete an item */ 
// $post = \App\Models\Post::find(1);
// $post->title = 'al 3a9l al moudabir';
// $post->save();
// $post->delete();

  /* create an item */ 

// $post = \App\Models\Post::create([
//     'title'=> 'al 3a9l al mouodabir',
//     'slug'=> 'boom tam tam ',
//     'content'=>'superfragilisticexpialidocious'
// ]);

  /* update items (condition)  */ 

// $post = \App\Models\Post::where('id','>',1)->update([
//     'title'=> 'al 3a9l al mouodabir',
//     'slug'=> 'boom tam tam ',
//     'content'=>'superfragilisticexpialidocious'
// ]);

  /* update items (condition) */ 

// $post = \App\Models\Post::where('id','>',5)->delete([
//     'title'=> 'al 3a9l al mouodabir',
//     'slug'=> 'boom tam tam ',
//     'content'=>'superfragilisticexpialidocious'
// ]);


// return $post;

// dd($post);
// dd($post[1]->title);
// dd($post->first());

// return \App\Models\Post :: paginate(25);

// Route :: prefix('/blog')->name('blog.')->group (function () {
//   Route::get('/',[Blogcontroller::class,'index'])->name('index');
//     Route::get('/{slug}-{id}',[Blogcontroller::class,'show'])->where ([
//         'id' => '[0-9]+',
//         'slug' => '[a-z0-9\-]+'
//         ])->name('show');
// });

Route :: prefix('/blog')->name('blog.')->controller(Blogcontroller::class)->group (function () {
Route::get('/', 'index')->name('index');
    Route::get('/{slug}-{id}','show')->where ([
        'id' => '[0-9]+',
        'slug' => '[a-z0-9\-]+'
        ])->name('show');
});
