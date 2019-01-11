@extends('layouts.master')

@section('header')

    <h2>PhotoGallery</h2>

@endsection
@section ('content')
<h1 class="testtest">Photo Gallery FORM</h1>


<form action="{{route ('gallery.save_photo')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">titel</label>
        <input type="text" name="title" class="form-control" />
        @if($errors->has('title'))
            <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif
    </div>



    <div class="form-group">
        <label for="">omschriving</label>
        <textarea name="description" rows="10" colls="40" class="form-control" ></textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label for="">Photo</label>
        <br>
        <input type="file" name="photo" accept="image/*" class="form-control"/>
        @if($errors->has('photo'))
            <p class="text-danger" style="color: red">{{$errors->first('photo')}}</p>
        @endif
    </div>


    <button type="submit" class="btn btn-success"> opslaan
    </button>
</form>

<p class="testtest"><a href="{{ route('gallery.index') }}">go back</a></p>
@endsection
