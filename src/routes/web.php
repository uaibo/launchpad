<?php
use Uaibo\Launchpad\Controllers\LaunchpadController;
use Illuminate\Support\Facades\Route;

// launchpad route
Route::get('/launch', [LaunchpadController::class, 'launchPage'])->name('launchpad.index');

// redirect everything in launchpad mode
if( env('APP_MODE') === 'launchpad' )
{
    $domains = config('launchpad.domain');
    Route::domain($domains)->group(function ()
    {
        Route::get('{any}', function()
        {
            return redirect(route('launchpad.index'), 302);
        })->where('any', '^(?!launch).*$');
    });
}
