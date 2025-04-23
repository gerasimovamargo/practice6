@extends('partials.layout')

@section('content')
    <div class="card card-primary">
        <div class="card-header bg-primary text-light">Login form</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email"/>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password"/>
                </div>

                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login"/>
                </div>
            </form>

            @if(session('infoMessage'))
                <hr/>
                <span style='color:red'>{!! session('infoMessage') !!}</span>
            @endif
        </div>
    </div>
@endsection
