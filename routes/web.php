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


//Get Contoller set
Route::get('/', 'GetController@index');
Route::get('index', 'GetController@index');
Route::get('hng5/finalists', 'GetController@HNG5');
Route::get('interns', 'GetController@Interns');
Route::get('join-now', 'GetController@JoinNow');
Route::get('contact', 'GetController@contact');

//post Controller
Route::post('join-now', 'PostController@JoinNow');
Route::post('contact', 'PostController@contact');


Route::get('404', function () {
    return view('404');
});
Route::get('support', function () {
    return view('support');
});
Route::get('about', function () {
    return view('about');
});

Route::get('become-intern', function () {
    return view('become-intern');
});
Route::get('template', function () {
    return view('template');

});

Route::get('past-interns', function () {
    return view('past-interns');
});
Route::get('products', function () {
    return view('products');
});

Route::get('design', function () {
    return view('design');
});
Route::get('/certificate', 'CertificateController@index');

Route::post('/certification', 'DataController@certificate');

Route::get('/certification/{slug}', function($slug) {

    $intern_json = Storage::get('start-intern-data.json');
    $array = json_decode($intern_json,true);

    for ($i=0; $i < count($array); $i++) {
        if ($array[$i]['slug'] == $slug) {
            $obj = $array[$i];
            return view('certificate')->with('name',$obj);
            break;
        }
        else {
            continue;
        }
    }

    return view('404');
});

Route::get('/certification/{slug}/download', "DataController@exportPDF");

Route::get('/certification/{slug}/view', function($slug) {
    $intern_json = Storage::get('start-intern-data.json');
        $array = json_decode($intern_json,true);

        for ($i=0; $i < count($array); $i++) {
            if ($array[$i]['slug'] == $slug) {
                $obj = $array[$i];
                return view('certificate_pdf')->with('data',$obj);
                break;
            }
            else {
                continue;
            }
        }

        return view('404');
});

Route::get('/certificate/{slug}/download', "DataController@export");

Route::get('/confirmation/{slug}', function($slug) {
    $intern_json = Storage::get('start-intern-data.json');
    $array = json_decode($intern_json,true);

    for ($i=0; $i < count($array); $i++) {
        if ($array[$i]['slug'] == $slug) {
            $obj = $array[$i];
            return view('verification')->with('name',$obj);
            break;
        }
        else {
            continue;
        }
    }

    return view('404');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
