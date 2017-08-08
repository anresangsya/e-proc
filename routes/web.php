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
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
//Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');

Route::get('/pengadaan', 'PengadaanController@index');

Route::get('/pengadaan/tes', 'PengadaanController@tes');


//Route::get('/product/edit','SupplierController@index');
////
//Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
//Route::resource('user-management', 'UserManagementController');

//Route::get('product', 'ProductController@index');


Route::resource('product','ProductController');
Route::resource('supplier','SupplierController');
Route::resource('pengadaan','PengadaanController');



//Route::get('/supplier/index','SupplierController@index');

Route::get('/progressbars/', function(){
    return view('/progressbars');
});
//Route::get('product/create', function(){
//    return view('product/create');
//});

Route::get('/statistics', function(){
    return view('company-statistic');
});


Route::get('pdf/product', function(){
    return view('pdf/product');
});


Route::get('pdf/supplier', function(){
    return view('pdf/product');
});

Route::get('/pdf/product',[
    'uses'  => 'ProductController@getPdf',
    'as'    => 'Daftar Pengadaan Barang.pdf',
]);

Route::get('/pdf/supplier',[
    'uses'  => 'SupplierController@getPdf',
    'as'    => 'Daftar Supplier.pdf',
]);
//


//Route::get('/supplier/', function(){
//    return view('supplier.index');
//});

//
//
//Route::get('/supplier/index', function(){
//    return view('supplier.index');
//});
//
//Route::resource('employee-management', 'EmployeeManagementController');

//Route::get('/product/print', 'ReportController@exportPDF');
//Route::post('employee-management/search', 'EmployeeManagementController@search')->name('employee-management.search');
//
//Route::resource('system-management/department', 'DepartmentController');
//Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');
//
//Route::resource('system-management/division', 'DivisionController');
//Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');
//
//Route::resource('system-management/country', 'CountryController');
//Route::post('system-management/country/search', 'CountryController@search')->name('country.search');
//
//Route::resource('system-management/state', 'StateController');
//Route::post('system-management/state/search', 'StateController@search')->name('state.search');
//
//Route::resource('system-management/city', 'CityController');
//Route::post('system-management/city/search', 'CityController@search')->name('city.search');
//
//Route::get('system-management/report', 'ReportController@index');
//Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
//Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
////Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');
//Route::get('system-management/report/pdf', 'ReportController@exportPDF');
//Route::get('avatars/{name}', 'EmployeeManagementController@load');