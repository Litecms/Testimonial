@include('testimonial::testimonial.partial.header')

<section class="content bg-grey">
    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="box-wrapper">
                        <div class="slider owl-carousel owl-theme">
                            @foreach($testimonials as $testimonial)
                            <div class="item">
                                <div class="avatar">
                                    <img src="{{url($testimonial->defaultImage('image','sm'))}}" class="img-responsive center-block" alt="">
                                    <h3>{{$testimonial['name']}}</h3>
                                    <p>{{ucfirst($testimonial['designation'])}}</p>
                                </div>
                                <div class="desc">
                                    <p>{{$testimonial['description']}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
