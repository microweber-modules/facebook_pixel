<?php

Route::name('facebook-pixel.')
    ->prefix('/facebook-pixel')
    ->middleware(['web'])
    ->namespace('MicroweberPackages\Modules\FacebookPixel\Http\Controllers')
    ->group(function () {

        Route::get('/export-feed', 'FacebookPixelExportController@index')->name('export-feed');

        Route::get('/faawf', function () {

            event(new \MicroweberPackages\SiteStats\Events\PingStatsEvent([
                'referer'=>site_url(),
            ]));

        });

    });
