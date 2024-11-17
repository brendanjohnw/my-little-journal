@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div class="card shadow"> --}}
        <div class="text-center">
            <h2>Great things begin with <b>you</b></h2>
            <p>What's on your mind?</p>
        </div>
        <form id='musing-form' method="POST" action={{route('submitMusing')}}>
        {{ csrf_field() }}
        <div class='card-container composer'>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <div class='today-datetime' id='clock'></div>
                        <hr>
                    </div>
                    <div class="mb-3">
                        {{-- <label for="title" class="form-label">Title</label> --}}
                        <input type="text" id="journal-title" name="journal-title" class="form-control journal-input" placeholder="What's on your mind today...">
                    </div>
                    <div class="mb-3">
                        {{-- <label for="content" class="form-label">Your Journal</label> --}}
                        <textarea id="journal-content" name="journal-content" rows="10" class="form-control journal-textarea" placeholder="What was it like?"></textarea>
                    </div>
                </div>
                <div class="button-container">
                    <button id="submit-button" name="submit-button" type="button" class="btn btn-outline-secondary submit-button">Save to My Musings</button>
                </div>
            </div>

        </div>
        </form>
    {{-- </div> --}}
</div>
@endsection