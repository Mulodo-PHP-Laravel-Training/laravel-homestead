<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class DBController extends Controller {
	public function __construct() {
		DB::enableQueryLog ();
		// dd ( DB::getQueryLog() );
	}
	/**
	 * SELECT samples
	 *
	 * @return list objects
	 */
	public function sampleSelect1($id = 1) {
		$results = DB::table ( 'users' )->get ();
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return 1 object
	 */
	public function sampleSelect2($id = 1) {
		$results = DB::table ( 'users' )->where ( 'id', 1 )->first ();
		
		// $results = DB::select ( 'select * from users where id = ?', [ $id ] );
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return 1 value
	 */
	public function sampleSelect3($id = 1, $email = null) {
		$results = DB::table ( 'users' )->where ( 'first_name', 'Anna' )->value ( 'email' );
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return list objects
	 */
	public function sampleSelect4($id = 1, $email = null) {
		$results = DB::select ( 'select * from users where id = :id and email= :email', [ 
				'id' => $id,
				'email' => $email 
		] );
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return list objects
	 */
	public function sampleSelect5() {
		DB::table ( 'users' )->chunk ( 100, function ($users) {
			foreach ( $users as $user ) {
				echo $user->first_name;
				if ($user->email == 'vytien1111@gmail.com')
					return false; // using it when you want to stop
			}
		} );
	}
	/**
	 * SELECT samples
	 *
	 * @return list objects
	 */
	public function sampleSelect6() {
		$emails = DB::table ( 'users' )->lists ( 'email' );
		foreach ( $emails as $email ) {
			echo $email . "<br>";
		}
	}
	/**
	 * SELECT samples
	 *
	 * @return response
	 */
	public function sampleSelect7($method = 'count') {
		switch ($method) {
			default :
				$results = DB::table ( 'users' )->count (); // return number
				break;
			case "max" :
				$results = DB::table ( 'users' )->max ( 'id' ); // get desc value if field has string type
				break;
			case "min" :
				$results = DB::table ( 'users' )->min ( 'email' ); // get asc value if field has string type
				break;
			case "avg" :
				$results = DB::table ( 'users' )->avg ( 'id' ); // return number 0.0 if field has string type
				break;
			case "sum" :
				$results = DB::table ( 'users' )->sum ( 'id' ); // return number 0 if field has string type
				break;
			case "combine" :
				$results = DB::table ( 'users' )->where ( 'first_name', 'Anna' )->avg ( 'id' );
				// $results = DB::table ( 'users' )->where ( ['first_name'=> 'Anna'] )->avg ( 'id' ); // use for multi conditions
				break;
		}
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return response
	 */
	public function sampleSelect8($method = null) {
		switch ($method) {
			default :
				$results = DB::table ( 'users' )->select ( 'first_name', 'email as user_email' )->get ();
				break;
			case "distinct" :
				$results = DB::table ( 'users' )->distinct ()->get ();
				$results = DB::table ( 'users' )->distinct ()->lists ( 'id' );
				break;
			case "raw" : // be careful not to create any SQL injection points
				$results = DB::table ( 'users' )->select ( DB::raw ( 'count(*) as user_count, email' ) )->where ( 'email', '<>', 1 )->groupBy ( 'email' )->get ();
				break;
		}
		// dd ( DB::getQueryLog() );
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return response
	 */
	public function sampleSelect9($method = null) {
		switch ($method) {
			default :
				$results = DB::table ( 'users' )->where ( 'id', '=', 1 )->get ();
				// $results = DB::table('users')->where('id', 1)->get();
				break;
			case "or" :
				$results = DB::table ( 'users' )->where ( 'id', 1 )->orWhere ( 'first_name', 'Anna' )->get ();
				break;
			case "between" :
				$results = DB::table ( 'users' )->whereBetween ( 'id', [ 
						1,
						100 
				] )->get ();
				break;
			case "skip-take" :
				$results = DB::table ( 'users' )->skip ( 10 )->take ( 5 )->get ();
				break;
			case "havingRaw" :
				$results = DB::table ( 'users' )->select ( '*', DB::raw ( 'SUM(id) as total_id' ) )->groupBy ( 'first_name' )->havingRaw ( 'SUM(id) > 2' )->get ();
				break;
		}
		dd ( DB::getQueryLog () );
		dd ( $results );
	}
	/**
	 * SELECT samples
	 *
	 * @return response
	 */
	public function sampleSelect10($method = null) {
		switch ($method) {
			default :
				DB::table ( 'users' )->insert ( [ 
						'email' => 'john' . time () . '@example.com',
						'first_name' => 'default name' 
				] );
				break;
			case "insert_multi_records" :
				DB::table ( 'users' )->insert ( [ 
						[ 
								'email' => 'taylor' . time () . '@example.com',
								'first_name' => 'default name' 
						],
						[ 
								'email' => 'dayle' . time () . '@example.com',
								'first_name' => 'default name' 
						] 
				] );
				break;
			case "insert_get_id" :
				$results = DB::table ( 'users' )->insertGetId ( [ 
						'email' => 'mary' . time () . '@example.com',
						'first_name' => 'default name' 
				] );
				break;
			case "update" :
				DB::table ( 'users' )->where ( 'id', 2 )->update ( [ 
						'email' => 'tien.nguyen' . time () . '@mulodo.com' 
				] );
				break;
			case "increment" :
				DB::table ( 'users' )->increment ( 'votes' );
				// update `users` set `votes` = `votes` + 1
				break;
			case "increment_2" :
				DB::table ( 'users' )->increment ( 'votes', 10 );
				// update `users` set `votes` = `votes` + 10
				break;
			case "decrement" :
				DB::table ( 'users' )->decrement ( 'votes' );
				// update `users` set `votes` = `votes` - 1
				break;
			case "decrement_2" :
				DB::table ( 'users' )->decrement ( 'votes', 10 );
				// update `users` set `votes` = `votes` - 10
				break;
			case "combine" :
				DB::table ( 'users' )->increment ( 'votes', 1, [ 
						'first_name' => 'Anna' 
				] );
				break;
			case "delete" :
				DB::table ( 'users' )->delete ();
				break;
			case "delete_1" :
				DB::table ( 'users' )->where ( 'votes', '<', 100 )->delete ();
				break;
			case "delete_2" :
				DB::table ( 'users' )->truncate ();
				break;
			case "sharedLock" :
				DB::table ( 'users' )->where ( 'votes', '>', 100 )->sharedLock ()->get ();
				break;
			case "lockForUpdate" :
				DB::table ( 'users' )->where ( 'votes', '>', 100 )->lockForUpdate ()->get ();
				break;
		}
		dd ( DB::getQueryLog () );
		// dd ( $results );
	}
	/**
	 * Database Transactions
	 *
	 * @return response
	 */
	public function sampleSelect11($method = null) {
		DB::transaction ( function () {
			DB::statement('SET autocommit=0;');
			DB::table ( 'users' )->truncate ();
			/*DB::table ( 'users' )->update ( [ 
					'votes' => 1 
			] );*/
			DB::table ( 'users' )->insert ( [ 
					'email' => 'vytien@gmail.com',
					'first_name' => 'default name' 
			] );
		} );
		switch ($method) {
			case "begin" :
				DB::beginTransaction ();
				break;
			case "rollback" :
				DB::beginTransaction ();
				DB::rollBack ();
				//DB::commit ();
				break;
		}
		dd ( DB::getQueryLog () );
	}
}
