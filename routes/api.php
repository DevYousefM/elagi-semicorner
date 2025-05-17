<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Registration route
Route::post('/register', [AuthController::class, 'register']);

// Otp route
Route::post('/verify-otp', [AuthController::class, 'verifyOtp']);

//resent OTP route
Route::post('/resend-otp', [AuthController::class, 'resendOtp']);


// Login route
Route::post('/login', [AuthController::class, 'login']);
Route::post('/validate-token', [AuthController::class, 'validateToken']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);

Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::put('/user', [AuthController::class, 'update'])->middleware('auth:sanctum');
Route::post('/user/update', [AuthController::class, 'update'])->middleware('auth:sanctum');
Route::post('/contact/save', [AuthController::class, 'store']);
Route::post('/store-rare-medicine', [AuthController::class, 'storeRareMedicine'])->middleware('auth:sanctum');

Route::post('/upload-prescription', [AuthController::class, 'uploadPrescription'])->middleware('auth:sanctum');
Route::post('/upload-medicalTest', [AuthController::class, 'uploadMedicalTest'])->middleware('auth:sanctum');

Route::get('/medicines', [AuthController::class, 'product']);
Route::get('/medicines/{product}', [AuthController::class, 'show']);
Route::get('/medicines/category/{categorySlug}', [AuthController::class, 'getByCategory']);

Route::post('/favorites/add/{productId}', [AuthController::class, 'add'])->middleware('auth:sanctum');
Route::get('/favorites', [AuthController::class, 'listFavorites'])->middleware('auth:sanctum');
Route::delete('/favorites/remove/{id}', [AuthController::class, 'removeFromFavorites'])->middleware('auth:sanctum');
Route::delete('/favorites/clear', [AuthController::class, 'clearAll'])->middleware('auth:sanctum');
Route::post('/create-payment-intent', [AuthController::class, 'createPaymentIntent']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/cart/add', [AuthController::class, 'addToCart']);
    Route::delete('/cart/clear', [AuthController::class, 'clearCart']);
    Route::get('/cart', [AuthController::class, 'getCart']);
    Route::patch('/cart/{cartItem}', [AuthController::class, 'updateQuantity']);
    Route::delete('/cart/{cartItem}', [AuthController::class, 'removeItem']);
    Route::get('/cart/quantity', [AuthController::class, 'getCartQuantity']);
});
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/feedback', [AuthController::class, 'storeFeedback']);
});
Route::get('/feedback', [AuthController::class, 'index']);


Route::post('/checkout', [AuthController::class, 'checkout'])->middleware('auth:sanctum');
Route::get('/orders', [AuthController::class, 'getOrders'])->middleware('auth:sanctum');
Route::post('/donate', [AuthController::class, 'initiateDonation']);
Route::post('/payment/callback', [AuthController::class, 'handleCallback'])->middleware('auth:sanctum');
Route::get('/check-payment-status/{paymentId}', [AuthController::class, 'checkPaymentStatus']);


Route::get('/reset-db', [DashboardController::class, "resetDB"])->middleware(["auth:sanctum", 'admin']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::post('/dashlogin', [DashboardController::class, 'login']);
Route::post('/validate-token', [DashboardController::class, 'validateToken']);
Route::post('/logout', [DashboardController::class, 'logout'])->middleware('auth:sanctum');

// Dashboard statistics
Route::get('/dashboard/users', [DashboardController::class, 'countUsers'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/medicines', [DashboardController::class, 'countMedicines'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/orders', [DashboardController::class, 'countOrders'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/total-sales-revenue', [DashboardController::class, 'getTotalSalesRevenue'])->middleware(["auth:sanctum", 'admin']);

// User routes
Route::get('/users', [DashboardController::class, 'index']);
Route::put('/users/{user}', [DashboardController::class, 'update'])->middleware(["auth:sanctum", 'admin']);
Route::delete('/users/{user}', [DashboardController::class, 'destroy'])->middleware(["auth:sanctum", 'admin']);

// Order routes
Route::get('/dorders', [DashboardController::class, 'indexOrders']);
Route::get('/dorders/{id}', [DashboardController::class, 'showOrderDetails']);
Route::put('/dorders/{order}', [DashboardController::class, 'updateOrders'])->middleware(["auth:sanctum", 'admin']);
Route::delete('/dorders/{order}', [DashboardController::class, 'destroyOrders'])->middleware(["auth:sanctum", 'admin']);

// Order items routes
Route::put('/order-items/{id}', [DashboardController::class, 'updateOrderItem'])->middleware(["auth:sanctum", 'admin']);

// Product management routes
Route::get('/products', [DashboardController::class, 'indexProducts']);
Route::get('/products/{product}', [DashboardController::class, 'showProducts']);
Route::post('/products', [DashboardController::class, 'storeProducts'])->middleware(["auth:sanctum", 'admin']);
Route::put('/products/{id}', [DashboardController::class, 'updateProducts'])->middleware(["auth:sanctum", 'admin']);
Route::delete('/products/{product}', [DashboardController::class, 'destroyProducts'])->middleware(["auth:sanctum", 'admin']);

// Rare Medicine Requests management routes
Route::get('/rare-medicine-requests', [DashboardController::class, 'indexRareMedicine'])->middleware(["auth:sanctum", 'admin']);
Route::delete('/rare-medicine-requests/{id}', [DashboardController::class, 'destroyRareMedicine'])->middleware(["auth:sanctum", 'admin']);


// Feedback management routes
Route::get('/pinnedFeedbacks', [DashboardController::class, 'getPinnedFeedbacks'])->middleware(["auth:sanctum", 'admin']);
Route::post('/approveFeedback/{id}', [DashboardController::class, 'approveFeedback'])->middleware(["auth:sanctum", 'admin']);
Route::delete('/ignoreFeedback/{id}', [DashboardController::class, 'ignoreFeedback'])->middleware(["auth:sanctum", 'admin']);
Route::get('/feedbacks', [DashboardController::class, 'indexFeedback']);
Route::delete('/feedbacks/{id}', [DashboardController::class, 'destroyFeedback'])->middleware(["auth:sanctum", 'admin']);


// Contact management routes
Route::get('/contacts', [DashboardController::class, 'indexContact']);
Route::delete('/contacts/{id}', [DashboardController::class, 'destroyContact']);

Route::get('/notifications', [DashboardController::class, 'indexNotification']);
Route::get('/notifications/{id}', [DashboardController::class, 'showNotification']);
Route::patch('notifications/{id}/unread', [DashboardController::class, 'markAsUnread']);
Route::patch('notifications/{id}/read', [DashboardController::class, 'markAsRead']);
Route::patch('notifications/mark-all-read', [DashboardController::class, 'markAllAsRead']);
Route::patch('notifications/mark-all-unread', [DashboardController::class, 'markAllAsUnread']);
Route::delete('notifications/{id}', [DashboardController::class, 'deleteNotification']);


Route::get('/dashboard/chart-data', [DashboardController::class, 'getChartData'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/most-sold-medicines', [DashboardController::class, 'getMostSoldMedicines'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/user-registrations', [DashboardController::class, 'getUserRegistrationsOverTime'])->middleware(["auth:sanctum", 'admin']);
Route::get('/dashboard/sales-revenue', [DashboardController::class, 'getSalesRevenue'])->middleware(["auth:sanctum", 'admin']);
