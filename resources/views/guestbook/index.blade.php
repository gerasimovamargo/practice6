@extends('partials.layout')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-light">Guestbook form</div>
        <div class="card-body">
            <form method="post" action="{{ route('guestbook.store') }}">
                @csrf
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label>Text</label>
                    <textarea name="text" class="form-control" placeholder="Enter text" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Send">
                </div>
            </form>
            <br>
            @if(session('message'))
                <div class="alert alert-info">{{ session('message') }}</div>
            @endif
        </div>
    </div>

    <br>

    <div class="card">
        <div class="card-header bg-secondary text-light">Comments</div>
        <div class="card-body">
            @foreach($comments as $comment)
                <p><strong>{{ $comment->name }}</strong> ({{ $comment->email }})</p>
                <p>{!! nl2br(e($comment->text)) !!}</p>
                <p><em>{{ $comment->date }}</em></p>
                <hr>
            @endforeach
        </div>
    </div>
@endsection

