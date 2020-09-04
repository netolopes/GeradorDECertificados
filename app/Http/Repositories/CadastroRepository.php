<?php
namespace App\Http\Repositories;

use App\Models\Cadastro;
use Exception;
use Illuminate\Support\Facades\DB;

class CadastroRepository extends BaseRepository
{
	protected $model;

	public function __construct(Cadastro $model)
	{
		$this->model = $model;
	}


}
