<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\PaymentController;
use App\Models\UserCode;
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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
     

    return 'DONE'; //Return anything
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('verification-code/resend', function () {

    $user = Auth()->User();
    $nombre = Auth()->User()->first_name;
    $to = Auth()->User()->email;
    $caracteres_permitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $longitud = 6;
    $codigo = substr(str_shuffle($caracteres_permitidos), 0, $longitud);

    $code = UserCode::create([
        'user_id' => $user->id,
        'code' => $codigo
    ]);

    Mail::send('mail', ['nombre' => $nombre, 'codigo' => $codigo, 'user' => $user], function ($message) use ($to){

        $message->subject('Correo de verificación');
        $message->to($to);
    
    });

    return redirect()->to('verification-code');

})->name('send.verification.code');


Route::get('verification-code', function () {
    return view('auth.verification');
})->name('auth.verification');

Route::post('verificatio-done', [UserController::class, 'verifyCode'])->name('auth.verification');

//PRINCIPAL ROUTES

Route::get('sell-guest-posts', function() {
	return view('pages.sellGuestPosts');
})->name('sell-guest-posts');

Route::get('marketplace', [BuyController::class, 'index'])->name('marketplace');

Route::get('guest-posting-services', function() {
	return view('pages.guestPostingServices');
})->name('guest-posting-services');

Route::get('da-dr-increase-service', function() {
	return view('pages.da-dr');
})->name('da-dr-increase-service');

//END PRINCIPAL ROUTES
Route::get('plan-basic', function() {
  return view('buy.cart');
})->name('plan-basic');

Route::get('step-2', function() {
  return view('buy.cart2');
})->middleware('auth')->middleware('verifiedEmail')->name('step-2');

Route::get('plan-standard', function () {
    return view('buy.cart3');
})->name('plan-standard');

Route::get('plan-standard2', function () {
    return view('buy.cart4');
})->middleware('auth')->middleware('verifiedEmail')->name('plan-standard2');

Route::get('plan-premium', function () {
    return view('buy.cart5');
})->name('plan-premium');

Route::get('plan-premium2', function () {
    return view('buy.cart6');
})->middleware('auth')->middleware('verifiedEmail')->name('plan-premium2');

Route::get('plan-premium+', function () {
    return view('buy.cart7');
})->name('plan-premium+');

Route::get('plan-premium+-2', function () {
    return view('buy.cart8');
})->middleware('auth')->middleware('verifiedEmail')->name('plan-premium+-2');

//Carrito
Route::get('cart/add/{web_id}', [CartController::class, 'add'])->name('cart.add');

Route::get('cart/show/{id}', [CartController::class, 'cart'])->name('cart.show');

Route::post('cart/clear', [CartController::class, 'clear'])->name('cart.clear');

Route::get('cart/removeit/{id}', [CartController::class, 'removeit'])->name('cart.removeit');

Route::post('buy/buy-plan', [CartController::class, 'buyPlan'])->name('buy.buyplan');

//---------------------------------------------------------------------

//Route::get('cart', [BuyController::class, 'cart'])->name('cart');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('faqs', function() {
	return view('subpages.faqs');
})->name('faqs');

Route::get('term', function() {
	return view('subpages.term');
})->name('term');

Route::get('privacy', function() {
	return view('subpages.privacy');
})->name('privacy');

Route::get('refound-policy', function() {
	return view('subpages.refoundPolicy');
})->name('refound-policy');

Route::get('publisher', [PublisherController::class, 'index'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.index');

Route::get('publisher/add', [PublisherController::class, 'websiteAdd'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.add');

Route::get('publisher/websites', [PublisherController::class, 'websites'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.websites');

Route::get('publisher/websites/submitws', [PublisherController::class, 'submitWebsites'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.submitws');


Route::get('publisher/orders', [PublisherController::class, 'orders'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.orders');

Route::get('publisher/earning', [PublisherController::class, 'earning'])->middleware('auth')->middleware('verifiedEmail')->name('publisher.earning');

Route::get('advertiser', [AdvertiserController::class, 'index'])->middleware('auth')->middleware('verifiedEmail')->name('advertiser.index');

Route::get('advertiser/orders', [AdvertiserController::class, 'orders'])->middleware('auth')->middleware('verifiedEmail')->name('advertiser.orders');

Route::get('advertiser/service-orders', [AdvertiserController::class, 'serviceOrder'])->middleware('auth')->middleware('verifiedEmail')->name('advertiser.serviceo');

Route::get('advertiser/dadr', [AdvertiserController::class, 'goDADR'])->middleware('auth')->middleware('verifiedEmail')->name('advertiser.dadr');

Route::get('advertiser/deposit', [AdvertiserController::class, 'goDeposit'])->middleware('auth')->middleware('verifiedEmail')->name('advertiser.deposit');

Route::get('account', [UserController::class, 'edit'])->middleware('auth')->middleware('verifiedEmail')->name('user.edit');

Route::get('buy/{category}', [BuyController::class, 'show'])->name('buy.category');

Route::get('buy', [BuyController::class, 'marketplace'])->name('buy.marketplace');

Route::get('search', [CategoryController::class, 'search'])->name('search');

Auth::routes(['verify' => true]);

// Route::post('login', [LoginController::class, 'login'])->name('login');

// Payment
Route::get('paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('payWithPayPal');

Route::get('paypal/pay', [PaymentController::class, 'payWithPayPal1'])->name('payWithPayPal1');

Route::get('paypal/pay', [PaymentController::class, 'payWithPayPal2'])->name('payWithPayPal2');

Route::get('paypal/pay', [PaymentController::class, 'payWithPayPal3'])->name('payWithPayPal3');

Route::get('paypal/pay/{id}', [PaymentController::class, 'payWithPayPal4'])->name('payWithPayPal4');

//------------------------------------------------------------------------------
Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal.success');

Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal.cancel');

Route::get('paypal/status', [PaymentController::class, 'payPalStatus'])->name('payPalStatus');

Route::post('stripe/pay', [PaymentController::class, 'payWithStripe'])->name('payWithStripe');

Route::get('stripe/checkout-success', function() {
	return view('stripe.success');
})->name('stripe.success');

Route::get('stripe/checkout-cancel', function() {
	return view('stripe.cancel');
})->name('stripe.cancel');

Route::post('paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('payWithPayPal');

Route::get('paypal/checkout-success', function() {
	return view('paypal.success');
})->name('paypal.success');

Route::get('paypal/checkout-cancel', function() {
	return view('paypal.cancel');
})->name('paypal.cancel');

route::get('buy/cart', [CartController::class, 'create'])->middleware('auth')->middleware('verifiedEmail')->name('buy.cart');

Route::resource('websites', App\Http\Controllers\WebsiteController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('status', App\Http\Controllers\StatuController::class);

Route::resource('tlds', App\Http\Controllers\TldController::class);

Route::resource('languages', App\Http\Controllers\LanguageController::class);
