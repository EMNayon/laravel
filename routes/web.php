<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ResourcePhotoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForeachLoopBladeViewController;
use App\Http\Controllers\IfElseConditionController;
use App\Http\Controllers\LoopPropertiesBladeViewController;
use App\Http\Controllers\phpInsideBladeViewController;
use App\Http\Controllers\IncludingSubviewBladeViewController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[SiteController::class, 'Home']);
Route::get('/about',[SiteController::class,'About']);
Route::get('/contact',[SiteController::class,'Contact']);
Route::get('/demo',[SiteController::class,'Demo']);

Route::get('/name/{namevalue}',[DemoController::class,'myName']);
Route::get('/fullname/{firstName}/{lastName}',[DemoController::class,'fullName']);
Route::get('/fullname/{firstName}/{middleName}/{lastName}',[DemoController::class, 'fullName1']);


Route::get('/greeting',function(){
    return "<h1>Hello World!</h1>";
});

// Routing group
Route::group(['prefix'=>'account'],function(){
    Route::get('/profile',function(){
        return "Profile";
    });
    Route::get('/login',function(){
        return "Login";
    });
    Route::get('/logout',function(){
        return "Logout";
    });
    Route::get('/singup',function(){
        return "Singup";
    });
    Route::get('/updateprofile',function(){
        return "Update Profile";
    });
});

Route::get('/singleactioncontroller',[SingleActionController::class,'__invoke']);

// Route::resource('photos',[PhotoController::class]);  when we are use the resource that time can't use third bracket. remember it
Route::resource('photos', PhotoController::class);
Route::resource('resource',ResourcePhotoController::class);

Route::get('/myself',[CustomController::class,'MySelf']);
Route::get('/yourself',[CustomController::class,'YourSelf']);

// blade view
Route::get('/homeview',[HomeController::class,'ShowHome']);

Route::get('/foreach',[ForeachLoopBladeViewController::class,'DropDown']);
Route::get('/ifelse',[IfElseConditionController::class,'Show']);
Route::get('/loop',[LoopPropertiesBladeViewController::class,'Show']);
Route::get('/phpinside',[phpInsideBladeViewController::class,'Show']);
Route::get('/subview',[IncludingSubviewBladeViewController::class,'Show']);

// Route::get('/account/profile',[]);
// Route::get('/account/login',[]);
// Route::get('/account/logout',[]);
// Route::get('/account/singup',[]);
// Route::get('/account/updateprofile',[]);