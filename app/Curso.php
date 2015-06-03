<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {

	protected $table = 'cursos';
	protected $fillable = ['semestre', 'anio', 'seccion'];
	protected $guarded = ['id', 'docente_id', 'asignatura_id'];

}
