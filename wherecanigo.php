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
<html>
<head>
	<style>html {
			font-family:Helvetica, Arial, sans-serif;
			width:600px;
		}
		td.nums {
			text-align:right;
			max-width: 70px;
		}
		td.true {
			background-color:#82B36C;
		}
		td.aero {
			background-color:#feb40f;
		}
		td.aero:after {
			content:'[2]';
			vertical-align: super;
			font-size:70%;
			color:grey;
			text-decoration:none;
		}
		td.false {
			background-color:#db4834;
		}
		td.info {
			background-color:#555555;
		}
		table {
			color:white;
			background-color:black;
			font-size:90%;
			margin-left:auto;
			margin-right:auto;
		}
		img {
			width:100px;
			height:auto;
		}
		input {
			max-width:50px;
		}
		td {
			max-width:100px;
			padding-left:10px;
			padding-right:10px;
			padding-top:5px;
			padding-bottom:5px;
		}
		td.info {
			font-size:80%;
		}
		table td ul {
			list-decoration: none;
			list-style:none;
			padding:0px;
		}
		table td ul li {
			margin-bottom:5px;
		}
		a.sup, span.sup {
			vertical-align: super;
			font-size:70%;
		}
		a.note {
			font-size:70%;
			color:grey;
			text-decoration:none;
		}
		a:visited {
			color:grey;
		}
		.else 
		{
		position: relative;
		width: 400px;
		padding: 10px;
float:left;
		background: #FFFFFF;
		border: #C08840 solid 4px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		}

		.else:after 
		{
		content: "";
		position: absolute;
		top: -15px;
		left: 53px;
		border-style: solid;
		border-width: 0 15px 15px;
		border-color: #FFFFFF transparent;
		display: block;
		width: 0;
		z-index: 1;
		}

		.else:before 
		{
		content: "";
		position: absolute;
		top: -22px;
		left: 50px;
		border-style: solid;
		border-width: 0 18px 18px;
		border-color: #C08840 transparent;
		display: block;
		width: 0;
		z-index: 0;
		}
.sci input {
margin-top:5px;
margin-bottom:5px;
}
.sci button {
margin-top:5px;
float:right;
margin-bottom:25px;
}
		.sci {
float:left;
position: relative;
left:10px;
width: 190px;
height: 145px;
padding: 10px;
background: #FFFFFF;
border: #7F7F7F solid 4px;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}

.sci:after 
{
content: "";
position: absolute;
top: 25px;
left: -15px;
border-style: solid;
border-width: 15px 15px 15px 0;
border-color: transparent #FFFFFF;
display: block;
width: 0;
z-index: 1;
}

.sci:before 
{
content: "";
position: absolute;
top: 22px;
left: -22px;
border-style: solid;
border-width: 18px 18px 18px 0;
border-color: transparent #7F7F7F;
display: block;
width: 0;
z-index: 0;
}
</style>
</head>
<body>
<?
$craft_dv_potential = "";
$ground_checked = "checked='checked'";
$orbit_checked = "";
$ants = "";

if($_GET["dv"] != ""){
	$craft_dv_potential = $_GET["dv"];
	$liftoff = 4550;
	if($_GET["loc"] == "orbit"){
		$ground_checked = "";
		$orbit_checked = "checked='checked'";
		$liftoff = 0;
	}
	if($craft_dv_potential-$liftoff < 800){
		$ants = "What is this, a ship for ants?!";
	}
	$showTable=true;
}?>
<div style="float:left;">
	<img style='float:left;' src='kerman1.gif' alt='I didnt make this picture. Im using it because I think its part of a media pack by Squad and therefore fine to use. Am I wrong? Do you know who did? Please let me know!' />
	<img style='float:left;' src='kerman2.gif' alt='this one too!' />
</div>

<form>
	<div class="sci">
		<label>My ship has a Delta-V potential (m/s) of: </label><input id="dv" name="dv" value='<?=$craft_dv_potential;?>' /><br />
		<label>Starting from:<br ></label>            
			<input type = "radio"
				name = "loc"
				id = "rdo_ground"
				value = "ground"
				<?=$ground_checked;?> />
			<label for = "sizeSmall">Kerbin</label>
			<input type = "radio"
				name = "loc"
				id = "rdo_orbit"
				value = "orbit"
				<?=$orbit_checked;?> />
			<label for = "sizeMed">Kerbin Orbit</label><br />
		<button type="Submit">Where Can I Go?</button>
	</div>
</form>
<?
if($showTable){
	//total_dv_potential
	
	$tdp = $craft_dv_potential - $liftoff;
	?><div class="else"><table><p>Well... <?=$ants;?></p>
	<th>Body</th><th>Days</th><th>Encounter?<a class="note sup" href='#note'>[1]</a></th><th>Orbit?<a class="note sup" href='#note'>[1]</a></th><th>Land?<a class="note sup" href='#note'>[1]</a></th>
	<?
	foreach ($places as $v){
		$html = $v->get_data_row($tdp);
		if($html==""){
				echo "nothing";
		}
		echo $html;
	}
	?><tr><td class='info' colspan='5'>	
		<ul><li><a class="note" name="note">[1]</a> This figure is the difference between that delta-v required, and that available. 
		Try to make it as close to 0 as possible if you want to justify your expenditure to the alread-quite-annoyed Kerbal tax-payers.</li>
		<li><a class="note" name="note2">[2]</a> If the body (or its parent body) has an an atmosphere, we've tacked on the possiblity 
		to aerobrake for orbiting and landing. Except we've just set it at a leeway of 200m/s, because Bill borrowed our calculator just before he got in the... oh.</li>
		<li><a class="note" name="note3">[3]</a> We've assumed you're going to make a stable orbit around a parent body before 
		transfering to a moon, because were all about safety here at KSP Mission Control.</li></ul>	
	</td></tr></table></div><?
}
?>
</body></html>