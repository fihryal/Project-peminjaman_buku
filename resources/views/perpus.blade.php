@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Popular Book</h1>
        <a href="/tambahbuku" class="btn btn-success mt-3">Tabah +</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
             </div>
        @endif
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            @foreach ($data as $item)
            <div class="col">
                <div class="card">
                    <img src="{{asset('fotobuku/' .$item->foto)}}" class="card-img-top" alt="..."  >
                    <div class="card-body">
                        <h5 class="card-title">{{$item -> nama_buku}}</h5>
                        <div class="mt-3" style="font: 16px/26px Georgia, Garamond, Serif; height: 200px; overflow: scroll; width: 250px;">
                            <p class="card-text">{{$item -> komentar}}</p>
                        </div><div style="font-size: 10px;"></div>
                    </div>
                    <div class="mb-3 pt-3 d-flex justify-content-around">
                        <h3>{{$item -> genre}}</h3>
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <a href="/delete/{{$item -> id}}" class="btn btn-danger">Delete</a>
                        <a href="/tampilkandata/{{$item -> id}}" class="btn btn-warning">Edit</a>
                    </div>
                    
                </div>
            </div>
            @endforeach

        </div>
    </div>
    @endsection