@extends('layouts.master')

@section('judul')
Database Film
@endsection

@section('content')

<a href="/film/create" class="btn btn-sm btn-primary mb-3">add new movie</a>

<div class="row">
    @forelse ($film as $item)
    <div class="col-4">
        <div class="card" >
            <img src="{{asset('/uploads/'.$item->poster)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-title">{{$item->judul}}</h2>
              <p class="card-text"></p>
              <a href="{{ url('/film/' . $item->id) }}" class="btn btn-primary btn-block">Details</a>
              <div class="row my-2">  
                <div class="col">
                    <a href="{{ url('/film/' . $item->id) . '/edit'}}" class="btn btn-info btn-block">Edit</a>
                </div>
                <div class="col">
                  <form action="film/{{$item->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <input value="Delete" type="submit" class="btn btn-danger btn-block">
                  </form>
                </div>
              </div>  
            </div>
          </div>
    </div>    
    @empty
        <h1>Belum ada Film</h1>
    @endforelse
    
</div>

@endsection