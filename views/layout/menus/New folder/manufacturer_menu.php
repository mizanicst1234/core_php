<?php
	echo main_sidebar_dropdown([
		"name"=>"Manufacturer",
		"icon"=>"nav-icon fa fa-wrench",
		"links"=>[
			["route"=>"create-manufacturer","text"=>"Create Manufacturer","icon"=>"far fa-circle nav-icon"],
			["route"=>"manufacturers","text"=>"Manage Manufacturer","icon"=>"far fa-circle nav-icon"],
		]
	]);
?>
