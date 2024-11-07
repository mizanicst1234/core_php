<?php
	
 echo Menu::item([
	
	"name"=>"Cattle",		
	"icon"=>"nav-icon fa fa-users",
	"route"=>"#",
	"links"=>[
		["route"=>"create-cattle","text"=>"Create Cattle"],
		["route"=>"cattle","text"=>"Manage Cattle","icon"=>"fa fa-id-card-o nav-icon"],
	]
]);

?>