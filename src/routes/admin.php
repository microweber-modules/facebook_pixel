<?php

Route::name('admin.facebook_pixel.')
    ->prefix(ADMIN_PREFIX . '/facebook-pixel')
    ->middleware(['admin'])
    ->namespace('MicroweberPackages\Modules\FacebookPixel\Http\Controllers\Admin')
    ->group(function () {

       Route::get('/', 'AdminFacebookPixelController@index')->name('index');

    });
