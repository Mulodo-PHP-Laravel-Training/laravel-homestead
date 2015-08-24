<?php

namespace App\Http\Controllers\admin\sample;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;

class CheatsheetsController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$results ['laravel_methods'] = $this->readURL ( "http://laravel.com/docs/5.1/helpers#method-array-add", 1 );
		$results ['artisan_commands'] = $this->readURL ( "http://cheats.jesse-obrien.ca/", 2 );
		return $results;
	}
	public function readFile($filename) {
		try {
			$contents = File::get ( $filename );
		} catch ( Illuminate\Filesystem\FileNotFoundException $exception ) {
			die ( "The file doesn't exist" );
		}
		return $content;
	}
	public function readURL($url, $type) {
		$contents = file_get_contents ( $url );
		switch ($type) {
			default :
				$pos = strpos ( $contents, "<article>" );
				break;
			case 2 :
				$pos = strpos ( $contents, "<div class=\"row full-width\">" );
				break;
		}
		
		$contents = substr ( $contents, $pos );
		if ($contents === false) {
			die ( "Couldn't fetch the file." );
		}
		return $contents;
	}
}


