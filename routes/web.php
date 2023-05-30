<?php

use App\Models\booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
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

Route::get('/home', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/product', function () {
    return view('product', ['title' => 'Product']);
});

Route::get('/pemesanan', function () {
    return view('pemesanan', ['title' => 'Pemesanan']);
});

Route::get('/contacus', function () {
    return view('contacus', ['title' => 'Contact Us']);
});

Route::get('/tiket', function () {
    return view('tiket', ['title' => 'Tiket Saya']);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Login']);
});

Route::get("/bookingform", function () {
    return view('bookingform', ['title' => 'Booking Form']);
});

Route::get('/formp2', function () {
    return view('formp2', ['title' => 'formp2']);
});

Route::get('/syarat_dan_ketentuan', function () {
    return view('syarat_dan_ketentuan', ['title' => 'Syarat dan Ketentuan']);
});


Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});

Route::post("/submitted", function(){
    $booking = new booking();
    $booking->Nama_cust = request("Nama_cust");
    $booking->Email_cust = request("Email_cust");
    $booking->Telp_cust = request("Telp_cust");
    $booking->date_pesan = request("date_pesan");
    $booking->Shift = request("Shift");
    $booking->save();
});


Route::post('/loginprosesuser',[User::class, 'loginprosesuser'])->name('loginprosesuser');
Route::get('/LogoutUser', [User::class, 'logoutuser'])->name('logoutuser');
Route::post('/registeruser',[User::class, 'registeruser'])->name('registeruser');

