@extends('layouts.master')

@section('title')
Read Artikel
@endsection

@section("content")
<div class="card">
	<div class="card-header">Data Artikel</div>
	<div class="card-body">
		@if(session('create'))
			<div class="alert alert-success my-4">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
				{{session('create')}}
			</div>
			@elseif(session('update'))
			<div class="alert alert-success my-4">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
				{{session('update')}}
			</div>
			@elseif(session('delete'))
			<div class="alert alert-success my-4">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
				{{session('delete')}}
			</div>
		@endif
		<a href="{{route('create')}}" class="btn btn-success my-4">Create New Artikel</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Judul</th>
					<th>Isi</th>
					<th>Slug</th>
					<th>Tag</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($items as $res)
				<tr>
					<td>{{$res->id}}</td>
					<td>{{$res->judul}}</td>
					<td>{{$res->isi}}</td>
					<td>{{$res->slug}}</td>
					<td>{{$res->tag}}</td>
					<td><a href="/artikel/{{$res->id}}" class="btn btn-sm  btn-info">show</a>
						<a href="/artikel/{{$res->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
						<form action="/artikel/{{$res->id}}" method="post" style="display: inline;">
							@csrf
							@method('DELETE')
							<button class="btn btn-sm btn-danger">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    });

</script>
@endpush