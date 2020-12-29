@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Articles</div>

                    <div class="card-header" style="display: inline">

                        <form action="/articles">

                            <label for="name" class="form-control">sort by:</label>

                            <input type="text" class="form-control" name="sorting" value="{{request()->sorting }}">

                            <button type="submit" class="btn btn-primary">filter</button>
                        </form>
                    </div>


                    @foreach ($posts as $post)
                        <div class="post" style="margin-top: 50px; margin-bottom: 50px; margin-left: 20px; margin-right: 20px;">
                            <h3 class="post_id" style="margin-left: 30%;">Number of post: {{ $post['id'] }}</h3>
                            <h2 class="post_title">Title: {{ $post['title'] }}</h2>
                            <div class="post_image">
                                <img src="{{ $post['img'] }}" alt="" style="max-width: 600px">
                            </div>
                            <h3 class="post_category">Category of post: {{ $post->category['title'] }}</h3>
                            <div class="post_info">
                                {{$post['text']}}
                            </div>
                            <h4 class="post_created_at">Created at: {{ $post['created_at'] }}</h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
