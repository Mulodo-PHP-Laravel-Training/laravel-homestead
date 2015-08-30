<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PackagesController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$results ['packalyst'] = $this->readURL ( "http://packalyst.com/packages" );
		return $results;
	}
	public function readURL($url, $type = null) {
		$contents = file_get_contents ( $url );
		switch ($type) {
			default :
				$pos = strpos ( $contents, "<div id=\"content\">" );
				$pos_2 = strpos ( $contents, "<footer>" );
				break;
		}
		
		$contents = substr ( $contents, $pos, $pos_2 - $pos );
		$contents = str_replace("http://packalyst.com", url(), $contents);
		if ($contents === false) {
			die ( "Couldn't fetch the file." );
		}
		return $contents;
	}
}
