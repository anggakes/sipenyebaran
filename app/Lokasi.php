<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model {

	protected $table="lokasi";
	protected $guard=['id'];
	protected $fillable=[
		'id_proyek',
		'lat',
		'lng'
	];

	public function proyek(){
		return $this->belongsTo('App\Proyek','id_proyek');
	}
}
