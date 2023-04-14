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



// Route::view(uri:'/dashboard', view: 'dashboard')->name(name:'dashboard');
// Route::view(uri:'/delivery', view: 'delivery')->name(name:'delivery');
// Route::view(uri:'/patients', view: 'patients')->name(name:'patients');
// Route::view(uri:'/reports', view: 'reports')->name(name:'reports');
// Route::view(uri:'/settings', view: 'settings')->name(name:'settings');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});



// web routes
Route::get('/reports', [App\Http\Controllers\ReportsController::class, 'index'])->name('reports.index');
Route::get('/reports/sales', [App\Http\Controllers\ReportsController::class, 'generateSalesReportData'])->name('reports.sales');
Route::get('/reports/inventory', [App\Http\Controllers\ReportsController::class, 'generateInventoryReportData'])->name('reports.inventory');
Route::get('/reports/deliveries', [App\Http\Controllers\ReportsController::class, 'generateDeliveriesReportData'])->name('reports.deliveries');
Route::get('/reports/generate', [App\Http\Controllers\ReportsController::class, 'generate'])->name('reports.generate');

// Route::post('/reports/orders/generate', [App\Http\Controllers\ReportsController::class, 'generateOrderReport'])->name('reports.orders.generate');
// Route::post('/reports/deliveries/generate', [App\Http\Controllers\ReportsController::class, 'generateDeliveryReport'])->name('reports.deliveries.generate');


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

Route::controller(App\Http\Controllers\OrderController::class)->group(function(){
    Route::get('/orders/invoice/{orderid}','viewInvoice');
    Route::get('/orders/invoice/{orderid}/generate','generateInvoice');
   
});



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
    Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
Route::get('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin.users.show');
Route::post('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');



    // Patients management
    // Show patient list
Route::get('/admin/patients', [App\Http\Controllers\Admin\PatientController::class, 'index'])->name('admin.patients');

// Show patient creation form
Route::get('/admin/patients/create', [App\Http\Controllers\Admin\PatientController::class, 'create'])->name('admin.patients.create');

// Store new patient
Route::post('/admin/patients', [App\Http\Controllers\Admin\PatientController::class, 'store'])->name('admin.patients.store');

// Show patient details
Route::get('/admin/patients/{patient}', [App\Http\Controllers\Admin\PatientController::class, 'show'])->name('admin.patients.show');

// Show patient editing form
Route::get('/admin/patients/{patient}/edit', [App\Http\Controllers\Admin\PatientController::class, 'edit'])->name('admin.patients.edit');

// Update patient
Route::put('/admin/patients/{patient}', [App\Http\Controllers\Admin\PatientController::class, 'update'])->name('admin.patients.update');

// Delete patient
Route::delete('/admin/patients/{patient}', [App\Http\Controllers\Admin\PatientController::class, 'destroy'])->name('admin.patients.destroy');



    // Products management
    Route::get('/admin/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/products/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/admin/products', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/admin/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/admin/products/{product}/edit', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/admin/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/admin/products/{product}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin.products.destroy');
    


    // Suppliers management
    Route::get('/admin/suppliers', [App\Http\Controllers\Admin\SupplierController::class, 'index'])->name('admin.suppliers');
Route::get('/admin/suppliers/create', [App\Http\Controllers\Admin\SupplierController::class, 'create'])->name('admin.suppliers.create');
Route::post('/admin/suppliers', [App\Http\Controllers\Admin\SupplierController::class, 'store'])->name('admin.suppliers.store');
Route::get('/admin/suppliers/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'show'])->name('admin.suppliers.show');
Route::get('/admin/suppliers/{id}/edit', [App\Http\Controllers\Admin\SupplierController::class, 'edit'])->name('admin.suppliers.edit');
Route::put('/admin/suppliers/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'update'])->name('admin.suppliers.update');
Route::delete('/admin/suppliers/{id}', [App\Http\Controllers\Admin\SupplierController::class, 'destroy'])->name('admin.suppliers.destroy');




    // Orders management
    // Display all orders
Route::get('/admin/orders', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin.orders');

// Show the form for creating a new order
Route::get('/admin/orders/create', [App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin.orders.create');

// Store a newly created order in storage
Route::post('/admin/orders', [App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin.orders.store');

// Display the specified order
Route::get('/admin/orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin.orders.show');

// Show the form for editing the specified order
Route::get('/admin/orders/{id}/edit', [App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin.orders.edit');

// Update the specified order in storage
Route::put('/admin/orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin.orders.update');

// Remove the specified order from storage
Route::delete('/admin/orders/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin.orders.destroy');




    // Deliveries management
    // Index
Route::get('/admin/deliveries', [App\Http\Controllers\Admin\DeliveryController::class, 'index'])->name('admin.deliveries');

// Create
Route::get('/admin/deliveries/create', [App\Http\Controllers\Admin\DeliveryController::class, 'create'])->name('admin.deliveries.create');
Route::post('/admin/deliveries', [App\Http\Controllers\Admin\DeliveryController::class, 'store'])->name('admin.deliveries.store');

// Show
Route::get('/admin/deliveries/{delivery}', [App\Http\Controllers\Admin\DeliveryController::class, 'show'])->name('admin.deliveries.show');

// Edit
Route::get('/admin/deliveries/{delivery}/edit', [App\Http\Controllers\Admin\DeliveryController::class, 'edit'])->name('admin.deliveries.edit');
Route::put('/admin/deliveries/{delivery}', [App\Http\Controllers\Admin\DeliveryController::class, 'update'])->name('admin.deliveries.update');

// Destroy
Route::delete('/admin/deliveries/{delivery}', [App\Http\Controllers\Admin\DeliveryController::class, 'destroy'])->name('admin.deliveries.destroy');



    // Employees management
   // Display a listing of employees
Route::get('/admin/employees', [App\Http\Controllers\Admin\EmployeeController::class, 'index'])->name('admin.employees');

// Show the form for creating a new employee
Route::get('/admin/employees/create', [App\Http\Controllers\Admin\EmployeeController::class, 'create'])->name('admin.employees.create');

// Store a newly created employee in storage
Route::post('/admin/employees', [App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('admin.employees.store');

// Display the specified employee
Route::get('/admin/employees/{employee}', [App\Http\Controllers\Admin\EmployeeController::class, 'show'])->name('admin.employees.show');

// Show the form for editing the specified employee
Route::get('/admin/employees/{employee}/edit', [App\Http\Controllers\Admin\EmployeeController::class, 'edit'])->name('admin.employees.edit');

// Update the specified employee in storage
Route::put('/admin/employees/{employee}', [App\Http\Controllers\Admin\EmployeeController::class, 'update'])->name('admin.employees.update');

// Remove the specified employee from storage
Route::delete('/admin/employees/{employee}', [App\Http\Controllers\Admin\EmployeeController::class, 'destroy'])->name('admin.employees.destroy');



    // Reports
    // Route::get('admin/reports', 'App\Http\Controllers\Admin\ReportsController')->names('admin.reports')->parameters([
    //     'reports' => 'id'
    // ]);
;


   


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
