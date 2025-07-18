@extends('template')

@section('title', 'Crear Administrador')

@push('css')
    <link href="{{ asset('css/crearAdmin.css') }}" rel="stylesheet" />
@endpush

@section('content')
  <div class="form-center-container">
    <div class="form-container text-center" style="background: rgba(255,255,255,0.15); max-width: 700px; width: 100%; margin: 40px auto; border-radius: 20px;">
      <h3>Crear Administrador</h3>
      <form method="post" action="{{ route('administrador.store') }}">
        @csrf
        <div class="form-floating mb-3 w-100">
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre de usuario" value="{{ old('nombre') }}">
          <label for="floatingUser">Ingrese su usuario</label>
        </div>
        <div class="form-floating mb-3 w-100">
          <input type="password" name="contrasena" class="form-control" placeholder="Ingrese una contraseña">
          <label for="floatingPassword">Ingrese su contraseña</label>
        </div>
        <div class="w-100 d-flex justify-content-between">
          <a href="{{ route('administrador.index') }}" class="btn btn-accept">CANCELAR</a>
          <button type="submit" class="btn btn-accept">ACEPTAR</button>
        </div>
      </form>
    </div>
  </div>
@endsection
