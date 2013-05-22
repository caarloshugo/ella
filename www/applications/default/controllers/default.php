<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
		
		$this->users = array(
			"jasmina-brankovic" => array("name" => "Jasmina Brankovic", 	  				   "language" => "en"),
			"moses-hategeka"    => array("name" => "Moses Hategeka", 	  					   "language" => "en", "flight2" => true),
			"nilima-rai" 	    => array("name" => "Nilima Rai", 	 				 		   "language" => "en", "flight2" => true),
			"ghislain-koffi"    => array("name" => "Ghislain Koffi Dodji Nyaku", 	  		   "language" => "en"),
			"buddha-narayan"    => array("name" => "Buddha Narayan Sahani Kewat", 	 		   "language" => "en", "flight2" => true),
			"ronald-ssenfuka"   => array("name" => "Ronald Ssenfuka", 	  					   "language" => "en", "flight2" => true),
			"abu-bakar"  		=> array("name" => "Abu Bakar Siddique", 	  				   "language" => "en"),
			"margaret-onwanyi"  => array("name" => "Margaret Onwanyi Onah", 	  			   "language" => "en"),
			"syed-naeem"  		=> array("name" => "Syed Naeem Ather Abbas", 	  			   "language" => "en"),
			"mukhtar-paras" 	=> array("name" => "Mukhtar Paras Shah", 	 				   "language" => "en"),
			"venessa-claudette" => array("name" => "Venessa Claudette Thigesharee Padayachee", "language" => "en")
		); 
	}
	
	public function index($user = FALSE) {
		if($user != FALSE and isset($this->users[$user])) {
			$vars["user"]    = $this->users[$user];
			$vars["user_id"] = $user;
			$vars["view"] = $this->view("home", TRUE);
			
			$this->render("content", $vars);
		}
	}
	
	
	/*
	jasmina-brankovic => Jasmina Brankovic
	moses-hategeka    => Moses Hategeka
	nilima-rai        => Nilima Rai
	ghislain-koffi    => Ghislain Koffi Dodji Nyaku 
	buddha-narayan    => Buddha Narayan Sahani Kewat
	ronald-ssenfuka   => Ronald Ssenfuka
	abu-bakar         => Abu Bakar Siddique
	margaret-onwanyi  => Margaret Onwanyi Onah
	syed-naeem        => Syed Naeem Ather Abbas
	mukhtar-paras     => Mukhtar Paras Shah
	venessa-claudette => Venessa Claudette Thigesharee Padayachee
	david-oluremi     => David Oluremi Tola Winjobi
	*/

}
