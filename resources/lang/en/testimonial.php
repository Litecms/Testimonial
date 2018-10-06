<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for testimonial in testimonial package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  testimonial module in testimonial package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Testimonial',
    'names'         => 'Testimonials',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Testimonials',
        'sub'   => 'Testimonials',
        'list'  => 'List of testimonials',
        'edit'  => 'Edit testimonial',
        'create'    => 'Create new testimonial'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['show'=>'show','hide'=>'hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'designation'                => 'Please enter designation',
        'description'                => 'Please enter description',
        'image'                      => 'Please enter image',
        'date'                       => 'Please select date',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'upload_folder'              => 'Please enter upload folder',
        'deleted_at'                 => 'Please select deleted',
        'created_at'                 => 'Please select created',
        'updated_at'                 => 'Please select updated',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => 'Name',
        'designation'                => 'Designation',
        'description'                => 'Description',
        'image'                      => 'Image',
        'date'                       => 'Date',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'upload_folder'              => 'Upload folder',
        'deleted_at'                 => 'Deleted',
        'created_at'                 => 'Created',
        'updated_at'                 => 'Updated ',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'designation'                => ['name' => 'Designation', 'data-column' => 2, 'checked'],
        'date'                       => ['name' => 'Date', 'data-column' => 3, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Testimonials',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
