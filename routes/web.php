    <?php

    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\Admin\UserController;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Admin\BlogController as AdminBlogController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\Admin\LanguageController;
    use Illuminate\Http\Request;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware(['auth'])->prefix('admin')->group(function () {
        Route::resource('users', UserController::class);
    });

    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('blogs', AdminBlogController::class);
    });

    // public blog listing & detail
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');


    Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
        Route::resource('languages', LanguageController::class)->except(['show']);
    });

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');


    Route::post('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    })->name('logout');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__.'/auth.php';
