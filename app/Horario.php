<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

	protected $table = 'horarios';
	protected $fillable = ['fecha'];
	protected $guarded = ['id', 'sala_id', 'periodo_id', 'curso_id'];


}
