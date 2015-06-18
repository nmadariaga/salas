<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {
	protected $table = 'departamentos';
	protected $fillable = ['nombre','facultad_id','descripcion'];
	protected $guarded = ['id'];


    public function facultad()
    {
        return $this->belongsTo('App\Facultad');
    }

    public function asignaturas()
    {
        return $this->hasMany('App\Asignatura');
    }

    public function escuela()
    {
        return $this->belongsTo('App\Escuela');
    }

    public function docentes()
    {
        return $this->hasMany('App\Docente');
    }

    public function funcionarios()
    {
        return $this->hasMany('App\Funcionario');
    }
}
