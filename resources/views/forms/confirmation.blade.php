@extends('layouts.master')
@section('content')
    @if( session()->has('formData'))
        <div class="well well-sm">
            <h1>Bedankt</h1>
            <p>Hier ziet u de opgestuurde gegevens:</p>
            <p>
                <strong>Voornaam:</strong> {{ session('formData.firstname') }}<br/>
                <strong>Tussenvoegsel:</strong>
                {{ session('formData.middlename') }}<br/>
                <strong>Achternaam:</strong> {{ session('formData.lastname') }}<br/>
                <strong>E-mail:</strong> {{ session('formData.email') }}<br/>
                <strong>Geboortedatum:</strong> {{ session('formData.geboortedatum')
}}<br/>
            </p>
            <p>
                <a href="{{ route('registration.form') }}">Terug naar het
                    formulier</a>
            </p>
        </div>
    @endif
@endsection
