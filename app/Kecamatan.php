<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {

	protected $table="kecamatan";
	protected $guard=['id'];
	protected $fillable=[
		'nama',
		'lat',
		'lng'
	];

	public function proyek(){
		return $this->hasMany('App\Proyek','id_kecamatan');
	}

}
