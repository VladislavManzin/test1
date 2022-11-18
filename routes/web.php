<?php 
Route::get('/products', [App\Http\Controllers\ProductController::class, "ShowProducts"]);
Route::get('/test/blade', [App\Http\Controllers\Employees::class, "blade"]);

?>