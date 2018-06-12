@extends('layouts.app')

@section('content')
    <h1>{{$event->title}}</h1>

    <p>{{$event->description}}</p>

    <a class="btn btn-default" href="{{ route('events.edit', $event)}}">Modifier</a> |
   <a action=" {{ route('events.destroy', $event)}}" data-method="DELETE" data-confirm="Etes vous sur?" class="btn btn-danger">Supprimer</a>

    <a href="{{ route('home') }}">Tous les evenements </a>

@stop