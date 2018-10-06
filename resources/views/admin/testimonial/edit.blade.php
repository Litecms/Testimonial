    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#testimonial" data-toggle="tab">{!! trans('testimonial::testimonial.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#testimonial-testimonial-edit'  data-load-to='#testimonial-testimonial-entry' data-datatable='#testimonial-testimonial-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#testimonial-testimonial-entry' data-href='{{guard_url('testimonial/testimonial')}}/{{$testimonial->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('testimonial-testimonial-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('testimonial/testimonial/'. $testimonial->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="testimonial">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('testimonial::testimonial.name') !!} [{!!$testimonial->name!!}] </div>
                @include('testimonial::admin.testimonial.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>