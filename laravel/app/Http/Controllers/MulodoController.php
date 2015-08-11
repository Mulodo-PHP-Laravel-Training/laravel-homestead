<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MulodoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$data ['sliders'] = $this->getHeaderSlider ();
		$data ['clients'] = $this->getClients ();
		$data ['teamMembers'] = $this->getTeamMembers ();
		$data ['portfolio'] = $this->getPortfolio ();
		$data ['plans'] = $this->getPlans ();
		$data ['services'] = $this->getServices ();
		$data ['processes'] = $this->getProcesses();
		
		return view ( 'mulodo.homepage', $data );
	}
	/**
	 * Get home content - header content.
	 *
	 * @return Response
	 */
	public function getHeaderSlider() {
		$data = array (
				'slider1.png',
				'slider2.png',
				'slider3.png',
				'slider4.png',
				'slider4.png' 
		);
		return $data;
	}
	/**
	 * Get list members
	 *
	 * @return Response
	 */
	public function getTeamMembers() {
		$data = array (
				array (
						'img' => 'image1.png',
						'name' => 'Full Name',
						'des' => 'Job Title',
						'social_fb' => 'https://www.facebook.com/user',
						'social_tw' => 'https://www.twitter.com/user',
						'social_linkedin' => 'https://www.linkedin.com/user',
						'social_google' => 'https://plus.google.com/user',
						'social_rss' => 'https://www.rss.com/user' 
				),
				array (
						'img' => 'image2.png',
						'name' => 'Full Name',
						'des' => 'Job Title',
						'social_fb' => 'https://www.facebook.com/user',
						'social_tw' => 'https://www.twitter.com/user',
						'social_linkedin' => 'https://www.linkedin.com/user',
						'social_google' => 'https://plus.google.com/user',
						'social_rss' => 'https://www.rss.com/user' 
				),
				array (
						'img' => 'image3.png',
						'name' => 'Full Name',
						'des' => 'Job Title',
						'social_fb' => 'https://www.facebook.com/user',
						'social_tw' => 'https://www.twitter.com/user',
						'social_linkedin' => 'https://www.linkedin.com/user',
						'social_google' => 'https://plus.google.com/user',
						'social_rss' => 'https://www.rss.com/user' 
				) 
		);
		return $data;
	}
	/**
	 * Get list portfolio
	 *
	 * @return Response
	 */
	public function getPortfolio() {
		$data = array (
				array (
						'img' => '1.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '2.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '3.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '4.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '5.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '6.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '7.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '8.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				),
				array (
						'img' => '9.jpg',
						'title' => 'Title',
						'des' => 'Description' 
				) 
		);
		return $data;
	}
	/**
	 * Get list plans
	 *
	 * @return Response
	 */
	public function getPlans() {
		$data = array (
				array (
						'title' => 'PERSONAL SITE',
						'price' => '$15',
						'des' => 'Unlimited Email-Addresses. 50GB Disk & Space.
									Unlimited MySQL-Databases. Unlimited Domains.
									Free Billing Systems' 
				),
				array (
						'title' => 'SMALL BUSINESS',
						'price' => '$25',
						'des' => 'Unlimited Email-Addresses. 50GB Disk & Space.
									Unlimited MySQL-Databases. Unlimited Domains.
									Free Billing Systems' 
				),
				array (
						'title' => 'CORPORATE SITE',
						'price' => '$50',
						'des' => 'Unlimited Email-Addresses. 50GB Disk & Space.
									Unlimited MySQL-Databases. Unlimited Domains.
									Free Billing Systems' 
				),
				array (
						'title' => 'E-COMMERCE SITE',
						'price' => '$90',
						'des' => 'Unlimited Email-Addresses. 50GB Disk & Space.
									Unlimited MySQL-Databases. Unlimited Domains.
									Free Billing Systems' 
				) 
		);
		return $data;
	}
	/**
	 * Get list services
	 *
	 * @return Response
	 */
	public function getServices() {
		$data = array (
				array (
						'img' => 'Web-Design-Development.png',
						'title' => 'WEB DESIGN &amp; DEVELOPMENT' 
				),
				array (
						'img' => 'Branding-Identity.png',
						'title' => 'Branding/Positioning &amp; IDENTITY' 
				),
				array (
						'img' => 'Motion-Video.png',
						'title' => 'Marketing Communications' 
				),
				array (
						'img' => 'UX-UI.png',
						'title' => 'UI/UX Design &amp; Mobile Design' 
				) 
		);
		return $data;
	}
	/**
	 * Get list processes
	 *
	 * @return Response
	 */
	public function getProcesses() {
		$data = array (
				array (
						'icon' => 'locked',
						'icon-name' => 'Security',
						'title' => 'BRAINSTORM',
						'des' => 'Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Suspendisse varius enim in eros
								elementum tristique. Duis cursus, mi quis viverra ornare, eros
								dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
								faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut
								sem vitae risus tristique posuere.' 
				),
				array (
						'icon' => 'mobile',
						'icon-name' => 'Mobile',
						'title' => 'PLAN',
						'des' => 'Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Suspendisse varius enim in eros
								elementum tristique. Duis cursus, mi quis viverra ornare, eros
								dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
								faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut
								sem vitae risus tristique posuere.' 
				),
				array (
						'icon' => 'screen',
						'icon-name' => 'Desktop',
						'title' => 'DESIGN',
						'des' => 'Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Suspendisse varius enim in eros
								elementum tristique. Duis cursus, mi quis viverra ornare, eros
								dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
								faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut
								sem vitae risus tristique posuere.' 
				),
				array (
						'icon' => 'earth',
						'icon-name' => 'Partners',
						'title' => 'DEVELOP',
						'des' => 'Lorem ipsum dolor sit amet,
								consectetur adipiscing elit. Suspendisse varius enim in eros
								elementum tristique. Duis cursus, mi quis viverra ornare, eros
								dolor interdum nulla, ut commodo diam libero vitae erat. Aenean
								faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut
								sem vitae risus tristique posuere.' 
				) 
		);
		return $data;
	}
	/**
	 * Get list clients
	 *
	 * @return Response
	 */
	public function getClients() {
		$data = array (
				'client 1' => 'client-logo1.png',
				'client 2' => 'client-logo2.png',
				'client 3' => 'client-logo3.png',
				'client 4' => 'client-logo4.png',
				'client 5' => 'client-logo5.png',
				'client 6' => 'client-logo6.png' 
		);
		return $data;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function store(Request $request) {
		//
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function show($id) {
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function edit($id) {
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request        	
	 * @param int $id        	
	 * @return Response
	 */
	public function update(Request $request, $id) {
		//
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id        	
	 * @return Response
	 */
	public function destroy($id) {
		//
	}
}
