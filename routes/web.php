Route::get('/', function () {
    return view('home');
})->name('home.page');

Route::get('/item', function () {
    return view('item');
})->name('item.page');

Route::get('/picture', function () {
    return view('picture');
})->name('picture.page');
