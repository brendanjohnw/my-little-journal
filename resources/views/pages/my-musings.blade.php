@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div class="card shadow"> --}}
        <div class="text-center">
            <h2>My Musings</h2>
            @if (!$musings)
                <p>Looks like you haven't written any musings</p>
            @else
            @endif
        </div>
        @if ($musings)
        <div class="container mt-5">
            <div class='row'>
            @foreach ($musings as $musing)
                <livewire:card-component :musing="$musing"/>
            @endforeach
            </div>
        </div>
        @endif
        

    {{-- </div> --}}
</div>
@endsection