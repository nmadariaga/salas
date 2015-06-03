<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarFormulario;
use Illuminate\Http\Request;

class AsignaturasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("asignaturas.index")->with('asignaturas', \App\Asignatura::paginate(5)->setPath('asignatura'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('asignaturas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$asignaturas = new \App\Asignatura;

		$asignaturas->nombre = \Request::input('nombre');
		$asignaturas->codigo = \Request::input('codigo');
		$asignaturas->descripcion = \Request::input('descripcion');
		$asignaturas->departamento_id = \Request::input('departamento_id');

		$asignaturas->save();

		return redirect('asignaturas/create')->with('message', 'asignaturas Agregado');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$asignaturas = \App\Asignatura::find($id);

		return view('asignaturas.show')->with('asignatura',$asignaturas);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('asignaturas.edit')->with('asignatura', \App\Asignatura::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$asignaturas = \App\Asignatura::find($id);

		$asignaturas->nombre = \Request::input('nombre');
		$asignaturas->codigo = \Request::input('codigo');
		$asignaturas->descripcion = \Request::input('descripcion');
		$asignaturas->departamento_id = \Request::input('departamento_id');

		$asignaturas->save();
		return redirect()->route('asignaturas.edit', ['asignatura' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$asignaturas = \App\Asignatura::find($id);

		$asignaturas->delete();

		return redirect()->route('asignaturas.index')->with('message', 'asignaturas Eliminado con éxito');
	}


}
