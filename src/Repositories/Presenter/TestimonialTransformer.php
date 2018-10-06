<?php

namespace Litecms\Testimonial\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class TestimonialTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Testimonial\Models\Testimonial $testimonial)
    {
        return [
            'id'                => $testimonial->getRouteKey(),
            'name'              => $testimonial->name,
            'designation'       => $testimonial->designation,
            'description'       => $testimonial->description,
            'image'             => $testimonial->image,
            'date'              => format_date($testimonial->date),
            'slug'              => $testimonial->slug,
            'status'            => $testimonial->status,
            'user_id'           => $testimonial->user_id,
            'user_type'         => $testimonial->user_type,
            'upload_folder'     => $testimonial->upload_folder,
            'deleted_at'        => $testimonial->deleted_at,
            'created_at'        => $testimonial->created_at,
            'updated_at'        => $testimonial->updated_at,
            'url'              => [
                'public' => trans_url('testimonial/'.$testimonial->getPublicKey()),
                'user'   => guard_url('testimonial/testimonial/'.$testimonial->getRouteKey()),
            ], 
            'status'            => trans('app.'.$testimonial->status),
            'created_at'        => format_date($testimonial->created_at),
            'updated_at'        => format_date($testimonial->updated_at),
        ];
    }
}