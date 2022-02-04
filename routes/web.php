<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\frontend\UserController as UController;
use App\Http\Controllers\frontend\ServiceController;
 use App\Http\Controllers\frontend\PaymentController as DController;
  use App\Http\Controllers\frontend\ReportController as RController;
  use App\Http\Controllers\frontend\WithdrawController as WController;
  use App\Http\Controllers\frontend\ProductController;
  use App\Http\Controllers\frontend\LoanRequestController;
   use App\Http\Controllers\frontend\IndexController;
  use App\Http\Controllers\NotificationController;

use Illuminate\Support\Facades\Route;

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
// Route::get('/', function(){
//     return  redirect()->route('admin.page');

// });
Route::get('/home',[ProductController ::class,'view'])->name('home.view');
Route::get('/cart',[ProductController ::class,'getcart'])->name('home.cart');
Route::get('/home/add to cart/{id}',[ProductController ::class,'addcart'])->name('home.addcart');
Route::group(['prefix'=>'admin-portal'],function(){
    //  Route::get('/', function () {
    //  return view('admin/layouts/home');
 //})->name('admin');
 Route::get('/login',[UserController ::class,'page'])->name('admin.page');
  Route::post('/login',[UserController ::class,'log'])->name('admin.log');

 Route::get('/lo',[NotificationController ::class,'sendNotification'])->name('admin.pa');



Route::group(['middleware'=>['auth','admin']],function(){
Route::get('/logout',[UserController ::class,'logout'])->name('admin.logout');
Route::get('/',[DashboardController ::class,'dashboard'])->name('admin');





     Route::get('/administrator',[UserController::class,'profile'])->name('admin.profile');
  Route::get('/administrator/registration',[UserController::class,'registration'])->name('admin.registration');
 Route::post('/administrator/registration',[UserController::class,'store'])->name('admin.store');
   Route::get('/administrator/profile-edit/{id}',[UserController::class,'profile_edit'])->name('admin.profile.edit');
Route::put('/administrator/profile-update/{id}',[UserController::class,'profile_update'])->name('admin.profile.update');

Route::get('/user list',[UserController::class,'user_list'])->name('admin.user.list');
Route::get('/user list/approve/{id}',[UserController::class,'user_edit'])->name('admin.user.approve');
Route::put('/user list/approve/{id}',[UserController::class,'user_approve'])->name('admin.user.approve');
Route::get('/user list/cancel/{id}',[UserController::class,'user_cancel'])->name('admin.user.cancel');






     Route::get('/members/member',[MemberController::class,'member_create'])->name('admin.members.add');
     Route::post('/members/member',[MemberController::class,'member_store'])->name('admin.members.store');
    Route::get('/members/member-list',[MemberController::class,'member_list'])->name('admin.members.list');
    Route::get('/members/member-list/details/{id}',[MemberController::class,'member_details'])->name('admin.members.details');
    Route::get('/members/member-list/delete/{id}',[MemberController::class,'member_delete'])->name('admin.members.delete');
    Route::get('/members/member-list/edit/{id}',[MemberController::class,'member_edit'])->name('admin.members.edit');
    Route::put('/members/member-list/update/{id}',[MemberController::class,'member_update'])->name('admin.members.update');
    //   Route::get('/members/member-list/submit',[MemberController::class,'member_search'])->name('admin.members.search');





     Route::get('/components/branch',[BranchController::class,'branch'])->name('admin.branch');
    Route::get('/components/branch/add new branch',[BranchController::class,'branch_create'])->name('admin.branch.add');
    Route::post('/components/branch/add new branch',[BranchController::class,'branch_store'])->name('admin.branch.store');
 Route::get('/components/branch',[BranchController::class,'branch_list'])->name('admin.branch.list');




    Route::get('/components/loan',[New_loanController::class,'loan_list'])->name('admin.loan.new');
    Route::get('/components/loan/add new loan',[New_loanController::class,'loan_create'])->name('admin.new.create');
    Route::post('/components/loan/add new loan',[New_loanController::class,'loan_store'])->name('admin.new.store');





     Route::get('/news pages/news',[NewsController::class,'news_create'])->name('admin.news.add');
    Route::post('/news pages/news',[NewsController::class,'news_store'])->name('admin.news.store');
    Route::get('/news pages/news details',[NewsController::class,'news_list'])->name('admin.news.list');
     Route::get('/news pages/news details/delete/{id}',[NewsController::class,'news_delete'])->name('admin.news.delete');










    Route::get('/loan/loan request',[LoanController::class,'loan_add'])->name('admin.loan.add');
    Route::post('/loan/loan request',[LoanController::class,'loan_store'])->name('admin.loan.store');
    Route::get('/loan/loan status',[LoanController::class,'loan_list'])->name('admin.loan.list');
   Route::get('/loan/loan status/action/approve/{id}',[LoanController::class,'loan_approve'])->name('admin.loan.approve');
    Route::get('/loan/loan status/action/cancel/{id}',[LoanController::class,'loan_cancel'])->name('admin.loan.cancel');
     Route::get('/loan/loan status/action/view/{id}',[LoanController::class,'loan_details'])->name('admin.loan.request.details');
    Route::get('/loan/loan status/delete/{id}',[LoanController::class,'loan_delete'])->name('admin.loan.delete');




Route::get('/payment/add money',[PaymentController::class,'payment'])->name('admin.payment');
Route::post('/payment/add money',[PaymentController::class,'store'])->name('admin.payment.store');


    Route::get('/payment/deposit status',[DepositController::class,'deposit_list'])->name('admin.deposit.list');
    Route::get('/payment/deposit status/view/{id}',[DepositController::class,'deposit_details'])->name('admin.deposit.details');


    Route::get('/payment/loan status',[Loan_listController::class,'loan_list'])->name('admin.loanlist');
    Route::get('/payment/loan status/view/{id}',[Loan_listController::class,'loan_details'])->name('admin.loan.details');


Route::get('withdraw/withdraw list',[WithdrawController::class,'view'])->name('admin.withdraw.view');
Route::get('withdraw/withdraw list/edit/{id}',[WithdrawController::class,'withdraw_edit'])->name('admin.withdraw.edit');
Route::put('withdraw/withdraw list/edit/{id}',[WithdrawController::class,'withdraw_approve'])->name('admin.withdraw.approve');

Route::get('/report',[ReportController::class,'report_search'])->name('admin.report');
Route::get('/withdraw/withdraw report',[ReportController::class,'withdraw_report'])->name('admin.withdraw.report');
});






});

