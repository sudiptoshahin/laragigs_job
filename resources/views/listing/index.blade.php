
@extends('layout')

@section('content')

    @foreach($listing as $list)

    <x-listing-card :list='$list' />

    @endforeach
@endsection