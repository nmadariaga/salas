<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';
	protected $fillable = ['codigo', 'nombre', 'descripcion'];
	protected $guarded = ['id', 'departamento_id'];

	public function departamentos()
    {
        return $this->belongsTo('Departamentos');
    }

}
