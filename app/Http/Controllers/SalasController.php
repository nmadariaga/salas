<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SalasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("salas.index")->with('salas', \App\Sala::paginate(5)->setPath('sala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('salas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ValidarFormulario $postForm)
	{
		$salas = new \App\Salas;

		$salas->campus_id = \Request::input('campus_id');
		$salas->tipo_sala_id = \Request::input('tipo_sala_id');
		$salas->nombre = \Request::input('nombre');
		$salas->descripcion = \Request::input('descripcion');

		$salas->save();

		return redirect('salas/create')->with('message', 'Sala Agregada');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$salas = \App\Sala::find($id);

		return view('salas.show')->with('sala',$salas);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('salas.edit')->with('sala', \App\Sala::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$salas = \App\Sala::find($id);

		$salas->campus_id = \Request::input('campus_id');
		$salas->tipo_sala_id = \Request::input('tipo_sala_id');
		$salas->nombre = \Request::input('nombre');
		$salas->descripcion = \Request::input('descripcion');

		$salas->save();
		return redirect()->route('salas.edit', ['sala' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$salas = \App\Sala::find($id);

		$salas->delete();

		return redirect()->route('salas.index')->with('message', 'Sala Eliminada con éxito');
	}

}
