This is a Laravel 5 package that provides testimonial management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lavalite/testimonial`.

    "lavalite/testimonial": "dev-master"

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

Language

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Litecms\Testimonial\Providers\TestimonialServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


