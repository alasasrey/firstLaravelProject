@extends('layouts.app')

@section('title', 'Item List')

@section('content')
    <h2>Items</h2>
    <ul>
        @foreach($items as $item)
            <li><strong>{{ $item->name }}</strong>: {{ $item->description }}</li>
        @endforeach
    </ul>
@endsection