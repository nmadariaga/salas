<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FuncionariosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("funcionarios.index")->with('funcionarios', \App\Funcionarios::paginate(5)->setPath('funcionario'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('funcionarios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ValidarFormulario $postForm)
	{
		$funcionarios = new \App\Funcionarios;

		$funcionarios->departamento_id = \Request::input('departamento_id');
		$funcionarios->rut = \Request::input('rut');
		$funcionarios->nombres = \Request::input('nombres');
		$funcionarios->apellidos = \Request::input('apellidos');

		$funcionarios->save();

		return redirect('funcionarios/create')->with('message', 'Funcionario Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$funcionarios = \App\Funcionarios::find($id);

		return view('funcionarios.show')->with('funcionario',$funcionarios);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('funcionarios.edit')->with('funcionario', \App\Funcionarios::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$funcionarios = \App\Funcionarios::find($id);

		$funcionarios->departamento_id = \Request::input('departamento_id');
		$funcionarios->rut = \Request::input('rut');
		$funcionarios->nombres = \Request::input('nombres');
		$funcionarios->apellidos = \Request::input('apellidos');

		$funcionarios->save();
		return redirect()->route('funcionarios.edit', ['funcionario' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$funcionarios = \App\Funcionarios::find($id);

		$funcionarios->delete();

		return redirect()->route('funcionarios.index')->with('message', 'Funcionario Eliminado con éxito');
	}

}
