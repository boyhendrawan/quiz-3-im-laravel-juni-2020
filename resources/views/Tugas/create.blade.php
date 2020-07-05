@extends('layouts.master')

@section('title')
Created Artikel
@endsection


@section('content')
<div class="card">
	<div class="card-header">
		FORM MODEL
	</div>
	<div class="card-body">
		<form action="{{route('store')}}" method="post">
			@csrf
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Judul</label>
		    <input type="text" class="form-control" name="judul" placeholder="Tulisankan Judul" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Tag</label>
		    <input type="text" class="form-control" name="tag" placeholder="Tulisankan Tag" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Artikel</label>
		    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" required rows="3"></textarea>
		  </div>
		  <button class="btn btn-success">Kirim</button>
		  <a href="{{url('/artikel')}}" class="btn btn-danger">Back</a>
		</form>
	</div>
</div>
@endsection