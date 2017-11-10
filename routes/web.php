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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/maint', function () {
    // return view('welome', ['name' => 'James']);
    // return view('welcome', ['name' => 'James']);
/*
    $var1=value1;
    $var2=value2;
    $var3=value3;
    return view('viewName', compact('var1','var2','var3'));
    //Passing variable to view using with Method
    return view('viewName')->with(['var1'=>value1,'var2'=>value2,'var3'=>'value3']);
    //Passing variable to view using Associative Array
    return view('viewName', ['var1'=>value1,'var2'=>value2,'var3'=>value3]);
 */

    $siteList = DB::table('sites')->get();

    // if ($siteList->first()) { } 
    // if (!$siteList->isEmpty()) { }
    // if ($siteList->count()) { }
    if (count($siteList)) {
        Log::info('$siteList: '. $siteList);
        return view('welcome', ['siteList' => $siteList]);
        //OR return View::make('welcome')->with('siteList', $siteList);
    } else {
        Log::info("No Data Returned from DB::table('sites')");
        
    }
 
});
