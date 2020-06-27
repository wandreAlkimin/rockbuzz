@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <br>
            <div class="col s12 m12">
                <div class="card" style="padding-bottom: 50px">
                    <form action="{{ url('adm/posts/' . $data->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        {{ csrf_field() }}
                        @include('site.posts._include.inputs')
                    </form>

                    <form action="{{ url("adm/posts/$data->id" ) }}" method="POST">
                        @method('DELETE'){{ csrf_field() }}
                        <button style="margin-left: 20px" class="waves-effect waves-light btn left #ef5350 red lighten-1" type="submit" name="action">Excluir
                            <i class="material-icons left">delete</i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
