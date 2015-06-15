<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'cursos';
	protected $fillable = ['semestre', 'anio', 'seccion', 'docente_id', 'asignatura_id'];
	protected $guarded = ['id'];

}
