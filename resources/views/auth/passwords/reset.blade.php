@extends('layouts.app')

@section('content')
    <div class="container-fluid mb-5 mt-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-5 gb-register-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mt-5 text-center">
                            <h1 class="gb_title">Recuperar Senha</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8 mx-auto my-5">
                            <form method="POST" action="{{ route('password.update') }}" id="form_password_update">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                @error('email')
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="alert alert-danger">
                                                <div class="d-flex justify-content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" class="align-middle">
                                                        <path
                                                            d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                        </path>
                                                        <line x1="12" y1="9" x2="12" y2="13"></line>
                                                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                                    </svg>
                                                </div>
                                                <p class="text-center mt-3"><b>OPS!</b><br>{{ $message }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @enderror
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="email" class="form-label gb-label">E-mail</label>
                                        <input id="email" type="email" class="form-control gb-input" name="email"
                                            value="{{ $email ?? old('email') }}" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="password" class="form-label gb-label">Nova Senha</label>
                                        <input id="password" type="password" class="form-control gb-input" name="password"
                                            required autocomplete="new-password" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label for="password_confirmation" class="form-label gb-label">Confirmar
                                            Senha</label>
                                        <input id="password_confirmation" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-12 text-center">
                                        <a href="{{ route('login') }}" class="btn btn-secondary">Voltar</a>
                                        <button type="submit" class="btn btn-success">
                                            Atualizar Senha
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
