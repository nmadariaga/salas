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
				$periodo = \App\Periodo::lists('bloque','id');
				$sala = \App\Sala::lists('nombre','id');
				$curso = \App\Curso::lists('asignatura_id','id');
				return view('horarios.create')->with('periodo',$periodo)->with('salas',$sala)->with('curso',$curso);
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
				$horario->sala_id = \Request::input('salas_id');
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
                $periodo = \App\Periodo::find($horario->periodo_id);
				$sala = \App\Sala::find($horario->sala_id);
				$curso = \App\Curso::find($horario->sala_id);
				return view('horarios.show')->with('horario',$horario)->with('periodo',$periodo)->with('sala',$sala)->with('curso',$curso);
			}

			/**
			 * Show the form for editing the specified resource.
			 *
			 * @param  int  $id
			 * @return Response
			 */
			public function edit($id)
			{
				$periodos = \App\Periodo::lists('bloque','id');
				return view('horarios.edit')->with('horario', \App\Horario::find($id))->with('periodos',$periodos);
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
				return redirect()->route('horarios.index', ['horario' => $id])->with('message', 'Cambios guardados');
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
