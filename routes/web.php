<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;

// Redirigir la raíz a beneficiarios
Route::get('/', function () {
    return redirect()->route('beneficiaries.index');
});

// Rutas de las secciones del menú
Route::get('/beneficiarios', [BeneficiaryController::class, 'index'])->name('beneficiaries.index');
Route::get('/proyectos', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/noticias', [NewsController::class, 'index'])->name('news.index');
// Ruta del panel AdminLTE
Route::get('/admin', function () {
    return view('admin.dashboard');
});
// Rutas de Servicio Social y Contacto
Route::get('/servicio-social', function () {
    return view('social-service.index');
})->name('social-service.index');

Route::get('/contacto', function () {
    return view('contact.index');
})->name('contact.index');

// Ruta para actualizar foto de beneficiario
Route::post('/beneficiarios/{beneficiary}/photo', [BeneficiaryController::class, 'updatePhoto'])->name('beneficiaries.updatePhoto');

require __DIR__.'/auth.php';