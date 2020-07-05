@extends('layouts.master')


@section('title')
Gambar ERD
@endsection

@section('content')
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title text-center">GAMBAR ERD </h5>
  </div>
   <img src="{{asset('img/ERD.png')}}" class="card-img-top" alt="...">
</div>@endsection