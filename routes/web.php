<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Storage;

use App\Imports\CountriesImport;
use Maatwebsite\Excel\Facades\Excel;

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

/*
Route::get('/', function () {
    
    for($i=0;$i<10;$i++)
        echo random_int(100000,999999)."<br>";
    dd();
    
    return view('welcome');
});
*/
Route::get('/', function (\Illuminate\Http\Request $request) {
    //dd($request->all());
    return redirect()->route("onboarding",['code'=>$request->input("code")]);
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get("/check_countries", function(){

    $file = Storage::path('public/IP2LOCATION-LITE-DB1.IPV6.BIN'); 

    $db = new \IP2Location\Database($file, \IP2Location\Database::FILE_IO);

    $array_ip=['127.0.0.1',"103.102.221.25",'1.0.0.25','186.82.85.217', '8.8.8.8', '2404:6800:4001:c01::67', '2001:0200:0102:0000:0000:0000:0000:0000', '2001:0200:0135:0000:0000:0000:0000:0000', '2001:0200:017A:0000:0000:0000:0000:0000'];
    
    foreach($array_ip as $arr){
        $records = $db->lookup($arr, \IP2Location\Database::ALL);
    
        echo '<pre>';
        echo 'IP Number             : ' . $records['ipNumber'] . "\n";
        echo 'IP Version            : ' . $records['ipVersion'] . "\n";
        echo 'IP Address            : ' . $records['ipAddress'] . "\n";
        echo 'Country Code          : ' . $records['countryCode'] . "\n";
        echo 'Country Name          : ' . $records['countryName'] . "\n";
        echo '</pre>';
        echo "<hr>";
    }
});


Route::get("/upload_countries", function(){
    $file = Storage::path('public/paises.csv');

    Excel::import(new CountriesImport, $file);

    return "Paises Guardado!";
});


Route::middleware(['auth', 'verified'])->group(function () {

    /*
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    require __DIR__.'/auth.php';
    */
 
    Route::get('/whitelist', [DashboardController::class, 'whitelist'])->name('whitelist');

});


//Route::middleware(['blockIP'])->group(function () {

    //despliegue onboarding
    Route::get("/onboarding", [DashboardController::class,"onboarding"])->name("onboarding");
//});

Route::get('/send-mail', [MailController::class, 'index']);
Route::get('return_view',[MailController::class,'return_view']);

Route::get('/translation', function(){
    return view("translation");
});
