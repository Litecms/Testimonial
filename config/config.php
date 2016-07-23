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
        /*
     * Image size.
     */
    'image'    => [

        'sm' => [
            'width'     => '160',
            'height'    => '120',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        
        'md' => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],


    ],

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
