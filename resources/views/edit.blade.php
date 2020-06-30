@extends('layout')

@section('pagetitle','編集')
@section('formAction')
    /edit/{{ $person->id }}
@endsection

@section('inputNameValue')
    {{ $person->name }}
@endsection
@section('inputAgeValue')
    {{ $person->age }}
@endsection

@section('inputGenderValue')
    {{ $person->gender }}
@endsection 

