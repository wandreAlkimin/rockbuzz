@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Entrar</h4>
                    <div class="left-align light">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="email" name="email" class="validate" autocomplete="email" value="{{ old('email') }}" autofocus required>
                                    <label for="Email">E-mail</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="password" name="password" class="validate" autocomplete="new-password" minlength="8" value="{{ old('password') }}" required>
                                    <label for="Senha">Senha</label>
                                </div>
                            </div>

                            <div class="row">
                                <label>
                                    <div class="input-field col s12">
                                        <input type="checkbox" name="remember" checked="checked"/>
                                        <span>Lembre-me</span>
                                    </div>
                                </label>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Entrar') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            Esqueci minha senha
                                        </a>
                                    @endif
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
