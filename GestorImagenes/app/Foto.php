<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model{

//	use Authenticatable, CanResetPassword;

	protected $table = 'fotos';

	protected $fillable = ['id', 'nombre', 'descripcion', 'ruta', 'album_id'];

	public function album(){
		return $this->belonsTo('GestorImagenes\Album');
	}

}
