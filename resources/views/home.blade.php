@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


            </div>
            <div class="links">
                <div class="links-articles">
                    <a href="{{ route('articles')}}">go to articles</a>
                </div>

                <div class="links-categories">
                    <a href="{{ route('articles')}}">go to categories</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
