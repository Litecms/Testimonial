<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([

            [
                'category_id'   => '2',
                'title'         => 'SED UT PERSPICIATIS UNDE OMNIS ISTE',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste',
                'description'   => 'Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper.Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales.I am not a great cook, I am not a great artist, but I love art, and I love food, so I am the perfect traveller.- Michael Palin',
                'user_id'       => '1',
                'upload_folder' => 'blogs/2016/07/21/120649337',
                'image'         => '',
                'images'        => '[{"folder":"blogs\\/2016\\/07\\/21\\/120649337\\/images","file":"blog1.jpg","caption":"Blog1","time":"2016-07-21 12:07:06"},{"folder":"blogs\\/2016\\/07\\/21\\/120649337\\/images","file":"blog2.jpg","caption":"Blog2","time":"2016-07-21 12:07:07"},{"folder":"blogs\\/2016\\/07\\/21\\/120649337\\/images","file":"blog3.jpg","caption":"Blog3","time":"2016-07-21 12:07:07"}]',
                'viewcount'     => '0',
                'status'        => 'Show',
                'published'     => 'No',
                'posted_on'     => '2016-07-19',
                'created_at'    => '2016-07-19 07:55:47',
                'updated_at'    => '2016-07-21 12:07:09',
                'deleted_at'    => null,
            ],
            [
                'category_id'   => '2',
                'title'         => 'SED UT PERSPICIATIS UNDE OMNIS ISTE',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste-2',
                'description'   => 'Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper. Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales. I am not a great cook, I am not a great artist, but I love art, and I love food, so I am the perfect traveller. - Michael Palin',
                'user_id'       => '1',
                'upload_folder' => 'blogs/2016/07/21/120721471',
                'image'         => '',
                'images'        => '[{"folder":"blogs\\/2016\\/07\\/21\\/120721471\\/images","file":"blog3.jpg","caption":"Blog3","time":"2016-07-21 12:07:36"},{"folder":"blogs\\/2016\\/07\\/21\\/120721471\\/images","file":"blog4.jpg","caption":"Blog4","time":"2016-07-21 12:07:36"},{"folder":"blogs\\/2016\\/07\\/21\\/120721471\\/images","file":"blog5.jpg","caption":"Blog5","time":"2016-07-21 12:07:36"}]',
                'viewcount'     => '0',
                'status'        => 'Show',
                'published'     => 'No',
                'posted_on'     => '2016-07-19',
                'created_at'    => '2016-07-19 08:01:27',
                'updated_at'    => '2016-07-21 12:07:40',
                'deleted_at'    => null,
            ],
            [
                'category_id'   => '1',
                'title'         => 'SED UT PERSPICIATIS UNDE OMNIS ISTE',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste-3',
                'description'   => 'Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec, blandit vel, egestas et, augue. Vestibulum tincidunt malesuada tellus. Ut ultrices ultrices enim. Curabitur sit amet mauris. Morbi in dui quis est pulvinar ullamcorper.

Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo. Sed pretium blandit orci. Ut eu diam at pede suscipit sodales.

I am not a great cook, I am not a great artist, but I love art, and I love food, so I am the perfect traveller.

- Michael Palin',
                'user_id'       => '1',
                'upload_folder' => 'blogs/2016/07/21/120743469',
                'image'         => '',
                'images'        => '[{"caption":"Blog1","folder":"blogs\\/2016\\/07\\/21\\/120743469\\/images","time":"2016-07-21 12:07:58","file":"blog1.jpg"},{"caption":"Blog3","folder":"blogs\\/2016\\/07\\/21\\/120743469\\/images","time":"2016-07-21 12:07:58","file":"blog3.jpg"},{"folder":"blogs\\/2016\\/07\\/21\\/120743469\\/images","file":"blog2.jpg","caption":"Blog2","time":"2016-07-21 12:08:19"}]',
                'viewcount'     => '0',
                'status'        => 'Show',
                'published'     => 'No',
                'posted_on'     => '2016-07-19',
                'created_at'    => '2016-07-19 08:03:14',
                'updated_at'    => '2016-07-21 12:08:22',
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
