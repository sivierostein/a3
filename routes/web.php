<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', SearchController::class . '@makeSearchForm');
Route::any('/process', SearchController::class . '@doSearch');
