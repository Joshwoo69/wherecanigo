<?php
class place {
	private $encounter_dv, $orbit_dv, $land_dv, $name, $order, $days, $colour, $aerobraking;
	public $encounter_bool, $encounter_spare, $orbit_bool, $orbit_spare, $land_bool, $land_spare;
	
	public function get_encounter_dv(){
		return $this->encounter_dv;
	}
	
	public function get_orbit_dv(){
		return $this->orbit_dv;
	}
	
	public function get_land_dv(){
		return $this->encounter_dv;
	}
	
	public function get_name(){
		return $this->name;
	}
	
	public function get_order(){
		return $this->order;
	}
	
	public function get_days(){
		return $this->days;
	}
	
	public function get_colour(){
		return $this->colour;
	}
	
	public function get_aerobraking(){
		return $this->aerobraking;
	}
	
	public function set_encounter_dv($v){
		$this->encounter_dv = $v;
	}
	
	public function set_orbit_dv($v){
		$this->orbit_dv = $v;
	}
	public function set_land_dv($v){
		$this->land_dv = $v;
	}
	
	public function set_name($v){
		$this->name = $v;
	}
	
	public function set_order($v){
		$this->order = $v;
	}
	
	public function set_days($v){
		$this->days = $v;
	}
	
	public function set_colour($v){
		$this->colour = $v;
	}
	
	public function set_aerobraking($v){
		$this->aerobraking = $v;
	}
	
	function __construct($v_encounter_dv, $v_orbit_dv, $v_land_dv, $v_name, $v_order, $v_days, $v_colour, $v_aerobraking){
		$this->set_encounter_dv($v_encounter_dv);
		$this->set_orbit_dv($v_orbit_dv);
		$this->set_land_dv($v_land_dv);
		$this->set_name($v_name);
		$this->set_order($v_days);
		$this->set_days($v_days);
		$this->set_colour($v_colour);
		$this->set_aerobraking($v_aerobraking);
	}
	
	function getDiff($tdp, $rdp){
		return ($tdp - $rdp);
	}
	
	function checkPotentials($tdp){
		$this->encounter_spare = ($tdp - $this->get_encounter_dv());
		if($this->encounter_spare > 0){
			$this->encounter_bool = true;
		} else {
			$this->encounter_bool = false;
		}
		$this->orbit_spare = ($tdp - $this->get_encounter_dv() - $this->get_orbit_dv());
		if($this->orbit_spare > 0){
			$this->orbit_bool = true;
		} else {
			$this->orbit_bool = false;
		}
		$this->land_spare = ($tdp - $this->get_encounter_dv() - $this->get_orbit_dv() - $this->get_land_dv());
		if($this->land_spare > 0){
			$this->land_bool = true;
		} else {
			$this->land_bool = false;
		}
	}
	
	function get_data_row($tdp){
		$this->checkPotentials($tdp);
		
		if($this->encounter_bool){
			$en_class = "true";
		} else {
			$en_class = "false";
		}
		if($this->get_aerobraking() && $this->orbit_spare < 0 && $this->orbit_spare > -201){
			$or_class= "aero";
		} else {
			if($this->orbit_bool){
				$or_class = "true";
			} else {
				$or_class = "false";
			}
		}
		if($this->get_aerobraking() && $this->land_spare < 0 && $this->land_spare > -201){
			$la_class= "aero";
		} else {
			if($this->land_bool){
				$la_class = "true";
			} else {
				$la_class = "false";
			}
		}
		
		$html = "<tr>";
		$html.= "<td style='background-color: " . $this->get_colour() . "'>" . $this->get_name() . "</td>";
		$html.= "<td class='nums' style='background-color: " . $this->get_colour() . "'>" . $this->get_days() . "</td>";
		$html.= "<td class='nums " . $en_class . "'>" . $this->encounter_spare . " <span class='sup'>m/s</span></td>";
		$html.= "<td class='nums " . $or_class . "'>" . $this->orbit_spare . " <span class='sup'>m/s</span></td>";
		$html.= "<td class='nums " . $la_class . "'>" . $this->land_spare . " <span class='sup'>m/s</span></td>";
		$html.= "</tr>";
		
		return $html;
	}
}


				//new place(950, "Sun", 1, 2),
				//new place(800, "Kerbin GSO", 0, 1),
$places = array(
	new place(850, 210, 640, "Mun", 0, 1, "#666666", 0),
	new place(920, 80, 240, "Minmus", 0, 2, "#274E13", 0),
	new place(950+730, 2200, 1400, "Moho", 0, 30, "#980000", 0),
	new place(950+80, 1310, 12000, "Eve", 0, 42, "#674EA7", 1),
	new place(950+80+1310+1650, 210, 35, "Gilly", 0, 43, "#351C75", 1),
	new place(950+110, 370, 1380, "Duna", 0, 75, "#CC0000", 1),
	new place(950+110+370+270, 110, 535, "Ike", 0, 76, "#990000", 1),
	new place(950+350, 800, 555, "Dres", 0, 150, "#B7B7B7", 0),
	new place(950+965, 2630, 99999, "Jool", 0, 280, "#7AE460", 1),
	new place(950+965+2630+2500, 900, 180, "Pol", 0, 281, "#274E13", 1),
	new place(950+965+2630+2430, 950, 276, "Bop", 0, 281, "#38761D", 1),
	new place(950+965+2630+2190, 940, 3070, "Tylo", 0, 281, "#6AA84F", 1),
	new place(950+965+2630+1970, 790, 1180, "Vall", 0, 281, "#93C47D", 1),
	new place(950+965+2630+1600, 780, 2800, "Laythe", 0, 281, "#B6D7A8", 1),
	new place(950+1150, 2100, 840, "Eeloo", 0, 296, "#000000", 0)
	);
?>
