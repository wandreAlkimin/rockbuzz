@extends('layouts.app')

@section('content')


    <div class="row">
        <form action="{{ url('adm/profile/' . $user->id) }}" method="post" class="col s12">
            @method('PUT')
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input name="name" value="{{$user['name']}}" type="text" class="validate">
                    <label for="first_name">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" type="password" class="validate">
                    <label >Senha</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input disabled type="email" value="{{$user['email']}}" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>

            <button type="submit" class="waves-effect waves-light btn right"><i class="material-icons left">edit</i>Salvar</button>


        </form>
    </div>


@endsection
