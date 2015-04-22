<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Lokasi;


class Proyek extends Model {

	protected $table="proyek";
	protected $guard=['id'];
	protected $fillable=[
		'id_kontraktor',
		'id_kecamatan',
		'nama',
		'mulai',
		'akhir',
		'nilai',
		'id_parent'
	];

	public function lokasi(){
		return $this->hasOne('App\Lokasi','id_proyek');
	}

	public function kecamatan(){
		return $this->belongsTo('App\Kecamatan','id_kecamatan');
	}

	public function kontraktor(){
		return $this->belongsTo('App\Kontraktor','id_kontraktor');
	}

	public function saveAll($data){
		return DB::transaction(function()use($data){
			$proyek=$this->create($data['proyek']);
			$data['lokasi']['id_proyek'] = $proyek->id;
			Lokasi::create($data['lokasi']);
		});
	}

	public function updateAll($data,$id){
		return DB::transaction(function()use($data,$id){
			$proyek=$this->findOrFail($id)->update($data['proyek']);
			Lokasi::where('id_proyek','=',$id)->update($data['lokasi']);
		});
	}

	public function lanjutan($id_parent){
		return $this->where('id_parent','=',$id_parent)->orderBy('mulai','desc')->get();
	}

	public function parent($id_parent){
		return $this->where('id','=',$id_parent)->first();
	}
}
