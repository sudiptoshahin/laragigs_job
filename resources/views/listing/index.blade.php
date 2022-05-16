
@extends('layout')

@section('content')

    @foreach($listing as $list)

    <x-listing-card :list='$list' />
    @endforeach

    <div class="mt-6 p-4">
        {{ $listing->links() }}
    </div>

@endsection