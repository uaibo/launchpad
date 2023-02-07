<?php
use Uaibo\Launchpad\Controllers\LaunchpadController;
use Illuminate\Support\Facades\Route;

// launchpad route
Route::get('/launch', [LaunchpadController::class, 'launchPage'])->name('launchpad.index');

// redirect everything in launchpad mode
if( config('app.mode') === 'launchpad' ){
    Route::get('{any}', function() {
        return redirect(route('launchpad.index'), 302);
        })->where('any', '^(?!launch).*$');
}
