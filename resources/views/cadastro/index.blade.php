@extends('layouts.app')
@section('content')
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>Cadastro e Emissão de Certificados</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('cadastro.create') }}">Create New Cadastro</a>
      </div>
	  
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif

    <table class="table table-hover table-sm">
      <tr>
        <th width = "50px"><b>No.</b></th>
        <th width = "300px">Aluno</th>
        <th>Curso</th>
		<th>CH</th>
		<th>Dt. Conclusão</th>
        <th width = "180px">Action</th>
      </tr>

      @foreach ($cadastros as $val)
        <tr>
          <td><b>{{++$i}}.</b></td>
          <td>{{$val->nome}}</td>
          <td>{{$val->curso}}</td>
		  <td>{{$val->ch}}</td>
		  <td>{{ date('d/m/Y',strtotime($val->dt)) }}</td>
          <td>
           <form action="{{ route('cadastro.destroy', $val->id) }}" method="post" >
              <a class="btn btn-sm btn-success" href="{{route('cadastro.show',$val->id)}}">Show</a>
              <a class="btn btn-sm btn-warning" href="{{route('cadastro.edit',$val->id)}}">Edit</a>
			  <a href="{{ url('pdf') }}?nome={{$val->nome}}&curso={{$val->curso}}&ch={{$val->ch}}&dt={{$val->dt}}" class="btn btn-sm btn-info">PDF</a>
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Are you sure?')"  class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </table>

{!! $cadastros->links() !!}
  </div>
@endsection
