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
    return view('welcome');
});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController ::class,'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class,'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class,'index']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register.post');



Route::view(uri:'/dashboard', view: 'dashboard')->name(name:'dashboard');
Route::view(uri:'/delivery', view: 'delivery')->name(name:'delivery');
Route::view(uri:'/patients', view: 'patients')->name(name:'patients');
Route::view(uri:'/reports', view: 'reports')->name(name:'reports');
Route::view(uri:'/settings', view: 'settings')->name(name:'settings');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});



// web routes
Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports.index');
Route::get('/reports/orders', [App\Http\Controllers\ReportsController::class, 'orders'])->name('reports.orders');
Route::get('/reports/deliveries', [App\Http\Controllers\ReportsController::class, 'deliveries'])->name('reports.deliveries');
Route::post('/reports/orders/generate', [App\Http\Controllers\ReportsController::class, 'generateOrderReport'])->name('reports.orders.generate');
Route::post('/reports/deliveries/generate', [App\Http\Controllers\ReportsController::class, 'generateDeliveryReport'])->name('reports.deliveries.generate');


    Route::get('/products', [App\Http\Controllers\ProductController::class,'index'])->name('products.index');
    Route::get('/products/create', [App\Http\Controllers\ProductController::class,'create'])->name('products.create');
    Route::post('/products', [App\Http\Controllers\ProductController::class,'store'])->name('products.store');
    Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{id}/edit',[App\Http\Controllers\ProductController::class,'edit'])->name('products.edit');
    Route::put('/products/{id}', [App\Http\Controllers\ProductController::class,'update'])->name('products.update');
    Route::delete('/products/{id}', [App\Http\Controllers\ProductController::class,'destroy'])->name('products.destroy');


    Route::get('/suppliers', [App\Http\Controllers\SuppliersController::class,'index'])->name('suppliers.index');
    Route::get('/suppliers/create', [App\Http\Controllers\SuppliersController::class, 'create'])->name('suppliers.create');
    Route::post('/suppliers', [App\Http\Controllers\SuppliersController::class,'store'])->name('suppliers.store');
    Route::get('/suppliers/{id}', [App\Http\Controllers\SuppliersController::class,'show'])->name('suppliers.show');
    Route::get('/suppliers/{id}/edit', [App\Http\Controllers\SuppliersController::class,'edit'])->name('suppliers.edit');
    Route::put('/suppliers/{id}', [App\Http\Controllers\SuppliersController::class,'update'])->name('suppliers.update');
    Route::delete('/suppliers/{id}', [App\Http\Controllers\SuppliersController::class,'destroy'])->name('suppliers.destroy');


    //Route::get('/users', [App\Http\Controllers\UserController::class,'index'])->name('login');
    Route::get('/users',[App\Http\Controllers\UserController::class,'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\UserController::class,'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class,'store'])->name('users.store');
    Route::get('/users/{id}', [App\Http\Controllers\UserController::class,'show'])->name('users.show');
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class,'edit'])->name('users.edit');
    Route::put('/users/{id}', [App\Http\Controllers\UserController::class,'update'])->name('users.update');
    Route::delete('/users/{id}', [App\Http\Controllers\UserController::class,'destroy'])->name('users.destroy');



    Route::get('/patients', [App\Http\Controllers\PatientsController::class, 'index'])->name('patients.index');
    Route::get('/patients/create', [App\Http\Controllers\PatientsController::class, 'create'])->name('patients.create');
    Route::post('/patients', [App\Http\Controllers\PatientsController::class,'store'])->name('patients.store');
    Route::get('/patients/{id}',[App\Http\Controllers\PatientsController::class, 'show'])->name('patients.show');
    Route::get('/patients/{id}/edit', [App\Http\Controllers\PatientsController::class, 'edit'])->name('patients.edit');
    Route::put('/patients/{id}', [App\Http\Controllers\PatientsController::class, 'update'])->name('patients.update');
    Route::delete('/patients/{id}', [App\Http\Controllers\PatientsController::class, 'destroy'])->name('patients.destroy');


    Route::get('/orders', [App\Http\Controllers\OrderController::class,'index'])->name('orders.index');
    Route::get('/orders/create',[App\Http\Controllers\OrderController::class,'create'])->name('orders.create');
    Route::post('/orders', [App\Http\Controllers\OrderController::class,'store'])->name('orders.store');
    Route::get('/orders/{id}',[App\Http\Controllers\OrderController::class,'show'])->name('orders.show');
    Route::get('/orders/{id}/edit', [App\Http\Controllers\OrderController::class,'edit'])->name('orders.edit');
    Route::put('/orders/{id}', [App\Http\Controllers\OrderController::class,'update'])->name('orders.update');
    Route::delete('/orders/{id}', [App\Http\Controllers\OrderController::class,'destroy'])->name('orders.destroy');
    Route::get('/orders/{id}/generate-invoice', [App\Http\Controllers\OrderController::class ,'generateInvoice'])->name('orders.generate-invoice');
    Route::get('/orders/generate-invoices', [App\Http\Controllers\OrderController::class,'generateInvoices'])->name('orders.generate-invoices');
    Route::get('/orders/{order}/download-invoice', [App\Http\Controllers\OrderController::class, 'downloadInvoice'])->name('orders.downloadInvoice');




    Route::get('/deliveries', [App\Http\Controllers\DeliveryController::class, 'index'])->name('deliveries.index');
    Route::get('/deliveries/create', [App\Http\Controllers\DeliveryController::class,'create'])->name('deliveries.create');
    Route::post('/deliveries', [App\Http\Controllers\DeliveryController::class,'store'])->name('deliveries.store');
    Route::get('/deliveries/{id}', [App\Http\Controllers\DeliveryController::class,'show'])->name('deliveries.show');
    Route::get('/deliveries/{id}/edit', [App\Http\Controllers\DeliveryController::class,'edit'])->name('deliveries.edit');
    Route::put('/deliveries/{id}', [App\Http\Controllers\DeliveryController::class,'update'])->name('deliveries.update');
    Route::delete('/deliveries/{id}', [App\Http\Controllers\DeliveryController::class,'destroy'])->name('deliveries.destroy');


  

Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [App\Http\Controllers\EmployeesController::class, 'create'])->name('employees.create');
Route::post('/employees', [App\Http\Controllers\EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'show'])->name('employees.show');
Route::get('/employees/{id}/edit', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('employees.destroy');


   
    // Users management
    Route::resource('admin/users', 'App\Http\Controllers\Admin\UserController')->names('admin.users') ->parameters([
        'users' => 'id'
    ]);


    // Patients management
    Route::resource('admin/patients', 'App\Http\Controllers\Admin\PatientController')->names('admin.patients')->parameters([
        'patients' => 'id'
    ]);



    // Products management
    Route::resource('admin/products', 'App\Http\Controllers\Admin\ProductController')->names('admin.products')->parameters([
        'products' => 'id'
    ]);



    // Suppliers management
    Route::resource('admin/suppliers', 'App\Http\Controllers\Admin\SupplierController')->names('admin.suppliers')->parameters([
        'supplier' => 'id'
    ]);



    // Orders management
    Route::resource('admin/orders', 'App\Http\Controllers\Admin\OrderController')->names('admin.orders')->parameters([
        'orders' => 'id'
    ]);



    // Deliveries management
    Route::resource('admin/deliveries', 'App\Http\Controllers\Admin\DeliveryController')->names('admin.deliveries')->parameters([
        'delivery' => 'id'
    ]);
;


    // Employees management
    Route::resource('admin/employees', 'App\Http\Controllers\Admin\EmployeesController')->names('admin.employees')->parameters([
        'employee' => 'id'
    ]);



    // Reports
    // Route::get('admin/reports', 'App\Http\Controllers\Admin\ReportsController')->names('admin.reports')->parameters([
    //     'reports' => 'id'
    // ]);
;


   


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
