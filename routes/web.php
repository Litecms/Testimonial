<?php

// Resource routes  for testimonial
Route::group(['prefix' => set_route_guard('web').'/testimonial'], function () {
    Route::resource('testimonial', 'TestimonialResourceController');
});

// Public  routes for testimonial
Route::get('testimonial/popular/{period?}', 'TestimonialPublicController@popular');
Route::get('testimonials/', 'TestimonialPublicController@index');
Route::get('testimonials/{slug?}', 'TestimonialPublicController@show');

