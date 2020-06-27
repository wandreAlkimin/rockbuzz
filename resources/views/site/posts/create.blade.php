@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <br>
            <div class="col s12 m12">
                <div class="card" style="padding-bottom: 50px">
                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        @include('site.posts._include.inputs')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
