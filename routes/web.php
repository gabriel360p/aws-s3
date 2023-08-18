<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/create', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::post('/store', function (Request $request) {


    //funciona
    // dd(Storage::disk('s3')->exists('enso.jpg'));
    
    //funciona
    // if(Storage::disk('s3')->exists('enso.jpg')){
    //     echo "sim";
    // }else{
    //     echo "não";
    // }

    //funciona
    // Storage::disk('s3')->put('buda/budha.txt','ola buda');
    
    $path = Storage::disk('s3')->putFile('files', $request->file('image'));    

    // Storage::disk('s3')->delete('buda/budha.txt','ola buda')
    
    //funciona - ele mostrou o conteudo que esta dentro do arquivo txt
    // dd(Storage::disk('s3')->get('ola.txt'));
    // dd(Storage::disk('s3')->get('buda/budha.txt'));
    

    // $url = Storage::disk('s3')->path('enso.jpg');
    // echo $url;

    //funciona
    // return Storage::disk('s3')->download('enso.jpg');

    //funciona
    // $s3 = App::make('aws')->createClient('s3');
    // $s3->putObject(array(
    //     'Bucket'     => "lorium17-teste-bucket1",
    //     'Key'        => 'enso.jpg',
    //     'SourceFile' => $request->file('image')->getRealPath(),
    // ));
    
    return back();
});
