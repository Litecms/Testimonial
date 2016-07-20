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
                'description'   => ' simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy ',
                'designation'   => 'MANAGER',
                'image'         => '{"caption":"Testimonial1","efolder":"testimonials\\/488OIYhYcZrj56\\/image","file":"testimonial1.jpg"}',
                'upload_folder' => '',
                'date'          => '2016-07-20',
                'status'        => 'show',
                'created_at'    => '2016-07-20 12:29:54',
                'updated_at'    => '2016-07-20 06:59:54',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'name'          => 'Kathy Harrison',
                'slug'          => 'kathy-harrison',
                'description'   => ' simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy ',
                'designation'   => 'engineer',
                'image'         => '{"folder":"\\/uploads\\/testimonials\\/2016\\/07\\/20\\/070113753\\/image\\/","file":"testimonial2.jpg","caption":"Testimonial2","time":"2016-07-20 07:01:19","efolder":"testimonials\\/LzzPukhEcpe7EK\\/image"}',
                'upload_folder' => '',
                'date'          => '2016-07-18',
                'status'        => 'show',
                'created_at'    => '2016-07-20 12:31:21',
                'updated_at'    => '2016-07-20 07:01:21',
                'deleted_at'    => null,
            ],
            [
                'user_id'       => '1',
                'name'          => 'Peter Robertson',
                'slug'          => 'peter-robertson',
                'description'   => ' simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy ',
                'designation'   => 'software test engineer',
                'image'         => '{"caption":"Testimonial3","efolder":"testimonials\\/LzzPukhEcKVE03\\/image","file":"testimonial3.jpg"}',
                'upload_folder' => '',
                'date'          => '2016-07-11',
                'status'        => 'show',
                'created_at'    => '2016-07-20 12:31:31',
                'updated_at'    => '2016-07-20 07:01:31',
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
                'icon'        => null,
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
