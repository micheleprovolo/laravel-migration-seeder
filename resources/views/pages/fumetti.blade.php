@extends('layouts.base-layout')

@section('contenuto')
    <ol>
        @foreach($ as $)
            <li>
                <ul>
                    <li>{{ $ -> title }}</li>
                    <li>{{ $ -> year }}</li>
                    <li>{{ $ -> overview }}</li>
                </ul>
            </li>
            <br>
        @endforeach
    </ol>

@endsection