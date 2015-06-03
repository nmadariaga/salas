<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionarios extends Model {

	protected $table = 'funcionarios';
	protected $fillable = ['departamento_id','rut','nombres','apellidos'];
	protected $guarded = ['id'];

}
