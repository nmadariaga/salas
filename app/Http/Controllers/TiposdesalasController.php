<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TiposdesalasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("tiposdesalas.index")->with('tiposdesalas', \App\Tiposdesalas::paginate(5)->setPath('tiposdesala'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tiposdesalas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ValidarFormulario $postForm)
	{
		$tiposdesalas = new \App\Tiposdesalas;

		$tiposdesalas->nombre = \Request::input('nombre');
		$tiposdesalas->descripcion = \Request::input('descripcion');

		$tiposdesalas->save();

		return redirect('tiposdesalas/create')->with('message', 'Tipo de Sala Agregada');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tiposdesalas = \App\Tiposdesalas::find($id);

		return view('tiposdesalas.show')->with('tiposdesala',$tiposdesalas);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('tiposdesalas.edit')->with('tiposdesala', \App\Tiposdesalas::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tiposdesalas = \App\Tiposdesalas::find($id);

		$tiposdesalas->nombre = \Request::input('nombre');
		$tiposdesalas->descripcion = \Request::input('descripcion');

		$tiposdesalas->save();
		return redirect()->route('tiposdesalas.edit', ['tiposdesala' => $id])->with('message', 'Cambios guardados');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$tiposdesalas = \App\Tiposdesalas::find($id);

		$tiposdesalas->delete();

		return redirect()->route('tiposdesalas.index')->with('message', 'Tipo de Sala Eliminada con éxito');
	}

}