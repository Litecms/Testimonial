<section class="testimonial-wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <h1 class="main-title text-white">
                    <small>
                        Happy Memories
                    </small>
                    Our
                    <span>
                        Testimonials
                    </span>
                </h1>
            </div>
        </div>
        <div class="row m-t-40">
            <div class="col-md-12" id="testimonial">
                @forelse($testimonials as $key=>$testimonial)
                <div class="testimonial-item">
                <?php $bg = $key % 3;?>
                    <div class="testimonial-top-bg bg-{!!$bg!!}">
                    </div>
                    <div class="testimonial-desc">
                        <div class="testimonial-avtar">
                                <img alt="" class="img-responsive img-circle center-block" src="{!!url(@$testimonial->defaultImage('testimonial.md','image'))!!}">
                        </div>
                        <h3 class="text-capitalize">
                            {{@$testimonial->name}}
                        </h3>
                        <p class="text-uppercase text-muted"><small>{!!$testimonial->designation!!}</small></p>
                        <p>
                            {{$testimonial->description}}
                        </p>

                    </div>
                </div>
                @empty
                @endif
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
$(document).ready(function() {
    $("#testimonial").owlCarousel({
        margin: 30,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="ion ion-ios-arrow-left"></i>','<i class="ion ion-ios-arrow-right"></i>'],
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
                                1024:{
                                            items:3
                                }

        }
    });
});
</script>
