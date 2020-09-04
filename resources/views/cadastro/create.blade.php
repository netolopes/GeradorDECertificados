@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Novo Cadastro</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('cadastro.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Nome  :</strong>
          <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
         <div class="col-md-12">
          <strong>Curso :</strong>
          <input type="text" name="curso" class="form-control" placeholder="Curso">
        </div>
		<div class="col-md-12">
          <strong>Carga Horária :</strong>
          <input type="text" name="ch" class="form-control" placeholder="Carga Horária">
        </div>
		 <div class="col-md-12">
          <strong>Data  Conclusão:</strong>
          <input type="text" name="dt" class="form-control" placeholder="YYYY-mm-dd">
        </div>
        <div class="col-md-12">
          <a href="{{route('cadastro.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection