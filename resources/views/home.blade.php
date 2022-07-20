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
                            <br>
                            <label for="">Select Tags</label>
                            <select class=" mt-2 form-control select2-limit" name="tags[]" multiple="multiple">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>

                            <input name="submit" type="Submit" value="Publish your Post" class="mt-4 btn btn-success">

                        </form>
                    </div>
                </div>
                <div class="card mt-5" style="background: lightgreen">
                    <div class="card-body mt-2">
                        <h2>My Posts</h2>
                        @foreach ($user->posts as $post)
                            <div class="mt-2 card card-body">
                                <h4>{{ $post->title }}</h4> <mark><small style="color: #ee28bc;">in
                                        <a href="{!! route('category', $post->category->id) !!}">{{ $post->category->name }}</a>
                                    </small></mark>
                                <div>
                                    {!! $post->description !!}
                                </div>
                                <hr>
                                <div>
                                    @foreach ($post->tags as $tag)
                                        <small><mark>{{ $tag->name }}</mark></small>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(".select2-limit").select2({
            maximumSelectionLength: 3
        });
    </script>
@endsection
