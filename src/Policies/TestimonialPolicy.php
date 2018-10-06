<?php

namespace Litecms\Testimonial\Policies;

use Litepie\User\Contracts\UserPolicy;
use Litecms\Testimonial\Models\Testimonial;

class TestimonialPolicy
{

    /**
     * Determine if the given user can view the testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function view(UserPolicy $user, Testimonial $testimonial)
    {
        if ($user->canDo('testimonial.testimonial.view') && $user->isAdmin()) {
            return true;
        }

        return $testimonial->user_id == user_id() && $testimonial->user_type == user_type();
    }

    /**
     * Determine if the given user can create a testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function create(UserPolicy $user)
    {
        return  $user->canDo('testimonial.testimonial.create');
    }

    /**
     * Determine if the given user can update the given testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function update(UserPolicy $user, Testimonial $testimonial)
    {
        if ($user->canDo('testimonial.testimonial.edit') && $user->isAdmin()) {
            return true;
        }

        return $testimonial->user_id == user_id() && $testimonial->user_type == user_type();
    }

    /**
     * Determine if the given user can delete the given testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function destroy(UserPolicy $user, Testimonial $testimonial)
    {
        return $testimonial->user_id == user_id() && $testimonial->user_type == user_type();
    }

    /**
     * Determine if the given user can verify the given testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function verify(UserPolicy $user, Testimonial $testimonial)
    {
        if ($user->canDo('testimonial.testimonial.verify')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the given user can approve the given testimonial.
     *
     * @param UserPolicy $user
     * @param Testimonial $testimonial
     *
     * @return bool
     */
    public function approve(UserPolicy $user, Testimonial $testimonial)
    {
        if ($user->canDo('testimonial.testimonial.approve')) {
            return true;
        }

        return false;
    }

    /**
     * Determine if the user can perform a given action ve.
     *
     * @param [type] $user    [description]
     * @param [type] $ability [description]
     *
     * @return [type] [description]
     */
    public function before($user, $ability)
    {
        if ($user->isSuperuser()) {
            return true;
        }
    }
}
