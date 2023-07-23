<?php
use Uaibo\Launchpad\Controllers\LaunchpadController;
use Illuminate\Support\Facades\Route;

$launchpadPath = config('launchpad.path');

// launchpad route
Route::get("/{$launchpadPath}", [LaunchpadController::class, 'launchPage'])->name('launchpad.index');

// redirect everything in launchpad mode
if( env('APP_MODE') === 'launchpad' && !auth()->check() )
{
    $domains = config('launchpad.domain');
    Route::domain($domains)->group(function () use ($launchpadPath)
    {
        Route::get('{any}', function()
        {
            return redirect(route('launchpad.index'), 302);
        })->where('any', "^(?!{$launchpadPath}|login|register|sources).*$");
    });
}
