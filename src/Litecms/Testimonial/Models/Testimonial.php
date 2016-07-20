<?php

namespace Litecms\Testimonial\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Trans;

class Testimonial extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Trans, Revision, PresentableTrait;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'package.testimonial.testimonial';

    /**
     * Date format for public
     * @param type $val
     * @return date
     */
    public function getDateAttribute($val)
    {

        if ($val == '0000-00-00' || empty($val)) {
            return '';
        }

        return date('d M, Y', strtotime($val));
    }

// /**

//  * Set the date for public

//  * @param type $val

//  * @return date
    //  */
    public function setDateAttribute($val)
    {

        if ($val == '') {
            return '';
        }

        return $this->attributes['date'] = date('Y-m-d', strtotime($val));
    }

}
