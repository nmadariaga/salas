<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model {

	protected $table = 'docentes';
	protected $fillable = ['departamento_id','rut','nombres','apellidos'];
	protected $guarded = ['id'];

}
