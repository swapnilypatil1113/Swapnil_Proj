<?php

class Controller_Locations extends Controller_Template {

	public function action_locnnview()
	{   
		$this->template->title = '';
		$userip=Input::post('userip');
		$columns = array();
		$columns = explode(" ",$userip);
		$URL = "https://maps.googleapis.com/maps/api/place/search/json?location=40.71435,-74.00597&radius=5000&types=".$columns[1]."&name=".$columns[0]."&sensor=false&key=AIzaSyBd-nGo9edT5eV7aj_itM5mTT7c8luuSPA";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $resulta = curl_exec ($ch);
        $result = json_decode($resulta,true);
		
		$this->template->content = View::factory('locations/locnnview');
		$this->template->content->username = $result;
		return $this->template->content;
		
	}

}

/* End of file locations.php */