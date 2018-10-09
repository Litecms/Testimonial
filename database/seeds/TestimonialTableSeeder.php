<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.testimonial.testimonial.model.table'))->insert([
            [
                'id'           => '1',
                'name'          => 'Julie Walters',
                'designation'   => 'developer',
                'description'   => 'Life is 10% what happens to you and 90% how you react to it.',
                'image'         => '[{"title":"115429","caption":"115429","url":"115429","desc":null,"folder":"2018\\/09\\/21\\/101643175\\/image","time":"2018-09-21 10:16:54","path":"testimonial\\/testimonial\\/2018\\/09\\/21\\/101643175\\/image\\/115429.jpg","file":"115429.jpg"}]',
                'date'          => '2018-11-30',
                'slug'          => 'sharma',
                'status'        => null,
                'user_id'       => '1',
                'user_type'     => 'App\\User',
                'upload_folder' => null,
                'deleted_at'    => null,
                'created_at'    => '2018-01-25 23:10:38',
                'updated_at'    => '2018-09-21 10:16:56'
            ],
            [
                'id'           => '2',
                'name'          => 'Anthony Hopkins',
                'designation'   => 'designer',
                'description'   => 'There is only one happiness in this life,
             to love and be loved',
                'image'         => '[{"title":"Kenneth branagh","caption":"Kenneth branagh","url":"Kenneth branagh","desc":null,"folder":"2018\\/09\\/21\\/101701659\\/image","time":"2018-09-21 10:17:11","path":"testimonial\\/testimonial\\/2018\\/09\\/21\\/101701659\\/image\\/kenneth-branagh.jpg","file":"kenneth-branagh.jpg"}]',
                'date'          => '0001-11-30',
                'slug'          => 'qwert',
                'status'        => null,
                'user_id'       => '1',
                'user_type'     => 'App\\User',
                'upload_folder' => null,
                'deleted_at'    => null,
                'created_at'    => '2018-02-01 11:52:29',
                'updated_at'    => '2018-09-21 10:17:18'
            ],
            [
                'id'           => '3',
                'name'          => 'Michael Caine',
                'designation'   => 'Developer',
                'description'   => 't’s happened to me. And if you’re reading this,
             chances are it’s happened to you,
             too.',
                'image'         => '[{"title":"Pexels photo 874158","caption":"Pexels photo 874158","url":"Pexels photo 874158","desc":null,"folder":"2018\\/09\\/21\\/101113461\\/image","time":"2018-09-21 10:11:42","path":"testimonial\\/testimonial\\/2018\\/09\\/21\\/101113461\\/image\\/pexels-photo-874158.jpeg","file":"pexels-photo-874158.jpeg"}]',
                'date'          => '2018-04-30',
                'slug'          => 'alvin-davis',
                'status'        => null,
                'user_id'       => '1',
                'user_type'     => 'App\\User',
                'upload_folder' => null,
                'deleted_at'    => null,
                'created_at'    => '2018-05-02 06:05:32',
                'updated_at'    => '2018-09-21 10:12:42'
            ],
            [
                'id'           => '4',
                'name'          => 'Sandrea Hanson',
                'designation'   => 'Developer',
                'description'   => 'Advertisers have attempted to quantify and qualify the use of celebrities in their marketing campaigns by evaluating the awareness generated,
             appeal,
             and relevance to a brand\'s image and the celebrity\'s influence on consumer buying behavior.',
                'image'         => '[{"title":"6030298 image of beautiful girl","caption":"6030298 image of beautiful girl","url":"6030298 image of beautiful girl","desc":null,"folder":"2018\\/09\\/21\\/101024994\\/image","time":"2018-09-21 10:10:31","path":"testimonial\\/testimonial\\/2018\\/09\\/21\\/101024994\\/image\\/6030298-image-of-beautiful-girl.jpg","file":"6030298-image-of-beautiful-girl.jpg"}]',
                'date'          => '1970-01-13',
                'slug'          => 'meenu-mathew',
                'status'        => null,
                'user_id'       => '1',
                'user_type'     => 'App\\User',
                'upload_folder' => null,
                'deleted_at'    => null,
                'created_at'    => '2018-05-07 07:53:00',
                'updated_at'    => '2018-09-21 10:10:46'],
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
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'testimonials',
                'name'        => 'Testimonial',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 5,
                'key'         => null,
                'url'         => 'testimonials',
                'name'        => 'Testimonial',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Testimonial',
        'module'    => 'Testimonial',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'testimonial.testimonial.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
