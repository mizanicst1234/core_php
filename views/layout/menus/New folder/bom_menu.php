<?php
	echo main_sidebar_dropdown([
		"name"=>"Bom",
		"icon"=>"nav-icon fa fa-wrench",
		"links"=>[
			["route"=>"create-bom","text"=>"Create Bom","icon"=>"far fa-circle nav-icon"],
			["route"=>"boms","text"=>"Manage Bom","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
