@extends('layouts.app')

@section('content')
    <h1>Creer un evenement</h1>
    <form action="{{route('events.store')}}" method= "POST">
    {{csrf_field()}}
@include('events/_form', ['submitButtonText' =>"Creer un evenement"])
<p><a href="{{route('home')}}"> Retuor a la page d'acceuil</a></p>
@stop