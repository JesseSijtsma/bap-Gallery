@extends('layouts.master')

@section('header')

    <h2>PhotoGallery</h2>

@endsection

@section('content')

    <h1 class="testtest">Maaltijden</h1>

        @foreach($photos as $photo)
                <img src="{{ asset('photos/' . $photo->photo) }}" /><br>
        @endforeach

    <p class="testtest"><a href="{{ route('gallery.addPhoto') }}">Upload Photo</a></p>
@endsection
