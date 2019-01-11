@extends('layouts.master')

@section('content')
    @if ($errors->any())
        <h4>Het formulier bevat fouten:</h4>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Uw gegevens</h2>
    <form action="{{ route('registration.form.handle') }}" method="POST">
        @csrf
        <label for="">Voornaam:</label>
        <input type="text" name="firstname" class="form-control"
               value="{{ old('firstname') }}"/>
        <label for="">Tussenvoegsel:</label>
        <input type="text" name="middlename" class="form-control" value=""/>
        <label for="">Achternaam:</label>
        <input type="text" name="lastname" class="form-control" value=""/>
        <label for="">E-mail:</label>
        <input type="email" name="email" class="form-control" value=""/>
        <label for="">Geboortedatum:</label>
        <input type="text" name="geboortedatum" class="form-control" value=""/>
        <button type="submit" class="submitInschrijven">Opsturen</button>
    </form>
@endsection