Route::get('/', function(){
     return  redirect()->route('user');

 });

Route::group(['prefix'=>'user-portal'],function(){
    //  Route::get('/', function () {
    //      return view('website.pages.home');
    // })->name('user');
Route::get('/',[IndexController::class,'home'])->name('user');

Route::post('/registration',[UController::class,'registration'])->name('user.registration');
Route::post('/login/post',[UController::class,'userLogin'])->name('user.do.login');
Route::get('/about us',[IndexController::class,'about'])->name('user.about');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/user/logout',[UController::class,'userLogout'])->name('user.logout');
Route::get('/service',[ServiceController::class,'service'])->name('user.service');


Route::get('/service/payment',[ServiceController::class,'payment'])->name('user.payment');
Route::post('/service/payment',[DController::class,'store'])->name('payment.store');
 Route::get('/service/payment/info/{id}',[DController::class,'me'])->name('payment.message');



Route::get('/service/loan request',[ServiceController::class,'loan'])->name('user.loan');
Route::post('/service/loan request',[LoanRequestController::class,'loan_store'])->name('user.loan.store');

Route::get('/service/withdraw',[WController::class,'withdraw'])->name('user.withdraw');
Route::post('/service/withdraw',[WController::class,'store'])->name('user.withdraw.store');

 Route::get('/service/profile/{id}',[ServiceController::class,'profile'])->name('user.profile');
// Route::post('/service',[LoanRequestController::class,'loan_store'])->name('user.loan.store');
Route::get('/service/report/{id}',[RController::class,'report'])->name('user.report');
// Route::get('/service/loan request',[New_loanController::class,'loan_request'])->name('user.loan');


Route::get('/service/calculation',[MemberController::class,'mehadi1']);
Route::post('/service/calculation',[MemberController::class,'mehadi']);
});


});
