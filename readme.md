This is a Litecms  package that provides testimonial management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `litecms/testimonial`.

    "litecms/testimonial": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Litecms\Testimonial\Providers\TestimonialServiceProvider::class,

```

And also add it to alias

```php
'Testimonial'  => Litecms\Testimonial\Facades\Testimonial::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="config"

Language files

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="lang"

Views files

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="view"
   

Public folders

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="public"

## Usage


