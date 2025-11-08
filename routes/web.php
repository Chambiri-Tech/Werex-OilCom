<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // For sending emails
use App\Http\Controllers\OTPController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// --------------------
// Public Routes
// --------------------
Route::get('/', function () {
    return view('welcome'); // Your welcome page
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

// News list route
Route::get('/news', function () {
    $news = [
        [
            'id' => 1,
            'title' => 'New 1-Litre and 2-Litre Bottles Now Available',
            'summary' => 'We\'ve introduced new bottle sizes to make Werex cooking oil more convenient...',
            'content' => 'We\'ve launched new 1-litre and 2-litre bottles based on customer feedback. These sizes are ideal for households that cook daily. Available across our local distributors and through our home delivery program.',
        ],
        [
            'id' => 2,
            'title' => 'Weekend Discount on Bulk Orders',
            'summary' => 'Enjoy up to 10% off when you buy in bulk this weekend...',
            'content' => 'From Friday to Sunday, we\'re offering 10% off on all bulk orders above 20 litres. Small shops, hotels, and restaurants can take advantage of this deal by ordering through our agents or online form.',
        ],
        [
            'id' => 3,
            'title' => 'Improved Oil Purification Process',
            'summary' => 'We\'ve upgraded our filtering and refining process...',
            'content' => 'Our new purification setup removes impurities more efficiently, ensuring cleaner, clearer, and healthier cooking oil. This step enhances shelf life and flavor quality.',
        ],
        [
            'id' => 4,
            'title' => 'Free Home Delivery in Selected Areas',
            'summary' => 'Customers within our local delivery zones can now get free delivery...',
            'content' => 'We\'re offering free home delivery for orders above 5 litres in specific localities. Delivery times are between 9 AM and 6 PM daily. Order through our local contact or website form.',
        ],
        [
            'id' => 5,
            'title' => 'Customer Awareness Campaign',
            'summary' => 'We\'re helping customers identify pure cooking oil...',
            'content' => 'We\'ve started a "Know Your Oil" campaign to educate households on choosing safe, pure cooking oil and understanding labeling and quality standards. Look out for our local events and flyers.',
        ],
    ];
    return view('news.index', compact('news'));
})->name('news.index');

// Individual news articles route
Route::get('/news/{id}', function ($id) {
    $news = [
        [
            'id' => 1,
            'title' => 'New 1-Litre and 2-Litre Bottles Now Available',
            'summary' => 'We\'ve introduced new bottle sizes to make Werex cooking oil more convenient...',
            'content' => 'We\'ve launched new 1-litre and 2-litre bottles based on customer feedback. These sizes are ideal for households that cook daily. Available across our local distributors and through our home delivery program.',
        ],
        [
            'id' => 2,
            'title' => 'Weekend Discount on Bulk Orders',
            'summary' => 'Enjoy up to 10% off when you buy in bulk this weekend...',
            'content' => 'From Friday to Sunday, we\'re offering 10% off on all bulk orders above 20 litres. Small shops, hotels, and restaurants can take advantage of this deal by ordering through our agents or online form.',
        ],
        [
            'id' => 3,
            'title' => 'Improved Oil Purification Process',
            'summary' => 'We\'ve upgraded our filtering and refining process...',
            'content' => 'Our new purification setup removes impurities more efficiently, ensuring cleaner, clearer, and healthier cooking oil. This step enhances shelf life and flavor quality.',
        ],
        [
            'id' => 4,
            'title' => 'Free Home Delivery in Selected Areas',
            'summary' => 'Customers within our local delivery zones can now get free delivery...',
            'content' => 'We\'re offering free home delivery for orders above 5 litres in specific localities. Delivery times are between 9 AM and 6 PM daily. Order through our local contact or website form.',
        ],
        [
            'id' => 5,
            'title' => 'Customer Awareness Campaign',
            'summary' => 'We\'re helping customers identify pure cooking oil...',
            'content' => 'We\'ve started a "Know Your Oil" campaign to educate households on choosing safe, pure cooking oil and understanding labeling and quality standards. Look out for our local events and flyers.',
        ],
    ];

    $newsItem = collect($news)->firstWhere('id', (int)$id);

    if (!$newsItem) {
        abort(404, 'News article not found');
    }

    return view('news.show', compact('newsItem'));
})->name('news.show');

// Later routes for Admin to be implemented
Route::middleware(['auth'])->group(function () {
    // News management
    Route::get('/admin/news', function () {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    })->name('admin.news.index');

    Route::get('/admin/news/create', function () {
        return view('admin.news.create');
    })->name('admin.news.create');

    Route::post('/admin/news', function (Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'content' => 'required|string',
        ]);

        News::create($request->all());

        return redirect()->route('admin.news.index')->with('success', 'News created successfully!');
    })->name('admin.news.store');

    Route::get('/admin/news/{id}/edit', function ($id) {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    })->name('admin.news.edit');

    Route::put('/admin/news/{id}', function (Request $request, $id) {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required|string',
            'content' => 'required|string',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->all());

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully!');
    })->name('admin.news.update');
});

// --------------------
// Contact Routes
// --------------------

// Show contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Handle contact form submission
Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Mail::send('emails.contact', [
    'name' => $request->name,
    'email' => $request->email,
    'userMessage' => $request->message
], function ($mail) use ($request) {
    $mail->to('chambirijoyce@gmail.com')
         ->from($request->email, $request->name)
         ->replyTo($request->email, $request->name)
         ->subject('📞 New Contact Form Submission - Werex OilCom');
    });


    return back()->with('success', 'Your message has been sent successfully!');
})->name('contact.store');

// --------------------
// Authentication Routes
// --------------------

// Show registration form
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

// Handle registration
Route::post('/register', [AuthController::class, 'register']);

// Show login form
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Handle login
Route::post('/login', [AuthController::class, 'login']);

// Password Reset Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

// Handle logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --------------------
// Email Verification
// --------------------
// Email verification link
Route::get('/verify-email/{token}', function($token){
    $user = \App\Models\User::where('email_verification_token',$token)->first();
    if(!$user) return redirect()->route('login')->with('error','Invalid verification link.');

    $user->email_verification_token = null;
    $user->save();

    session(['email'=>$user->email]);

    return redirect()->route('otp.verify.form') ->with('success','Email link verified! Enter OTP to complete verification.');
});

// Verification notice page
Route::get('/email/verify', function () {
    return view('auth.verify-email'); // create this blade
})->middleware('auth')->name('verification.notice');

// Verify email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard'); // redirect after verified
})->middleware(['auth', 'signed'])->name('verification.verify');

// Resend verification email
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Show OTP form
Route::get('/verify/email', [OTPController::class, 'showOtpForm'])->name('otp.verify.form');

// Verify OTP
Route::post('/otp/verify', [OTPController::class, 'verifyOtp'])->name('otp.verify');

// Resend OTP
Route::post('/resend-otp', [OTPController::class, 'resendOtp'])->name('otp.resend');


// --------------------
// Protected Routes
// --------------------
Route::get('/dashboard', [DashboardController::class, 'index']) ->middleware(['auth', 'verified']) ->name('dashboard');




// Add other routes that require login & verified email here

