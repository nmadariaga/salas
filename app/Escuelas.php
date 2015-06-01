<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuelas extends Model {
	protected $table = 'escuelas';
	protected $fillable = ['nombre','departamento_id','descripcion'];
	protected $guarded = ['id'];

}
