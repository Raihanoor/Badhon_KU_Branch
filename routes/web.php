<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomRegController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManageController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('homepage');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/showWarning', [DashboardController::class, 'show'])->name('showWarning');



Route::group(['prefix'=>'site'],function(){

      Route::get('/register', [CustomRegController::class, 'index'])->name('register-view');
      Route::post('/register-create', [CustomRegController::class, 'create'])->name('register-create');

      Route::get('/about', [AboutController::class, 'index'])->name('about');
      Route::get('/contact', [ContactController::class, 'index'])->name('contact');
      Route::get('/donor', [DonorController::class, 'index'])->name('donor');
      Route::get('/manage-blood', [ManageController::class, 'index'])->name('manage-blood');
      
      Route::post('/contactUs', [ContactController::class, 'store'])->name('contactUs');
      Route::get('/become-a-hero', [DonorController::class, 'show'])->name('become-a-hero');
      Route::post('/donorReg', [DonorController::class, 'donorReg'])->name('donorReg');
      Route::post('/userToDonor', [DonorController::class, 'userToDonor'])->name('userToDonor');

      Route::post('/blood-request', [BloodRequestController::class, 'store'])->name('blood-request');

      Route::get('/posted-requests', [BloodRequestController::class, 'show'])->name('posted-requests');
      Route::get('/make-a-donation/{id}', [DonationController::class, 'makeADonation'])->name('make-a-donation');
      Route::post('/add-donation', [DonationController::class, 'AddDonation'])->name('add-donation');
      // sidebar routes
      Route::get('/eligibility', [MainController::class, 'eligibility'])->name('eligibility');    
      Route::get('/available', [MainController::class, 'available'])->name('available');
      Route::get('/facts', [MainController::class, 'facts'])->name('facts');
      Route::get('/howDonationHelps', [MainController::class, 'howDonationHelps'])->name('howDonationHelps');    
      Route::get('/neverDonated', [MainController::class, 'neverDonated'])->name('neverDonated');
      Route::get('/types', [MainController::class, 'types'])->name('types');
      Route::get('/vlunteers', [MainController::class, 'vlunteers'])->name('vlunteers');

      Route::get('/search', [SearchController::class, 'index'])->name('search');
      Route::post('/blood-search', [SearchController::class, 'bloodSearch'])->name('blood-search');
      Route::post('/address-search', [SearchController::class, 'addressSearch'])->name('address-search');
});

Route::group(['prefix'=>'adm','middleware'=>['auth','admin']],function(){
      /* Routes for admin panel  */
      Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
     
      // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
      Route::get('/all-donors', [DonorController::class, 'donors'])->name('all-donors');
      Route::get('/createDonor', [DonorController::class, 'create'])->name('createDonor');
      Route::post('/storeDonor', [DonorController::class, 'store'])->name('storeDonor');
      Route::get('/editDonor/{id}', [DonorController::class, 'edit'])->name('editDonor');
      Route::get('/deleteDonor/{id}', [DonorController::class, 'destroy'])->name('deleteDonor');
      Route::post('/updateDonor/{id}', [DonorController::class, 'update'])->name('updateDonor');

      Route::get('/all-schools', [SchoolController::class, 'index'])->name('all-schools');
      Route::get('/createSchool', [SchoolController::class, 'create'])->name('createSchool');
      Route::post('/storeSchool', [SchoolController::class, 'store'])->name('storeSchool');
      Route::get('/editSchool/{id}', [SchoolController::class, 'edit'])->name('editSchool');
      Route::get('/deleteSchool/{id}', [SchoolController::class, 'destroy'])->name('deleteSchool');
      Route::post('/updateSchool/{id}', [SchoolController::class, 'update'])->name('updateSchool');

      Route::get('/all-donations', [DonationController::class, 'index'])->name('all-donations');
      Route::get('/createDonation', [DonationController::class, 'create'])->name('createDonation');
      Route::post('/storeDonation', [DonationController::class, 'store'])->name('storeDonation');
      Route::get('/editDonation/{id}', [DonationController::class, 'edit'])->name('editDonation');
      Route::get('/deleteDonation/{id}', [DonationController::class, 'destroy'])->name('deleteDonation');
      Route::post('/updateDonation/{id}', [DonationController::class, 'update'])->name('updateDonation');

      Route::get('/message-contact', [ContactController::class, 'create'])->name('message-contact');
      Route::get('/deleteMessage/{id}', [ContactController::class, 'destroy'])->name('deleteMessage');

      Route::get('/all-requests', [BloodRequestController::class, 'index'])->name('all-requests');
      Route::get('/deleteBloodRequest/{id}', [BloodRequestController::class, 'destroy'])->name('deleteBloodRequest');
      Route::get('/create-post/{id}', [BloodRequestController::class, 'createPost'])->name('create-post');


      Route::get('/all-patients', [PatientsController::class, 'index'])->name('all-patients');
      Route::get('/createPatient', [PatientsController::class, 'create'])->name('createPatient');
      Route::post('/storePatient', [PatientsController::class,'store'])->name('storePatient');
      Route::get('/editPatient/{id}', [PatientsController::class, 'edit'])->name('editPatient');
      Route::get('/deletePatient/{id}', [PatientsController::class, 'destroy'])->name('deletePatient');
      Route::post('/updatePatient/{id}', [PatientsController::class, 'update'])->name('updatePatient');
      
});


Auth::routes();











