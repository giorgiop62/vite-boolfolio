@extends('layouts.app')

@section('title')
    | Modifica post: {{$post->title}}
@endsection

@section('content')
<div class="container">

    <h1 class="my-5"> Modifica post: {{$post->title}} </h1>

    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="mb-3" action="{{route('admin.posts.update',$post)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $post->title)}}" placeholder="Titolo">
        @error('title')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
    </div>





