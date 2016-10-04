@extends('layout')

@section('header')
    @include('header')
@stop

@section('content')

    @include('pages.tasks.new')

    {{-- to list tasks --}}
    @if ( count($tasks) === 0 )
        We don't have tasks to show! :(
    @endif

    @if ( count($tasks) > 0 )
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task->name }}</li>
            @endforeach
        </ul>
    @endif
@stop