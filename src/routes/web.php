<?php

use Illuminate\Support\Facades\Route;
use Shuklajasmin\Track\Http\Controllers\EmailOpenController;

Route::get('/email/track/{id}/{campaign}', [EmailOpenController::class,'capture'])->name('email.track');