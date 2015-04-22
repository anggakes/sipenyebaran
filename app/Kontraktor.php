<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontraktor extends Model {

	protected $table="kontraktor";
	protected $guard=['id'];
	protected $fillable=['nama'];

	public function proyek(){
		return $this->hasMany('App\Proyek','id_kontraktor');
	}
}
