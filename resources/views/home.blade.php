@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <h2>Add a post</h2>
                        <form action="{!! route('posts.store') !!}">
                            <label for="">Enter Post Title</label><br>
                            <input type="text" name="title" id="" class="form-control">

                            <label for="">Enter Post Description</label><br>
                            <textarea name="description" class="form-control" rows="5"></textarea>

                            <label for="">Select Category</label><br>
                            <select class="form-control" name="category_id" id="">
                                <option value="php">PHP Programming</option>
                                <option value="js">JavaScript Programming</option>
                                <option value="vuejs">Vue.js Programming</option>
                                <option value="python">Pyhton</option>
                                <option value="ubuntu">Ubuntu Linux</option>
                                <option value="redhat">RedHat Linux</option>
                            </select>
                            <br>
                            <button type="submit" class="btn btn-success">Submit your Post</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
