@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex gap-4">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div class="details">
            <h1>{{$comic->title}}</h1>
            <p>{{$comic->description}}</p>
            <div class="meta">
                <div class="price">
                    price: {{$comic->price}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection