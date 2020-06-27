
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image">
                    <img src="{{ asset('storage/images/imagem_capa/'.$data->cover_image) }}">
                </div>
                <div class="card-content">
                    <span class="card-title center-align">{{ $data->title }}</span>
                </div>
                <div class="card-content">
                    <p>{{ $data->body }}</p>
                </div>
                <div class="card-content">
                    <p>Criado por: {{ $data->user->name }}</p>
                </div>
                <div class="card-content">
                    <p>Tags:

                    @foreach($data->tags as $tag)
                        {{$tag->name}}
                    @endforeach

                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection