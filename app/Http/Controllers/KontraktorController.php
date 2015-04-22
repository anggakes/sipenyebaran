<?php namespace App\Http\Controllers;

use App\Kontraktor;
use App\Kecamatan;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\KontraktorRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class KontraktorController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}
	public function index()
	{
		$kontraktor= Kontraktor::all();
		return view('kontraktor.index')->with('kontraktor',$kontraktor);
	}

	public function create()
	{
		return view('kontraktor.create');
	}

	public function store(KontraktorRequest $request)
	{
		//
		Kontraktor::create($request->all());
		flash('Data Kontraktor Berhasil Ditambahkan');
		return redirect('kontraktor');

	}

	public function show($id)
	{		
		$kontraktor=Kontraktor::findOrFail($id);
		return view('kontraktor.show')->with('kontraktor',$kontraktor);
	}

	public function edit($id)
	{
		$kontraktor=Kontraktor::findOrFail($id);
		return view('kontraktor.edit')->with('kontraktor',$kontraktor);
	}

	public function update(Request $request, $id)
	{
		Kontraktor::findOrFail($id)->update($request->all());
		flash('Data Kontraktor Berhasil Diubah');
		return redirect('kontraktor');
	}

	public function destroy($id)
	{
		Kontraktor::findOrFail($id)->delete();
		flash('Data Kontraktor Berhasil Dihapus');
		return redirect()->route('kontraktor.index');
	}

	public function datatables(){
		$kontraktor = Kontraktor::all();
		$data=array();
		$l=array();
		$i=0;
		foreach ($kontraktor as $value) {
			$l[0] = $value->id;
			$l[1] = $value->nama;
			$l[2] = "
				<a href='".route('kontraktor.edit',$value->id)."'>Edit</a> - 
				<a href='".route('kontraktor.destroy',$value->id)."' data-method = 'DELETE' data-confirm='Yakin untuk menghapus data?' >Hapus</a>
			";

			$data[$i]=$l;
			$i++;
		}

		$return['data'] = $data;
		return response()->json($return);
	}

}
