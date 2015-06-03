<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model {
	protected $table = 'facultades';
	protected $fillable = ['nombre','direccion','campus_id','descripcion'];
	protected $guarded = ['id'];
}
