@extends('layouts.app')

@section('content')
<div class="container mt-5 text-center">
    <h1 class="mb-4">Panel de Administración</h1>
    <p>Desde aquí podrás agregar o editar los desayunos.</p>
    <a href="{{ route('admin.logout') }}" class="btn btn-danger mt-3">Cerrar sesión</a>
</div>
@endsection
