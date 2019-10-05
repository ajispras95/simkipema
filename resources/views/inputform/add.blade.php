@extends('inputform.add')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Form Input Data</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="{{ route('post.save') }}">
					    {{ csrf_field() }}
					    	<div class="form-group">
					    		<label>Title</label>
					    		<input type="text" name="title" class="form-control" required="">
					    	</div>
					    	<div class="form-group">
					    		<button type="submit" class="btn btn-danger btn-sm">Kirim</button>
					    	</div>
					    </form>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Post Data</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Title</th>
									</tr>
								</thead>
								<tbody>
									@if ($post->count() > 0)
									@foreach ($post as $posts)
									<tr>
										<td>{{ $posts->title }}</td>
									</tr>
									@endforeach
									@else
									<tr>
										<td>Tidak ada data</td>
									</tr>
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection