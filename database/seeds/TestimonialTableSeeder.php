<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([

            [
                'user_id'       => '1',
                'name'          => 'Nicole Beck',
                'slug'          => 'nicole-beck',
                'description'   => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt .',
                'designation'   => 'MANAGER',
                'image'         => '{"folder":"testimonials\\/2016\\/07\\/21\\/105256265\\/image","file":"testimonial1.jpg","caption":"Testimonial1","time":"2016-07-21 10:53:06"}',
                'upload_folder' => 'testimonials/2016/07/21/105256265',
                'date'          => '2016-07-20',
                'status'        => 'show',
                'created_at'    => '2016-07-21 16:23:08',
                'updated_at'    => '2016-07-21 10:53:08',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'name'          => 'Kathy Harrison',
                'slug'          => 'kathy-harrison',
                'description'   => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt .',
                'designation'   => 'ACCOUNT MANAGER',
                'image'         => '{"folder":"testimonials\\/2016\\/07\\/21\\/105312859\\/image","file":"testimonial2.jpg","caption":"Testimonial2","time":"2016-07-21 10:53:17"}',
                'upload_folder' => 'testimonials/2016/07/21/105312859',
                'date'          => '2016-07-18',
                'status'        => 'show',
                'created_at'    => '2016-07-21 16:23:19',
                'updated_at'    => '2016-07-21 10:53:19',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'name'          => 'Peter Robertson',
                'slug'          => 'peter-robertson',
                'description'   => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt .',
                'designation'   => 'CEO',
                'image'         => '{"folder":"testimonials\\/2016\\/07\\/21\\/105322595\\/image","file":"testimonial3.jpg","caption":"Testimonial3","time":"2016-07-21 10:53:26"}',
                'upload_folder' => 'testimonials/2016/07/21/105322595',
                'date'          => '2016-07-11',
                'status'        => 'show',
                'created_at'    => '2016-07-21 16:23:28',
                'updated_at'    => '2016-07-21 10:53:28',
                'deleted_at'    => null,
            ],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'testimonial.testimonial.view',
                'name' => 'View Testimonial',
            ],
            [
                'slug' => 'testimonial.testimonial.create',
                'name' => 'Create Testimonial',
            ],
            [
                'slug' => 'testimonial.testimonial.edit',
                'name' => 'Update Testimonial',
            ],
            [
                'slug' => 'testimonial.testimonial.delete',
                'name' => 'Delete Testimonial',
            ],
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/testimonial/testimonial',
                'name'        => 'Testimonial',
                'description' => null,
                'icon'        => 'fa fa-comments-o',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'testimonials',
                'name'        => 'Testimonial',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'key'      => 'testimonial.testimonial.key',
        'name'     => 'Some name',
        'value'    => 'Some value',
        'type'     => 'Default',
        ],
         */
        ]);
    }
}
