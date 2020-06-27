@extends('layouts.app')

@section('content')


    <form action="{{ url('adm/tags') }}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="input-field col s10">
                <input type="text" class="validate" name="name" >
                <label for="name">Tag</label>
            </div>
            <div class="input-field col s2">
                <button type="submit" class="waves-effect waves-light btn left"><i class="material-icons left">edit</i>Criar Tag</button>
            </div>
        </div>
        <br>
        <br>

    </form>

    <table class="striped">
        <thead>
        <tr>
        </tr>
        </thead>

        <tbody>
        @foreach($data as $tag)

            <tr>
                <form action="{{ url('adm/tags/' . $tag->id) }}" method="post">
                    @method('PUT')
                    {{ csrf_field() }}

                    <td>
                        <div class="input-field col s12">
                            <input type="text" class="validate" name="name" value="{{$tag['name']}}">
                            <label for="name">Tag</label>
                        </div>
                    </td>

                    <td>
                        <div class="switch">
                            <label>
                                off
                                <input name="active" type="checkbox" @if($tag['active'] == 1) checked @endif>
                                <span class="lever"></span>
                                On
                            </label>
                        </div>
                    </td>

                    <td class="right">
                        <button type="submit" class="waves-effect waves-light btn"><i class="material-icons left">edit</i>Salvar</button>
                    </td>

                </form>

                <td class="right">
                    <form action="{{ url("adm/tags/$tag->id" ) }}" method="POST">
                        @method('DELETE'){{ csrf_field() }}
                        <button style="margin-left: 20px" class="waves-effect waves-light btn left #ef5350 red lighten-1" type="submit" name="action">Deletar
                            <i class="material-icons left">delete</i>
                        </button>
                    </form>
                </td>

            </tr>



        @endforeach

        </tbody>
    </table>



@endsection
