<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('testimonial::testimonial.name') !!} [{!!$testimonial->name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#testimonial-testimonial-edit'  data-load-to='#testimonial-testimonial-entry' data-datatable='#testimonial-testimonial-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#testimonial-testimonial-entry' data-href='{{Trans::to('admin/testimonial/testimonial')}}/{{$testimonial->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('cms.cancel') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#testimonial" data-toggle="tab">{!! trans('testimonial::testimonial.tab.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('testimonial-testimonial-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(URL::to('admin/testimonial/testimonial/'. $testimonial->getRouteKey()))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="testimonial">
                @include('testimonial::admin.testimonial.partial.entry')
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>