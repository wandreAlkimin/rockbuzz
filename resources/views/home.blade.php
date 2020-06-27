@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <nav>
        <div class="nav-wrapper" style="background-color: #5a5a5a;">
            <form action="{{route('search')}}" method="post" >
                {{ csrf_field() }}
                <div class="input-field">
                    <input id="search" type="search" name="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                </div>
            </form>
        </div>
    </nav>
    <br>
    <div class="row">
        <br>
        @foreach($data as $post)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('storage/images/imagem_capa/'.$post->cover_image) }}">
                        <a href="/{{ $post->id}}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                        <span class="card-title truncate">{{ $post->title }}</span>
                        <p>{{$post->body  }}...</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
