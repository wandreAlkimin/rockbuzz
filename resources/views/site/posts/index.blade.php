@extends('layouts.app')

@section('content')


    <nav>
        <div class="nav-wrapper" style="background-color: #5a5a5a;">
            <form action="{{route('adm.search')}}" method="post" >
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
    <a href="posts/create" class="waves-effect waves-light btn"><i class="material-icons left">add</i>Criar um post</a>


    <div style="margin-top: 30px">
        <ul class="collection">

            @foreach($data as $post)
                <li class="collection-item " style="padding-bottom: 50px; padding-top: 20px">
                    <div class="" style="float: left;margin-right: 5px; ">
                        <img id="imagem-adm-posts" class="responsive-img" src="{{ asset('storage/images/imagem_capa/'.$post->cover_image) }}">
                    </div>
                    <h5><span class="title">{{ $post->title }}</span> </h5>
                    <p> Post: @if($post->active == 1)Ativo @else Desativado @endif </p>
                    <p>{{ $post->body }} </p>
                    <a  href="/adm/posts/{{$post->id}}/edit/" class="waves-effect waves-light btn-small right" ><i class="material-icons right">edit</i>Editar</a>
                </li>
            @endforeach

        </ul>

    </div>

@endsection
