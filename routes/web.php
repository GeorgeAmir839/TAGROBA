<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

//user resourceeeeeeeeeeeeeeeeeeeeeeeee
Route::resource('user','usercontroller');
Route::get('deleteuser/{id}','usercontroller@delete');
Route::get('loginpage', function () {
    return view('user.loginuser');
});
Route::post('loginuser', 'usercontroller@loginuser');
Route::get('logoutuser', 'usercontroller@logoutuser'); 

//doctor   resourceeeeeeeeeeeeeeeeeeeeeeeee
Route::resource('doctor', 'DoctorController');
Route::get('logindoctor', function () {
    return view('doctor.logindoctor');
});
Route::post('logindoctor', 'Doctorcontroller@logindoctor');
Route::get('logoutdoctor', 'Doctorcontroller@logoutdoctor'); 