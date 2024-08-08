@extends('layouts.master')

@section('judul')
Genre Data
@endsection

@section('content')

<a href="/genre/create" class="btn btn-sm btn-primary mb-3">add new cast</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($genre as $key => $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->nama}}</td>
                <td>
                    <form action="/genre/{{$item->id}}" method="POST">
                        <a href='/genre/{{$item->id}}/edit' class="btn btn-warning btn-sm">Edit</a>  
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <p>No Cast</p>
        @endforelse
      
    </tbody>
  </table>

@endsection