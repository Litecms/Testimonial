<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @forelse($testimonials as $key => $value)
        <tr>
            <td>{!!@$value->name!!}</td>
            <td>{!!@$value->status!!}</td>
            <td>{!!date('d M, Y',strtotime($value->created_at))!!}</td>       
        </tr>
        @empty
        <tr>
            <td colspan="3">No Tasks</td>
        </tr>
        @endif
    </tbody>
</table>