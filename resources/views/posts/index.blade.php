@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="row">
            <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Card Title</span>
                        <p>I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>


        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-md-8">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-header">Posts</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<a href="{{ url('posts/create') }}">create</a>--}}
                        {{--<table class="table table-bordered">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th class="blue-text text-darken-2">Title</th>--}}
                                {{--<th></th>--}}
                            {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}
                            {{--@foreach($posts as $post)--}}
                                {{--<tr>--}}
                                    {{--<td>{{ $post->title }}</td>--}}
                                    {{--<td>--}}
                                        {{--<a href="{{ url('posts/edit/' . $post->id) }}">edit</a>--}}
                                        {{--<a href="{{ url('posts/destroy/' . $post->id) }}">destroy</a>--}}
                                    {{--</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                        {{--</table>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
