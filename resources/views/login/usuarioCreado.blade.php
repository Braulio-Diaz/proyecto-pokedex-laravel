@extends('layouts.master')

@section('header')

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="">ポケットモンスター</a></b>
  </div>
</nav>

@stop

@section('content')

<header class="my-5">
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        <div class="alert alert-success" role="alert">
        <h2>¡Usuario creado con éxito!</h2>
    </div>
      </div>
    </div>
    </header>
    
      <div class="mt-3 d-flex gap-2">
        <a href="/">
        <button type="button" class="btn btn-secondary">Volver</button>
         </a>
      </div>

@stop