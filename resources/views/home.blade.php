@extends('layouts.app')

@section('main-content')
    @foreach($comics as $comics)
        <ul>
            <li>
                {{ $comics['title'] }}
            </li>
        </ul>
        @endforeach
    
@endsection