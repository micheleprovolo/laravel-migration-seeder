@extends('layouts.base-layout')

@section('contenuto')
    <ol>
        @foreach($comics as $comic)
            <li>
                <ul>
                    <li>{{ $comic -> title }}</li>
                    <li>{{ $comic -> year }}</li>
                    <li>{{ $comic -> author }}</li>
                    <li>{{ $comic -> comment }}</li>
                    <li>{{ $comic -> rate }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection