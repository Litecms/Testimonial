@include('public::notifications')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-dark  header-title m-t-0"> My Testimonials </h4>
        </div>
        <div class="col-md-6">
            <a href="{{ trans_url('/user/testimonial/testimonial/create') }}" class="btn btn-default pull-right"> {{ trans('cms.create')  }} Testimonial</a>
        </div>
    </div>
    <p class="text-muted m-b-25 font-13">
        Your awesome text goes here.
    </p>
    <hr>
    <div class="row">
        <div class="col-md-4 m-b-5 pull-right">
            {!!Form::open()->method('GET')!!}
            <div class="input-group">
              {!!Form::text('search')->type('search')->class('form-control')->placeholder('Search for...')->raw()!!}
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Search</button>
              </span>
            </div>
            {!! Form::close()!!}
        </div>
    </div>   
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>{!! trans('testimonial::testimonial.label.name')!!}</th>
                    <th>{!! trans('testimonial::testimonial.label.designation')!!}</th>
                    <th>{!! trans('testimonial::testimonial.label.description')!!}</th>
                    <th>{!! trans('testimonial::testimonial.label.image')!!}</th>
                    <th>{!! trans('testimonial::testimonial.label.status')!!}</th>
                    <th>{!! trans('testimonial::testimonial.label.date')!!}</th>
                    <th width="150">{!! trans('testimonial::testimonial.label.status')!!}</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->name }}</td>
                    <td>{{ $testimonial->designation }}</td>
                    <td>{{ $testimonial->description }}</td>
                    <td>{{ $testimonial->image }}</td>
                    <td>{{ $testimonial->status }}</td>
                    <td>{{ $testimonial->date }}</td>
                    <td><span class="label status-{{ $testimonial->status }}"> {{ $testimonial->status }} </span></td>
                    <td>
                        <a href="{{ trans_url('/user') }}/testimonial/testimonial/{!! $testimonial->getRouteKey() !!}"> View </a>
                        <a href="{{ trans_url('/user') }}/testimonial/testimonial/{!! $testimonial->getRouteKey() !!}/edit"> Edit </a>
                        <a data-action="DELETE" 
                            data-href="{{ trans_url('/user') }}/testimonial/testimonial/{!! $testimonial->getRouteKey() !!}" 
                            href="trans_url('/user')/testimonial/testimonial/{!! $testimonial->getRouteKey() !!}"> 
                            Delete 
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $testimonials->links() }}
</div>