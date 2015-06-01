<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DepartamentosController extends Controller {

			/**
			 * Display a listing of the resource.
			 *
			 * @return Response
			 */
			public function index()
			{
				return view("departamentos.index")->with('departamentos', \App\Departamentos::paginate(5)->setPath('departamento'));
			}

			/**
			 * Show the form for creating a new resource.
			 *
			 * @return Response
			 */
			public function create()
			{
				return view('departamentos.create');
			}

			/**
			 * Store a newly created resource in storage.
			 *
			 * @return Response
			 */
			public function store()
			{
				$departamento = new \App\Departamentos;

				$departamento->nombre = \Request::input('nombre');
				$departamento->facultad_id = \Request::input('facultad_id');
				$departamento->descripcion = \Request::input('descripcion');

				$departamento->save();

				return redirect('departamentos/create')->with('message', 'Departamento Agregado');
			}

			/**
			 * Display the specified resource.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function show($id)
			{
				$departamento = \App\Departamentos::find($id);

				return view('departamentos.show')->with('departamento',$departamento);
			}

			/**
			 * Show the form for editing the specified resource.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function edit($id)
			{
				return view('departamentos.edit')->with('departamento', \App\Departamentos::find($id));
			}

			/**
			 * Update the specified resource in storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function update($id)
			{
				$departamento = \App\Departamentos::find($id);

				$departamento->nombre = \Request::input('nombre');
				$departamento->facultad_id = \Request::input('facultad_id');
				$departamento->descripcion = \Request::input('descripcion');

				$departamento->save();
				return redirect()->route('departamentos.edit', ['departamento' => $id])->with('message', 'Cambios guardados');
			}

			/**
			 * Remove the specified resource from storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function destroy($id)
			{
				$departamento = \App\Departamentos::find($id);

				$departamento->delete();

				return redirect()->route('departamentos.index')->with('message', 'Departamento Eliminado con éxito');
			}

		}
