@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Cadastre-se</h4>
                    <div class="left-align light">

                        <form method="POST" action="{{ route('register') }}" class="col s12">

                            @csrf

                            <input type="hidden" name="role" value="Assinante" >


                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name="name" class="validate" autocomplete="name" value="{{ old('name') }}" autofocus required>
                                    <label for="Nome">Nome</label>
                                </div>
                            </div>

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
                                <div class="input-field col s12">
                                    <input type="password" name="password_confirmation" class="validate" autocomplete="new-password" minlength="8" autofocus required>
                                    <label for="Senha">Confirmar senha</label>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
