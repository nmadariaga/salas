<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CursosController extends Controller {

		/**
		 * Display a listing of the resource.
		 *
		 * @return Response
		 */
		public function index()
		{
			return view("cursos.index")->with('cursos', \App\Curso::paginate(5)->setPath('curso'));
		}

		/**
		 * Show the form for creating a new resource.
		 *
		 * @return Response
		 */
		public function create()
		{
			return view('cursos.create');
		}

		/**
		 * Store a newly created resource in storage.
		 *
		 * @return Response
		 */
		public function store()
		{
			$curso = new \App\cursos;

			$curso->semestre = \Request::input('semestre');
			$curso->seccion = \Request::input('seccion');
			$curso->anio = \Request::input('anio');
			$curso->asignatura_id = \Request::input('asignatura_id');
			$curso->docente_id = \Request::input('docente_id');

			$curso->save();

			return redirect()->route('cursos.index')->with('message', 'curso agregado');
		}

		/**
		 * Display the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function show($id)
		{
			$curso = \App\Curso::find($id);

			return view('cursos.show')->with('curso',$curso);
		}

		/**
		 * Show the form for editing the specified resource.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function edit($id)
		{
			return view('cursos.edit')->with('curso', \App\Curso::find($id));
		}

		/**
		 * Update the specified resource in storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function update($id)
		{
			$curso = \App\Curso::find($id);

			$curso->semestre = \Request::input('semestre');
			$curso->seccion = \Request::input('seccion');
			$curso->anio = \Request::input('anio');
			$curso->asignatura_id = \Request::input('asignatura_id');
			$curso->docente_id = \Request::input('docente_id');

			$curso->save();
			return redirect()->route('cursos.edit', ['curso' => $id])->with('message', 'Cambios guardados');
		}

		/**
		 * Remove the specified resource from storage.
		 *
		 * @param  int  $id
		 * @return Response
		 */
		public function destroy($id)
		{
			$curso = \App\Curso::find($id);

			$curso->delete();

			return redirect()->route('cursos.index')->with('message', 'curso eliminado con éxito');
		}

	}
