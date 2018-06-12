@extends('layouts.app')

@section('content')
    <h1>Editer l'evenement #{{ $event->id }}</h1>

<form action="{{ route('events.update', $event) }}" method= "POST">
    {{ csrf_field() }}
    {{method_field('PUT')}}  
@include('events/_form', ['submitButtonText' =>"Modifier l'evenement"])
<p><a href="{{route('home')}}"> Retuor a la page d'acceuil</a></p>
@stop