<?php namespace App\Http\Controllers;

use App\Proyek;
use App\Kontraktor;
use App\Kecamatan;
use App\Http\Requests\ProyekRequest;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;

class ProyekController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth',['except'=>['indexHome','getKordinat','getTahun']]);
	}

	private function formatRupiah($nilai)
	{
	    $nilaiRp = "";
	    $jumlahangka = strlen($nilai);
	    while ($jumlahangka > 3) 
	    {
	        $nilaiRp = "." . substr($nilai,-3) . $nilaiRp;
	        $sisaNilai = strlen($nilai) - 3;
	        $nilai = substr($nilai, 0, $sisaNilai);
	        $jumlahangka = strlen($nilai);
	    }

	    $nilaiRp = "Rp " . $nilai . $nilaiRp . "";
	    return $nilaiRp;
	}

	public function index()
	{
		$proyek=Proyek::all();
		return view('proyek.index')->with('proyek',$proyek);	
	}

	public function indexHome()
	{
		$proyek=Proyek::all();
		return view('proyek.indexhome')->with('proyek',$proyek);	
	}

	public function admin(){
		$proyek=Proyek::all()->count();
		$kontraktor=Kontraktor::all()->count();
		return view('admin.admin')->with('proyek',$proyek)->with('kontraktor',$kontraktor);
	}

	public function adminLaporan(){
		return view('admin.laporan');
	}/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{	
		
		$proyek=Proyek::find($request->input('id'));
		
		$kontraktor=Kontraktor::lists('nama','id');
		$kecamatan=Kecamatan::lists('nama','id');
		return view('proyek.create')
		->with('proyek',$proyek)
		->with('kontraktor',$kontraktor)
		->with('kecamatan',$kecamatan);
	}

	public function getKordinat($id)
	{
		if($id==0){
		return response()->json(["klat"=>-2.96302559, "klng"=>104.753480,"zoom"=>13]);
		}
		$kecamatan=Kecamatan::find($id);
		return response()->json(["klat"=> $kecamatan->lat, "klng"=>$kecamatan->lng,"zoom"=>15]);
	}

	public function getTahun($tahun)
	{	
		if($tahun==0){
			$proyekth=Proyek::all();
		}else{
		$proyekth=Proyek::whereRaw("Year(mulai)=$tahun")->get();
		}
		foreach ($proyekth as $key => $value) {

			if($value->id_parent != null):
		        $content="";
		        foreach ($value->lanjutan($value->id_parent) as $i => $p):
		            $content.= "Proyek : $p->nama <br> Kontraktor  : ".$p->kontraktor->nama." <br>Kecamatan : ".$p->kecamatan->nama." <br> Nilai : ".$this->formatRupiah($p->nilai)." <br>Mulai : $p->mulai <br> Akhir : $p->akhir <hr>";
		        endforeach;
		         $content.="Proyek :". $value->parent($value->id_parent)->nama ."<br> Kontraktor  : ".$value->parent($value->id_parent)->kontraktor->nama." <br>Kecamatan : ".$value->parent($value->id_parent)->kecamatan->nama." <br> Nilai : ".$this->formatRupiah($value->parent($value->id_parent)->nilai)." <br>Mulai :". $value->parent($value->id_parent)->mulai. "<br> Akhir :". $value->parent($value->id_parent)->akhir ;
		        else:
		            $content="Proyek : $value->nama <br> Kontraktor  : ".$value->kontraktor->nama." <br>Kecamatan : ".$value->kecamatan->nama." <br> Nilai : ".$this->formatRupiah($value->nilai)." <br>Mulai : $value->mulai <br> Akhir : $value->akhir ";
		    endif;


			$data[$key]['lat'] = $value->lokasi->lat;
			$data[$key]['lng'] = $value->lokasi->lng;
			$data[$key]['nama'] = $value->nama;
			$data[$key]['kecamatan'] = $value->kecamatan->nama;
			$data[$key]['kontraktor'] = $value->kontraktor->nama;
			$data[$key]['nilai'] = $value->nilai;			
			$data[$key]['mulai'] = $value->mulai;
			$data[$key]['akhir'] = $value->akhir;
			$data[$key]['isi'] = $content;
		}
		return response()->json($data);
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProyekRequest $request, Proyek $proyek)
	{
			$proyek->saveAll($request->all());
			flash('Data Proyek Berhasil Ditambahkan');
			return redirect('proyek');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proyek=Proyek::findOrFail($id);
		$kontraktor=Kontraktor::lists('nama','id');
		$kecamatan=Kecamatan::lists('nama','id');
		return view('proyek.edit')->with('proyek',$proyek)->with('kontraktor',$kontraktor)->with('kecamatan',$kecamatan);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ProyekRequest $request, Proyek $proyek,$id)
	{
		$proyek->updateAll($request->all(),$id);
		flash('Data Proyek Berhasil Diubah');
		return redirect('proyek');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Proyek::findOrFail($id)->delete();
		flash('Data Proyek Berhasil Dihapus');
		return redirect()->route('proyek.index');
	}

	public function datatables(){
		$proyek = Proyek::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($proyek as $value) {
			$l[0] = $value->id;
			$l[1] = $value->nama;
			$l[2] = $value->kecamatan->nama;
			$l[3] = $value->kontraktor->nama;
			$l[4] = $value->mulai;
			$l[5] = $value->akhir;
			$l[6] = $value->nilai;
			$l[7] = "
				<a href='".route('proyek.edit',$value->id)."'>Edit</a> | 
				<a href='".route('proyek.destroy',$value->id)."' data-method = 'DELETE' data-confirm='Yakin untuk menghapus data?' >Hapus</a> |
				<a href='".url('proyek/create?id='.$value->id)."'>Teruskan</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}
}
