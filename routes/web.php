<?php

use App\Http\Livewire\Checkout\CounterCheckout;
use App\Http\Livewire\CustomerOrder\CustomerOrder;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Ingredients\Ingredients;
use App\Http\Livewire\MainCategory\MainCategory;
use App\Http\Livewire\MainGroup\MainGroup;
use App\Http\Livewire\MainGroup\MainGroupController;
use App\Http\Livewire\ManageIngredients\ManageIngredients;
use App\Http\Livewire\MenuListings\MenuListings;
use App\Http\Livewire\MenuListings\MenuListingsCreate;
use App\Http\Livewire\MenuStock\MenuStock;
use App\Http\Livewire\User\UserController;
use App\Http\Livewire\User\UserCreate;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/user-create', UserCreate::class)->name('user_create');
    Route::get('/main-group', MainGroup::class)->name('main_group');
    Route::get('/main-category', MainCategory::class)->name('main_category');
    Route::get('/menu-listings', MenuListings::class)->name('menu_listings');
    Route::get('/menu-listings-create', MenuListingsCreate::class)->name('menu_listings_create');
    Route::get('/ingredients', Ingredients::class)->name('ingredients');
    Route::get('/manage-ingredients/{id}', array('as' => 'manage_ingredients', 'uses' => ManageIngredients::class));
    Route::get('/customer_order', CustomerOrder::class)->name('customer_order');
    Route::get('/counter_checkout', CounterCheckout::class)->name('counter_checkout');
    Route::get('/menu-stock', MenuStock::class)->name('menu_stock');
});


require __DIR__ . '/auth.php';
