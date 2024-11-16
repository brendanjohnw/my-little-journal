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
                <div class="col-sm-12 mb-4">
                    <div class="card {{$musing->sentiment}}">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{$musing->entry_title}}</b></h5>
                            <small>Thoughts on {{$musing->date_title}}</small>
                            <hr>
                            <p class="card-text">{{$musing->entry_body}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        @endif
        

    {{-- </div> --}}
</div>
@endsection