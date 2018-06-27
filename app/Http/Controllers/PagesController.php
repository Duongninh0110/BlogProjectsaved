<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view ('Pages.welcome');
	}
	public function getAbout() {
		$Fist="Ninh";
		$Last="Duong";
		$Fullname=$Fist."".$Last;
		$Email="Duongninh0110@gmail.com";
		$Data=[];
		$Data['Fullname']=$Fullname;
		$Data['Email']=$Email;
		return view ('Pages.about')->withData($Data);

	}
	public function getContact() {
	return view ('Pages.contact');

	}
 
}





