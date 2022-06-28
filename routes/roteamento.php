// Parte de Roteamentos

// Route::get('/user/{user}', function (\App\Models\User $user) {
//     dd($user);

//     // return $request;

//     // return view('welcome');
// });

// Route::domain('{user}.cursolaravel.test')->group(function() {
//     Route::get('{id}', function ($user, $id) {
//         return $user . '-' . $id;
//     });
// });

// Route::redirect('rota-a', 'rota-b', 301);
// Route::permanentRedirect('rota-a', 'rota-b');

// Route::view('/welcome', 'welcome', [
//     'title' => 'Oieeeee',
// ]);

// Route::middleware('signed')->group(function () {
//     Route::get('user', function() {
//         return 'Oiieeeeeee';
//     })->name('users');

//     Route::get('user/{id}', function($id) {
//         return 'Oiieeeeeee ' . $id;
//     })->name('user');
// });

// Route:fallback(function(){
//     return view('welcome');
// });

// Route::prefix('user')->name('user.')->group(function () {
//     Route::get('', function() {
//         return 'Oiieeeeeee ';
//     })->name('users');
//     Route::get('{id}', function($id) {
//         return 'Oiieeeeeee ' . $id;
//     })->name('user');
// });

// Route::get('/user/{id}/{name}', function($id = null, $name = null) {
//     return 'User ' . $id . ' - ' . $name;
// });

// Route::get('token/{token}', function($token) {
//     return $token;
// });

// Route::get('rota-a', function () {
//     // lógica
//     return redirect()->route('rotab');
// });

// Route::get('rota-b', function () {
//     return 'ROTA B';
// })->name('rotab');

// Route::get('users', function () {
//     return 'Hii Lorenaa';
// })->name('users');
