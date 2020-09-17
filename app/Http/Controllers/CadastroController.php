<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cadastro;
use App\Http\Repositories\CadastroRepository;
use Redirect;
use PDF;

class CadastroController extends Controller
{


  protected $cadastro_repository;


    public function __construct
	(
        CadastroRepository $cadastro_repository
    )
    {
        $this->cadastro_repository = $cadastro_repository;
    }

	
	public function pdf()
	{
      
     $pdf = PDF::loadView('cadastro.certificado')->setPaper('A4', 'landscape');
   
     return $pdf->download('certificado.pdf');
	 
    }

    public function index()
    {
		
        $cadastros = $this->cadastro_repository->paginate(3,'id','desc');
        return view('cadastro.index', compact('cadastros'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }


    public function create()
    {
        return view('cadastro.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
          'nome' => 'required',
          'curso' => 'required',
		  'ch' => 'required',
		  'dt' => 'required'
        ]);

        $getCadastro = $request->add();
        return redirect()->route('cadastro.index')
                        ->with('success', 'new cadastro created successfully');
    }


    public function show($id)
    {
        $cadastro = $this->cadastro_repository->find($id);
        return view('cadastro.detail', compact('cadastro'));
    }

 
    public function edit($id)
    {
        $cadastro = $this->cadastro_repository->find($id);
        return view('cadastro.edit', compact('cadastro'));
    }

  
    public function update(Request $request, $id)
    {
      $request->validate([
        'nome' => 'required',
        'curso' => 'required',
		'ch' => 'required',
		'dt' => 'required'
      ]);
      
	  $getCadastro = $request->all();
	  $this->cadastro_repository->edit($id,$getCadastro);
     
      return redirect()->route('cadastro.index')
                      ->with('success', 'Cadastro  updated successfully');
    }

    public function destroy($id)
    {
		 $cadastro = $this->cadastro_repository->delete($id);
        return redirect()->route('cadastro.index')
                        ->with('success', 'Cadastro  deleted successfully');
    }
	
}