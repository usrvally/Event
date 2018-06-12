@extends('layouts.app')

@section('content')
<h1>{{ $events->count() }} {{str_plural('Evenement', $events->count())}}</h1>
<a href="{{ route('events.create') }}">Creer un evenement</a>
@if( ! $events->isEmpty() )
    <ul>
        @foreach($events as $event)
        <li><a href ="{{ route('events.show',$event ) }}">{{ $event ->title }}</li>
        @endforeach
    </ul>
    
    {{ $events->links() }}
    @else
    <p>Aucun evenemt pour l'instant !</p>
    @endif
@stop