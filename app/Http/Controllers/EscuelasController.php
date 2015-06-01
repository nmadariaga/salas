<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EscuelasController extends Controller {

				/**
				 * Display a listing of the resource.
				 *
				 * @return Response
				 */
				public function index()
				{
					return view("escuelas.index")->with('escuelas', \App\Escuelas::paginate(5)->setPath('escuela'));
				}

				/**
				 * Show the form for creating a new resource.
				 *
				 * @return Response
				 */
				public function create()
				{
					return view('escuelas.create');
				}

				/**
				 * Store a newly created resource in storage.
				 *
				 * @return Response
				 */
				public function store()
				{
					$escuela = new \App\Escuelas;

					$escuela->nombre = \Request::input('nombre');
					$escuela->departamento_id = \Request::input('departamento_id');
					$escuela->descripcion = \Request::input('descripcion');

					$escuela->save();

					return redirect('escuelas/create')->with('message', 'Escuela Agregada');
				}

				/**
				 * Display the specified resource.
				 *
				 * @param  int  $id
				 * @return Response
				 */
				public function show($id)
				{
					$escuela = \App\Escuelas::find($id);

					return view('escuelas.show')->with('escuela',$escuela);
				}

				/**
				 * Show the form for editing the specified resource.
				 *
				 * @param  int  $id
				 * @return Response
				 */
				public function edit($id)
				{
					return view('escuelas.edit')->with('escuela', \App\Escuelas::find($id));
				}

				/**
				 * Update the specified resource in storage.
				 *
				 * @param  int  $id
				 * @return Response
				 */
				public function update($id)
				{
					$escuela = \App\Escuelas::find($id);

					$escuela->nombre = \Request::input('nombre');
					$escuela->departamento_id = \Request::input('departamento_id');
					$escuela->descripcion = \Request::input('descripcion');

					$escuela->save();
					return redirect()->route('escuelas.edit', ['escuela' => $id])->with('message', 'Cambios guardados');
				}

				/**
				 * Remove the specified resource from storage.
				 *
				 * @param  int  $id
				 * @return Response
				 */
				public function destroy($id)
				{
					$escuela = \App\Escuelas::find($id);

					$escuela->delete();

					return redirect()->route('escuelas.index')->with('message', 'Escuela Eliminada con éxito');
				}

			}
