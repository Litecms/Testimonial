<?php

return [

    /**
     * Provider.
     */
    'provider'    => 'dentist',

    /*
     * Package.
     */
    'package'     => 'testimonial',

    /*
     * Modules.
     */
    'modules'     => ['testimonial'],

    'testimonial' => [
        'model'         => 'Litecms\Testimonial\Models\Testimonial',
        'table'         => 'testimonials',
        'presenter'     => \Litecms\Testimonial\Repositories\Presenter\TestimonialItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'name'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'name', 'designation', 'description', 'image', 'status', 'date','upload_folder'],

        'upload-folder' => '/uploads/testimonial/testimonial',
        'uploads'       => [
            'single'   => ['image'],
            'multiple' => [],
        ],
        'casts'         => [
            'image' => 'array',
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'date',
            'status',
            'designation',
        ],
    ],
];
