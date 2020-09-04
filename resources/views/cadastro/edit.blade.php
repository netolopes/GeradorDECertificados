@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Editar Cadastro</h3>
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

    <form action="{{route('cadastro.update',$cadastro->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Nome :</strong>
          <input type="text" name="nome" class="form-control" value="{{$cadastro->nome}}">
        </div>
         <div class="col-md-12">
          <strong>Curso :</strong>
          <input type="text" name="curso" class="form-control" value="{{$cadastro->curso}}">
        </div>
		  <div class="col-md-12">
          <strong>Carga Horária :</strong>
          <input type="text" name="ch" class="form-control" value="{{$cadastro->ch}}">
        </div>
		  <div class="col-md-12">
          <strong>Data Conclusão :</strong>
          <input type="text" name="dt" class="form-control" value="{{$cadastro->dt}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('cadastro.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection