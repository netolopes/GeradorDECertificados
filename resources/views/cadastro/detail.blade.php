@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detalhes</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Nome : </strong> {{$cadastro->nome}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Curso : </strong> {{$cadastro->curso}}
        </div>
      </div>
	   <div class="col-md-12">
        <div class="form-group">
          <strong>Carga Horária : </strong> {{$cadastro->ch}}
        </div>
      </div>
	   <div class="col-md-12">
        <div class="form-group">
          <strong>Dt. Conclusão : </strong> {{$cadastro->dt}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('cadastro.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection