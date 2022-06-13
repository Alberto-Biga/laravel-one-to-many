@extends('layouts.app')

@section('content')
<div class="container">
    <img src=" {{$post->image}} " alt="$post->title">
    <h2>{{$post->title}}</h2>
    <h4>
        @if($post->category)
        <span class="badge badge-pill badge-{{ $post->Category->color}}">{{$post->Category->label}}</span>
        @else
        ---
        @endif
    </h4>
    <p> {{$post->content}} </p>
</div>
@endsection
