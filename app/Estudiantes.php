<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model {

	protected $table = 'estudiantes';
	protected $fillable = ['carrera_id','rut','nombres','apellidos','email'];
	protected $guarded = ['id'];

}
