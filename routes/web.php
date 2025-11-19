<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('pages.')->namespace('App\Http\Controllers\Pages')->group(function() {
    Route::get('/font-family', 'FontFamilyController@index')->name('font-family');
    Route::get('/font-size', 'FontSizeController@index')->name('font-size');
    Route::get('/font-style', 'FontStyleController@index')->name('font-style');
    Route::get('/font-weight', 'FontWeightController@index')->name('font-weight');
    Route::get('/letter-spacing', 'LetterSpacingController@index')->name('letter-spacing');
    Route::get('/line-height', 'LineHeightController@index')->name('line-height');
    Route::get('/text-decoration', 'TextDecorationController@index')->name('text-decoration');
    Route::get('/text-transform', 'TextTransformController@index')->name('text-transform');
    Route::get('/word-spacing', 'WordSpacingController@index')->name('word-spacing');
    Route::get('/white-space', 'WhiteSpaceController@index')->name('white-space');
    Route::get('/text-align', 'TextAlignController@index')->name('text-align');
    Route::get('/text-indent', 'TextIndentController@index')->name('text-indent');
    Route::get('/direction', 'DirectionController@index')->name('direction');
    Route::get('/writing-mode', 'WritingModeController@index')->name('writing-mode');
    Route::get('/vertical-align', 'VerticalAlignController@index')->name('vertical-align');
    Route::get('/border-radius', 'BorderRadiusController@index')->name('border-radius');
    Route::get('/border-width', 'BorderWidthController@index')->name('border-width');
    Route::get('/border-style', 'BorderStyleController@index')->name('border-style');
    Route::get('/background-color', 'BackgroundColorController@index')->name('background-color');
    Route::get('/color', 'ColorController@index')->name('color');
});