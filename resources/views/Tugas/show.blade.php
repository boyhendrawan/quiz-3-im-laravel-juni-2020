@extends('layouts.master')

@section('title')
SHOW ARTIKEL
@endsection

@section('content')
<div class="card">
	<div class="card-body">
		<h1 class="card-title text-center">{{$id->judul}}</h1>
		<h5 class="text-center ">{{$id->slug}}</h5>
		<h6 class="text-center text-info">Tag:<b>{{$id->tag}}</b></h6>
		<h6 class="">Deskripsi</h6>
		<p class="text-justify ">{{$id->isi}}</p>

		<a href="{{url('/artikel')}}" class="btn btn-danger">Back</a>
	</div>
</div>
@endsection