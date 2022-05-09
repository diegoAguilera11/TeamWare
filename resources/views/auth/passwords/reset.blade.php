@extends('layouts.app')

@section('content')
    <div class="container mb-5" style="background-color: #fff;">

        <!--- Mensajes -->



        <h2 class="text-center">Cambiar Contraseña
            <hr>
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('changePassword') }}" method="POST" class="needs-validation" novalidate>
                    @csrf

                    <div class="row mb-3">
                        <div class="from-group mb-3">
                            <label for="password_actual">RUT</label>
                            <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror"
                                name="rut" required autocomplete="rut" value={{Auth::user()->rut}} autofocus disabled>

                            @error('rut')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group mt-3">
                            <label for="password_actual">Clave Actual</label>
                            <input type="password" name="password_actual"
                                class="form-control @error('password_actual') is-invalid @enderror" required>
                            @error('password_actual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group mt-3">
                            <label for="new_password ">Nueva Clave</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group mt-3">
                            <label for="confirm_password">Confirmar nueva Clave</label>
                            <input type="password" name="confirm_password"
                                class="form-control @error('confirm_password') is-invalid @enderror" required>
                            @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row text-center mb-4 mt-5">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success" id="formSubmit">Guardar Cambios</button>
                            <a href="/home" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
