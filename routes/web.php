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
    return view('homepage');
})->name('homepage');
Route::get('/gyms', function () {
    return view('gyms');
})->name('gyms');
Route::get('/abbonomenten', function () {
    return view('abbo');
})->name('abbo');
Route::get('data', function(){
    $data = array('Paard', 'Kip', 'Koe', 'Geit');
    return $data;
});
Route::get('/artikel/{name}/{leeftijd}', function(){
})
    ->where('naam', '[a-zA-Z\-]+')
    ->where('naam', '\d+')
    ->name('artikelopnaam')
;
Route::get('/artikel-op-nummer/nummer-{artikelnummer}', 'ArticleController@showArticle')
    ->where('naam', '\d+')
    ->name('artikel.opnummer')
;
Route::get('/inschrijven', 'formController@showForm')
    ->name('registration.form');
Route::post('/inschrijven',	'formController@handleForm')
    ->name('registration.form.handle');
Route::get('/inschrijven/bevestiging', 'FormController@confirmationPage')
    ->name('registration.confirmation');
Route::get('/photo-gallery','PhotoGalleryController@listPhotos')
    ->name('gallery.index');
Route::get('/photo-gallery/add-photo','PhotoGalleryController@showPhotoForm')
    ->name('gallery.addPhoto');
Route::post('/photo-gallery/add-photo','PhotoGalleryController@savePhotoForm')
    ->name('gallery.save_photo');
