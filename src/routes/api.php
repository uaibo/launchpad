<?php
use Uaibo\Launchpad\Controllers\LaunchpadController;
use Illuminate\Support\Facades\Route;

Route::post('launchpad/custom', [LaunchpadController::class, 'store'])->name('launchpad.store');

