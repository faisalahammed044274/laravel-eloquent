@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5" style="background: lightgreen">
                    <div class="card-body mt-2">
                        <h2>Category {{ $category->name }} Posts</h2>
                        @foreach ($category->posts as $post)
                            <div class="mt-2 card card-body">

                                <h4>{{ $post->title }}</h4> <mark><small style="color: #ee28bc;">in
                                        {{ $post->category->name }}
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
