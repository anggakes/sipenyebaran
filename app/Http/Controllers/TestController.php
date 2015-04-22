<?php namespace App\Http\Controllers;

use App\Proyek;
use App\Lokasi;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;

class TestController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$proyek=Proyek::all();
		return view('test.test',compact('proyek'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login() {
    // Getting all post data
    $data = Input::all();
    // Applying validation rules.
    $rules = array(
		'username' => 'required',
		'password' => 'required|min:6',
	     );
    $validator = Validator::make($data, $rules);
    if ($validator->fails()){
      // If validation falis redirect back to login.
      return Redirect::to('/login')->withInput(Input::except('password'))->withErrors($validator);
    }
    else {
      $userdata = array(
		    'username' => Input::get('username'),
		    'password' => Input::get('password')
		  );
      // doing login.
      if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata)) {
          return Redirect::intended('/');
        }
      } 
      else {
        // if any error send back with message.
        Session::flash('error', 'Something went wrong'); 
        return Redirect::to('login');
      }
    }
  }

}
