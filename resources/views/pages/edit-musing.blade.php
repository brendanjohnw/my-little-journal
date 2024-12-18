@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div class="card shadow"> --}}
        <div class="text-center">
        </div>
        <form id='musing-form' method="POST" action={{route('submitMusing')}}>
        {{ csrf_field() }}
        <div class='card-container'>
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        {{-- <label for="title" class="form-label">Title</label> --}}
                        <input type="text" id="journal-title" name="journal-title" class="form-control journal-input" placeholder="What's on your mind today...">
                    </div>
                    <div class="mb-3">
                        {{-- <label for="content" class="form-label">Your Journal</label> --}}
                        <textarea id="journal-content" name="journal-content" rows="10" class="form-control journal-textarea" placeholder="What was it like?"></textarea>
                    </div>
                </div>
            </div>
        </div>
        </form>
    {{-- </div> --}}
</div>
@endsection