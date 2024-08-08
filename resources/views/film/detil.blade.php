@extends('layouts.master')

@section('judul')
Detail Film 
@endsection

@section('content')
<h1>{{$film->judul}}</h1>
<h3>{{$film->tahun}}</h3>
<p>{{$film->ringkasan}}</p>
<img src="{{asset('/uploads/'.$film->poster)}}" class="img-fluid" width="100%" alt="Responsive image">

@endsection