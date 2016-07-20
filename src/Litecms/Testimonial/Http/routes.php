<?php

// Admin web routes  for testimonial
Route::group(['prefix' => trans_setlocale() . '/admin/testimonial'], function () {
    Route::resource('testimonial', 'Litecms\Testimonial\Http\Controllers\TestimonialAdminController');
});

// Admin API routes  for testimonial
Route::group(['prefix' => trans_setlocale() . 'api/v1/admin/testimonial'], function () {
    Route::resource('testimonial', 'Litecms\Testimonial\Http\Controllers\TestimonialAdminApiController');
});

// User web routes for testimonial
Route::group(['prefix' => trans_setlocale() . '/user/testimonial'], function () {
    Route::resource('testimonial', 'Litecms\Testimonial\Http\Controllers\TestimonialUserController');
});

// User API routes for testimonial
Route::group(['prefix' => trans_setlocale() . 'api/v1/user/testimonial'], function () {
    Route::resource('testimonial', 'Litecms\Testimonial\Http\Controllers\TestimonialUserApiController');
});

// Public web routes for testimonial
Route::group(['prefix' => trans_setlocale()], function () {
    Route::get('testimonials', 'Litecms\Testimonial\Http\Controllers\TestimonialController@index');
    Route::get('testimonial/{slug?}', 'Litecms\Testimonial\Http\Controllers\TestimonialController@show');
});

//  API routes for testimonial
Route::group(['prefix' => trans_setlocale() . 'api/v1/testimonials'], function () {
    Route::get('/', 'Litecms\Testimonial\Http\Controllers\TestimonialApiController@index');
    Route::get('/{slug?}', 'Litecms\Testimonial\Http\Controllers\TestimonialApiController@show');
});
