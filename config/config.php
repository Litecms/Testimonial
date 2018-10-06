<?php

return [

    /**
     * Provider.
     */
    'provider'    => 'litecms',

    /*
     * Package.
     */
    'package'     => 'testimonial',

    /*
     * Modules.
     */
    'modules'     => ['testimonial'],

    'testimonial' => [
        'model'      => [
            'model'         => \Litecms\Testimonial\Models\Testimonial::class,
            'table'         => 'testimonials',
            'presenter'     => \Litecms\Testimonial\Repositories\Presenter\TestimonialPresenter::class,
            'hidden'        => [],
            'visible'       => [],
            'guarded'       => ['*'],
            'slugs'         => ['slug' => 'name'],
            'dates'         => ['deleted_at', 'created_at', 'updated_at', 'date'],
            'appends'       => [],
            'fillable'      => ['id', 'name', 'designation', 'description', 'image', 'date', 'slug', 'status', 'user_id', 'user_type', 'upload_folder', 'deleted_at', 'created_at', 'updated_at'],
            'translatables' => [],
            'upload_folder' => 'testimonial/testimonial',
            'uploads'       => [

                'image' => [
                    'count' => 1,
                    'type'  => 'image',
                ],
                'file'  => [
                    'count' => 1,
                    'type'  => 'file',
                ],

            ],

            'casts'         => [

                'image' => 'array',
                'file'  => 'array',

            ],

            'revision'      => [],
            'perPage'       => '20',
            'search'        => [
                'name' => 'like',
                'status',
            ],
        ],

        'controller' => [
            'provider' => 'Litecms',
            'package'  => 'Testimonial',
            'module'   => 'Testimonial',
        ],

    ],
];
