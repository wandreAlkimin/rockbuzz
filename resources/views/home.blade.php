@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        @foreach($data as $post)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="https://blogmedia.evbstatic.com/wp-content/uploads/wpmulti/sites/18/2014/07/24025147/6BaVde_t20_VKbpQ7-e1527130375674.jpg">
                        <span class="card-title">{{ $post->title }}</span>
                        <a href="/{{ $post->id}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <p>{{$post->body  }}...</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
