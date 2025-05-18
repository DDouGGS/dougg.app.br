<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailer;

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

Route::get('/', function () { return view('index');});
Route::post(
    '/contact', 
    function() {
        // O envio do email é feito usando o método to na facade Mail
        // Mail::to(config('mail')['mailers']['smtp']['username'])->send(new ContactMail('Dougg TI'));
        $mailer = new Mailer();
        return $mailer->send('mail_contact');
    }
);
