<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\sliders;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index_all_items() {
		$data ['list'] = DB::table ( 'sliders' )->get ();
		return view ( 'admin.sliders.list', $data );
	}
	public function index() {
		$data ['list'] = DB::table ( 'sliders' )->paginate ( 3 );
		return view ( 'admin.sliders.list', $data );
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return view ( 'admin.sliders.form' );
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function store(Request $request) {
		switch ($request->method ()) {
			case "POST" :
				return $this->insert ( $request );
				break;
			case "PUT" :
				return $this->update ( $request, $request->input ( 'id' ) );
				break;
			case "GET" :
				return $this->index ();
				break;
			case "DELETE" :
				return $this->destroy ( $request->input ( 'id' ) );
				break;
		}
		echo "store";
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function show(Request $request, $id) {
		if ($request->path () == "administrator/sliders/new") {
			return $this->create ();
		} else {
			return "Request path does not match";
		}
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function edit($id) {
		$data ['user'] = DB::table ( 'sliders' )->where ( 'id', $id )->first ();
		return view ( 'admin.sliders.form-edit', $data );
	}
	/**
	 * Insert the specified resource in storage.
	 *
	 * @param Request $request        	
	 * @param int $id        	
	 * @return Response
	 */
	public function insert(Request $request) {
		$rst = $request->all ();
		
		// upload file
		$imageName = 'vt-' . time () . '.' . $rst ['vtFile']->getClientOriginalExtension ();
		
		$rst ['vtFile']->move ( base_path () . '/public/mulodo/images/slider/upload/', $imageName );
		// upload file
		
		// retrive data and save them into the table that model defining.
		$data = array (
				'title' => $rst ['txtTitle'],
				'image' => $imageName,
				'description' => $rst ['txtDescription'] 
		);
		$response = sliders::create ( $data );
		
		if ($response) {
			return redirect ()->back ();
		}
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request        	
	 * @param int $id        	
	 * @return Response
	 */
	public function update(Request $request, $id) {
		$rst = $request->all ();
		
		$data = array (
				'title' => $rst ['txtTitle'],
				'description' => $rst ['txtDescription'] 
		);
		
		// upload file
		if (isset ( $rst ['vtFile'] )) {
			$imageName = 'vt-' . time () . '.' . $rst ['vtFile']->getClientOriginalExtension ();
			$rst ['vtFile']->move ( base_path () . '/public/mulodo/images/slider/upload/', $imageName );
			$data ['image'] = $imageName;
			$old_filename = base_path () . '/public/mulodo/images/slider/upload/' . $rst ['hidFile'];
			unlink ( $old_filename );
		}
		
		$response = sliders::where ( 'id', '=', $id )->update ( $data );
		if ($response) {
			return redirect ()->back ();
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($id) {
		$response = sliders::destroy($id);
		if ($response) {
			return redirect ()->back ();
		}
	}
}
