@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('testimonial::testimonial.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('testimonial::testimonial.names') !!}</small>
@stop

@section('title')
{!! trans('testimonial::testimonial.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! trans_url('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('testimonial::testimonial.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='testimonial-testimonial-entry'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="testimonial-testimonial-list" class="table table-striped table-bordered data-table">
    <thead>
        <th>{!! trans('testimonial::testimonial.label.name')!!}</th>
        <th>{!! trans('testimonial::testimonial.label.designation')!!}</th>
          <th>{!! trans('testimonial::testimonial.label.date')!!}</th>
        <th>{!! trans('testimonial::testimonial.label.status')!!}</th>
    </thead>
      <thead  class="search_bar">
        <th>{!! Form::text('search[name]')->raw()!!}</th>
        <th>{!! Form::text('search[designation]')->raw()!!}</th>
        <th>{!! Form::text('search[date]')->id('date')->raw()!!}</th>
        <th>{!! Form::select('search[status]')
                ->options(['' => 'All', 'Hide' => 'Hide','Show' => 'Show'])
                ->raw()!!}
        </th>
    </thead>
</table>
@stop

@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    $("#date").pickadate({
        format: 'dd mmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        hiddenSuffix: '',
        selectMonths: true,
        selectYears: true
    }).prop('type','text');
    app.load('#testimonial-testimonial-entry', '{!!URL::to('admin/testimonial/testimonial/0')!!}');
    oTable = $('#testimonial-testimonial-list').dataTable( {
         "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! trans_url('/admin/testimonial/testimonial') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $('#testimonial-testimonial-list .search_bar input, #testimonial-testimonial-list .search_bar select').each(
                function(){
                    aoData.push( { 'name' : $(this).attr('name'), 'value' : $(this).val() } );
                }
            );
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'name'},
            {data :'designation'},
            {data : 'date'},
            {data :'status'},

        ],
        "order": [[ 2, "desc" ]],
        "pageLength": 50
    });

    $('#testimonial-testimonial-list tbody').on( 'click', 'tr', function () {

        if ($(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        } else {
            oTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }

        var d = $('#testimonial-testimonial-list').DataTable().row( this ).data();

        $('#testimonial-testimonial-entry').load('{!!URL::to('admin/testimonial/testimonial')!!}' + '/' + d.id);

    });

    $("#testimonial-testimonial-list .search_bar input").on('keyup select', function (e) {
        e.preventDefault();
        if (e.keyCode == 13 || e.keyCode == 9) {
            oTable.api().draw();
        }
    });
     $("#testimonial-testimonial-list .search_bar select, #date").on('change', function (e) {
        e.preventDefault();
        oTable.api().draw();
    });
});
</script>
@stop

@section('style')
@stop
