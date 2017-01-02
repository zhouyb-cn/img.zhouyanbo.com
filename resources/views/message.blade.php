@extends('layouts.master') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped">
				<thead>
			        <tr>
			          	<th>#</th>
			          	<th>Title</th>
			          	<th>Content</th>
			          	<th>Remark</th>
			          	<th>Options</th>
			        </tr>
		      	</thead>
		      	<tbody>
		      		@foreach ($contactList as $list)
		      		<tr>
			          	<td>{{ $list->id }}</td>
			          	<td>{{ $list->title }}</td>
			          	<td>{{ $list->content }}</td>
			          	<td>{{ $list->remark }}</td>
			          	<td>
			          		<button type="button" class="btn btn-danger">Delete</button>
			          		<button type="button" class="btn btn-info">Detail</button>
		          		</td>
			        </tr>
		      		@endforeach
		     	</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
