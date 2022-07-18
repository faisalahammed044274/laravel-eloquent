@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2>Add a post</h2>
                        <form action="{!! route('posts.store') !!}" method="POST">
                            @csrf
                            <br>
                            <label for="">Enter Post Title</label>
                            <input type="text" name="title" id="" class=" mt-2 form-control">
                            <br>
                            <label for="">Enter Post Description</label>
                            <textarea name="description" class="  mt-2 form-control" rows="5"></textarea>
                            <br>
                            <label for="">Select Category</label>
                            <select class=" mt-2 form-control" name="category_id" id="">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            <input name="submit" type="Submit" value="Publish your Post" class="mt-4 btn btn-success">

                        </form>
                    </div>
                </div>
                <div class="card mt-5" style="background: lightgreen">
                    <div class="card-body mt-2">
                        <h2>All Posts</h2>
                        @foreach ($posts as $post)
                            <div class="mt-2 card card-body">

                                <h4>{{ $post->title }}</h4> <mark><small style="color: #ee28bc;">in
                                        <a href="{!! route('category', $category->id) !!}">{{ $post->category->name }}</a>
                                        by {{ $post->user->name }}</small></mark>
                                <div>
                                    {!! $post->description !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
