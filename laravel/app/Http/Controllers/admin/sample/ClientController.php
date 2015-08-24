<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Client;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClientController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($param = null) {
		switch ($param) {
			default :
				$clients = Client::all ();
				break;
			case "list_where" :
				$clients = Client::where ( 'id', '>', 1 )->orderBy ( 'name', 'desc' )->take ( 10 )->get ();
				break;
			case "find" :
				$clients = Client::find ( 1 );
				break;
			case "first" :
				$clients = Client::where ( 'id', '>', 1 )->first ();
				break;
			case "findOrFail" :
				try {
					$clients = Client::findOrFail ( 100 );
				} catch ( ModelNotFoundException $e ) {
					// dd ( get_class_methods ( $e ) ); // lists all available methods for exception object
					return view ( 'errors.405' )->with ( 'error_message', $e->getMessage () );
				}
				break;
			case "firstOrFail" :
				try {
					$clients = Client::where ( 'id', '>', 100 )->firstOrFail ();
				} catch ( ModelNotFoundException $e ) {
					return view ( 'errors.405' )->with ( 'error_message', $e->getMessage () );
				}
				break;
			case "count" :
				$clients = Client::where ( 'id', '>', 1 )->count ();
				break;
			case "max" :
				$clients = Client::where ( 'id', '>', 1 )->max ( 'id' );
				break;
		}
		
		if (is_array ( $clients )) {
			return view ( 'todc.examples.client_list' )->with ( 'clients', $clients );
		}
		else if (is_numeric($clients)) {
			return $clients;
		}
		return view ( 'todc.examples.client_detail' )->with ( 'client', $clients );
	}
	/**
	 * Create a new client instance.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		// Validate the request...
	
		$client = new Client;
	
		$client->name = $request->name;
		$client->email = $request->email;
	
		$client->save();
	}
}