<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HorariosController extends Controller {

			/**
			 * Display a listing of the resource.
			 *
			 * @return Response
			 */
			public function index()
			{
				return view("horarios.index")->with('horarios', \App\Horario::paginate(5)->setPath('horario'));
			}

			/**
			 * Show the form for creating a new resource.
			 *
			 * @return Response
			 */
			public function create()
			{
				return view('horarios.create');
			}

			/**
			 * Store a newly created resource in storage.
			 *
			 * @return Response
			 */
			public function store()
			{
				$horario = new \App\Horario;

				$horario->fecha = \Request::input('fecha');
				$horario->sala_id = \Request::input('sala_id');
				$horario->periodo_id = \Request::input('periodo_id');
				$horario->curso_id = \Request::input('curso_id');


				$horario->save();

				return redirect()->route('horarios.index')->with('message', 'horario Agregado');
			}

			/**
			 * Display the specified resource.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function show($id)
			{
				$horario = \App\Horario::find($id);

				return view('horarios.show')->with('horario',$horario);
			}

			/**
			 * Show the form for editing the specified resource.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function edit($id)
			{
				return view('horarios.edit')->with('horario', \App\Horario::find($id));
			}

			/**
			 * Update the specified resource in storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function update($id)
			{
				$horario = \App\Horario::find($id);

				$horario->fecha = \Request::input('fecha');
				$horario->sala_id = \Request::input('sala_id');
				$horario->periodo_id = \Request::input('periodo_id');
				$horario->curso_id = \Request::input('curso_id');

				$horario->save();
				return redirect()->route('horarios.edit', ['horario' => $id])->with('message', 'Cambios guardados');
			}

			/**
			 * Remove the specified resource from storage.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function destroy($id)
			{
				$horario = \App\Horario::find($id);

				$horario->delete();

				return redirect()->route('horarios.index')->with('message', 'Horario eliminado con éxito');
			}

		}
