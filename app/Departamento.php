<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {
	protected $table = 'departamentos';
	protected $fillable = ['nombre','facultad_id','descripcion'];
	protected $guarded = ['id'];

}
