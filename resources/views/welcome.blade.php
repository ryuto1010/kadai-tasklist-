@extends('layouts.app')

@section('content')
    @if (Auth::check())
        @include('users.users', ['users' => $users])
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklists</h1>
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection



<!--@section('content')-->
<!--    @if (Auth::check())-->
<!--        {{ Auth::user()->name }}-->
<!--    @else-->
<!--        <div class="center jumbotron">-->
<!--            <div class="text-center">-->
<!--                <h1>Welcome to the Tasklists</h1>-->
<!--                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}-->
<!--            </div>-->
<!--        </div>-->
<!--    @endif-->
<!--@endsection-->
       
    </body>
</html>
