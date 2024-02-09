<?php
use App\Livewire\Home;
use App\Livewire\Invoice;
use App\Livewire\Profile;
use App\Livewire\Auth\login;
use App\Livewire\ItemDetails;
use App\Livewire\Dashboard\IMFOperation;
use App\Http\Controllers\logout;
use App\Livewire\Auth\CustomerLogin;
use App\Livewire\Auth\CustomerLogout;
use App\Livewire\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard\RolesTable;
use App\Livewire\Dashboard\SalesTable;
use App\Livewire\Dashboard\StaffTable;
use App\Livewire\Auth\CustomerRegister;
use App\Livewire\Dashboard\SectionTable;
use App\Livewire\Dashboard\StaffProfile;
use App\Livewire\Dashboard\CategoryTable;
use App\Livewire\Dashboard\CustomerTable;
use App\Livewire\Dashboard\MaterialTable;
use App\Livewire\Dashboard\InvoiceProcessing;

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

Route::get("/",Home::class)->name("home");
Route::get("/invoice",Invoice::class)->name("invoice");
Route::get("/customer-profile",Profile::class)->name("customer-profile")->middleware("customerAuth");
Route::get("/detaile/{id}",ItemDetails::class)->name("detaile");
// Route::get("/Authentication",Auth::class)->name("Authentication");

Route::get("/customerRegister",CustomerRegister::class)->name("customerRegister")->middleware("guest");
Route::get("/customerLogin",CustomerLogin::class)->name("customerLogin")->middleware("guest");
Route::get("/login",login::class)->name("login")->middleware("guest");
Route::get("/customerLogout",[logout::class,"logoutCustomer"])->name("customerLogout")->middleware("guest");


//Dashboard route
Route::get("Dashboard",Dashboard::class)->name("dashboard")->middleware("auth");
Route::get("rolesTable",RolesTable::class)->name("rolesTable")->middleware("auth");
Route::get("section-table",SectionTable::class)->name("sectionTable")->middleware("auth");
Route::get("category-table",CategoryTable::class)->name("categoryTable")->middleware("auth");
Route::get("staffTable",StaffTable::class)->name("staffTable")->middleware("auth");
Route::get("staff-profile",StaffProfile::class)->name("staff.profile")->middleware("auth");
Route::get("customer-table",CustomerTable::class)->name("customerTable")->middleware("auth");
Route::get("material-table",MaterialTable::class)->name("materialTable")->middleware("auth");
Route::get("sales-table",SalesTable::class)->name("salesTable")->middleware("auth");
Route::get("imf",IMFOperation::class)->name("imf")->middleware("auth");
Route::get("invoice-processing",InvoiceProcessing::class)->name("invoiceProcessing")->middleware("auth");
