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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/invest-your-money', 'HomeController@investMoney')->name('investMoney');
Route::get('/logout', 'Auth\LoginController@logout');

/*front end pages*/
Route::get('/about-us', 'AboutUsController@index')->name('aboutus');
Route::get('/business-loan', 'BusinessLoanController@index')->name('businessloan');
Route::get('/faq', 'FAQController@index')->name('faq');

/*How to work*/
Route::get('/how-its-work', 'HowToWorkController@index')->name('howToWork.index');
Route::get('/what-does-funding-not-do', 'HowToWorkController@notDow')->name('howToWork.notDow');
Route::get('/the-bidding-process', 'HowToWorkController@bidProcess')->name('howToWork.bidProcess');
Route::get('/transfer-of-funds-and-emi-payments', 'HowToWorkController@transFunds')->name('howToWork.transFunds');
Route::get('/cancellation-and-refund-policy', 'HowToWorkController@refund')->name('howToWork.refund');

/*Lenders*/
Route::get('/why-lend', 'HowToWorkController@lenders')->name('lenders.lenders');
Route::get('/who-can-become-a-lender', 'HowToWorkController@becomeLend')->name('lenders.becomeLend');
Route::get('/who-am-i-lending-to', 'HowToWorkController@lendToBe')->name('lenders.lendToBe');
Route::get('/returns-and-fees', 'HowToWorkController@returnFees')->name('lenders.returnFees');
Route::get('/code-of-conduct-for-lenders', 'HowToWorkController@conductLenders')->name('lenders.conductLenders');
Route::get('/funding-faq', 'HowToWorkController@faq')->name('lenders.faq');

/*Borrowers*/
Route::get('/why-borrow-on-funding', 'HowToWorkController@whyBorrow')->name('borrowers.whyBorrow');
Route::get('/who-qualifies-for-a-loan', 'HowToWorkController@qualLoan')->name('borrowers.qualLoan');
Route::get('/from-whom-am-i-borrowing', 'HowToWorkController@whomBorrow')->name('borrowers.whomBorrow');
Route::get('/borrower-process', 'HowToWorkController@borrowerProcess')->name('borrowers.borrowerProcess');
Route::get('/purpose-of-loan', 'HowToWorkController@purposeLoan')->name('borrowers.purposeLoan');
Route::get('/interest-rates-and-fees', 'HowToWorkController@insertFees')->name('borrowers.insertFees');




Auth::routes();

Route::get('/contact-us', 'Dashboard\ContactUsController@index')->name('contactus');
Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');
    Route::get('/earning-history', 'Dashboard\DashboardController@earningHistory')->name('earningHistory');
    Route::get('/lend-now', 'Dashboard\DashboardController@lendNow')->name('lendNow');
    Route::get('/borrower-now', 'Dashboard\DashboardController@borrowerNow')->name('borrowerNow');
    Route::get('/withdrawal', 'Dashboard\DashboardController@withdrawal')->name('withdrawal');

    Route::resource('/user', 'Dashboard\UserController');

    Route::prefix('pages')->group(function () {


        Route::group(['middleware' => ['checkRole']], function () {
            /*Home Page*/
            Route::get('/homepage', 'Dashboard\PageController@index')->name('homepage');
            Route::get('/homepage/create', 'Dashboard\PageController@create')->name('homepage.create');
            Route::post('/homepage/insert', 'Dashboard\PageController@store')->name('homepage.store');
            Route::get('/homepage/{id}', 'Dashboard\PageController@edit')->name('homepage.edit');
            Route::put('/homepage/edit/{id}', 'Dashboard\PageController@update')->name('homepage.update');
            Route::delete('/homepage/{id}', 'Dashboard\PageController@destroy')->name('homepage.destroy');

            /*Contact us page*/

            Route::post('/contact-us/store', 'Dashboard\ContactUsController@store')->name('contactus.store');
            Route::get('/contact-us/test', 'Dashboard\ContactUsController@view')->name('contactus.view');
            Route::delete('/contact-us/delete/{id}', 'Dashboard\ContactUsController@destroy')->name('contactus.destroy');


            /*Apply now page*/
            Route::get('/apply-now', 'Dashboard\ApplyNowController@index')->name('applynow.index');
            Route::post('/apply-now/store', 'Dashboard\ApplyNowController@store')->name('applynow.store');
            Route::get('/apply-now/test', 'Dashboard\ApplyNowController@view')->name('applynow.view');
            Route::delete('/apply-now/delete/{id}', 'Dashboard\ApplyNowController@destroy')->name('applynow.destroy');


            /*Careers page*/
            Route::get('/careers/view', 'Dashboard\CareerController@view')->name('careers.view');
            Route::resource('/careers', 'Dashboard\CareerController');
            Route::post('/careers/insert', 'Dashboard\CareerController@insert')->name('careers.insert');

            Route::delete('/resume/{resume}', 'Dashboard\CareerController@delete')->name('resume.destroy');

        });
    });

    Route::group(['middleware' => ['checkRole']], function () {
        Route::get('admin/user')->name('user.index');
        Route::get('admin/user/create', 'Dashboard\UserController@create')->name('user.create');
        Route::get('admin/user')->name('user.store');
    });

});
